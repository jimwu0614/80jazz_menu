<?php
session_start();
date_default_timezone_set('Asia/Taipei');

function dd($ary){
    echo "<pre>";
    print_r($ary);
    echo "</pre>";
}
function to($url){
    header('location:'.$url);
}

class DB{
    protected $dsn = "mysql:host=localhost;chatset=utf8;dbname=s1110205";
    protected $table;
    protected $pdo;

    function __construct($table){
        $this->table = $table;
        // $this->pdo = new PDO($this->dsn,'root','');
        $this->pdo = new PDO($this->dsn,'s1110205','s1110205');
    }

    function save($ary){
        if (isset($ary['id'])) {
            foreach ($ary as $key => $value) {
                $tmp[] = "`$key` = '$value'";
            }
            $sql = "UPDATE `$this->table` SET". join(" , ",$tmp) ." WHERE `id` = {$ary['id']}";
        }else{
            
            $key = join("` , `",array_keys($ary));
            $val = join("' , '",$ary);
            $sql = "INSERT INTO `$this->table` (`$key`) VALUES ('$val')";
        }
        // echo $sql;
        // echo "<br>";
        return $this->pdo->exec($sql);
    }

    function all(...$ary){
        $sql = "SELECT * FROM $this->table ";
        if (isset($ary[0])) {
            if(is_array($ary[0])){
                foreach ($ary[0] as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                   
                }
                $sql.=" WHERE ".join(" AND ",$tmp);
            }else {
                $sql.=$ary[0];
            }
        }
        if (isset($ary[1])) {
            $sql.=$ary[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    

    function find($ary){
        $sql = "SELECT * FROM $this->table WHERE ";
   
            if(is_array($ary)){
                foreach ($ary as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                }
                $sql.=join(" AND ",$tmp);
            }else {
                $sql.= "`id` = $ary";
            }
        
        // echo $sql;
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    
    
    function del($ary){
        $sql = "DELETE FROM $this->table WHERE ";
   
            if(is_array($ary)){
                foreach ($ary as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                }
                $sql.=join(" AND ",$tmp);
            }else {
                $sql.= "`id` = $ary";
            }
        
        // echo $sql;
        // echo "<br>";
        return $this->pdo->exec($sql);
    }
    
    
    function math($math,$col,...$ary){
        $sql = "SELECT $math($col) FROM $this->table ";
        if (isset($ary[0])) {
            if(is_array($ary[0])){
                foreach ($ary[0] as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                   
                }
                $sql.=" WHERE ".join(" AND ",$tmp);
            }else {
                $sql.=$ary[0];
            }
        }
        if (isset($ary[1])) {
            $sql.=$ary[1];
        }
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }
    

}
$Whiskey = new DB('jazz_whiskey');
$Brandy = new DB('jazz_brandy');
$Ginvodka = new DB('jazz_ginvodka');
$Rumteq = new DB('jazz_rumteq');
$Beerliquer = new DB('jazz_beerliquer');
$Sake = new DB('jazz_sake');
$Wine = new DB('jazz_wine');
$Cocktail = new DB('jazz_cocktail');
$Soft = new DB('jazz_soft');
$Meal = new DB('jazz_meal');
$Event = new DB('jazz_event');
$Admin = new DB('jazz_admin');
$Coffee = new DB('jazz_coffee');
$Beans = new DB('jazz_beans');
?>