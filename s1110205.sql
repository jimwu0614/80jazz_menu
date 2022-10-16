-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-10-16 12:10:15
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1110205`
--

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_admin`
--

CREATE TABLE `jazz_admin` (
  `id` int(11) NOT NULL,
  `acc` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_admin`
--

INSERT INTO `jazz_admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_beans`
--

CREATE TABLE `jazz_beans` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '品名',
  `land` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '產區',
  `roast` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '焙度',
  `price` int(4) NOT NULL COMMENT '價格',
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '介紹',
  `rank` tinyint(4) NOT NULL COMMENT '排序',
  `sh` tinyint(1) NOT NULL DEFAULT 1 COMMENT '上架'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_beans`
--

INSERT INTO `jazz_beans` (`id`, `name`, `land`, `roast`, `price`, `intro`, `rank`, `sh`) VALUES
(1, '日曬耶加 G1', '衣索比亞', '淺焙', 470, '衣索比亞陽光下熟成的甘醇果實，G1等級日曬耶加雪菲，研磨瞬間，雞蛋花般的香氣，優雅綻放，蜜桃與香檳葡萄的淡淡發酵水果香氣，餘韻綿長。', 1, 1),
(2, '可可公爵', '瓜地馬拉', '中焙', 420, '黑巧克力深邃的口感，馥郁焦糖甜香，微苦的甜味，轉化成綿延不斷回甘的餘韻，充滿變化就像是位優雅的公爵，令人回味再三。', 2, 1),
(3, '雅典娜女神', '衣索比亞、瓜地馬拉', '淺焙', 420, '希臘神話中，雅典娜女神守護著農作物，也就是代表守護著美好滋味的咖啡果實。清新莓果與熱帶水果香氣悠然綻放，蘋果酒、玫瑰、杏仁、甜橙的愉悅甜感。一飲入口是具層次感且愉悅的甘柔甜味，令人沈醉不已。', 3, 1),
(4, '白蜜甜心', '哥倫比亞、衣索比亞', '中焙', 460, '以蜜處理法特殊處理，入口即感受甜李、荔枝果蜜甘醇，香氣飽滿均衡，圓潤喉韻帶著細緻的咖啡花香，甜蜜花香於舌尖慢慢綻放。', 4, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_beerliquer`
--

CREATE TABLE `jazz_beerliquer` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inprice` int(11) NOT NULL,
  `inputtime` date NOT NULL,
  `supply` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottle` int(11) NOT NULL,
  `glass` int(11) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_beerliquer`
--

INSERT INTO `jazz_beerliquer` (`id`, `name`, `chinese`, `image`, `type`, `inprice`, `inputtime`, `supply`, `bottle`, `glass`, `memo`, `intro`, `promo`, `rank`, `sh`) VALUES
(1, 'Baileys Irish Cream', '愛爾蘭貝禮詩甜奶酒', '', 'Liquer', 0, '0000-00-00', '', 2500, 350, '', '', '', 1, 1),
(2, 'Dita Lychee Liqueur', '法國Dita荔枝香甜利口酒', '', 'Liquer', 0, '0000-00-00', '', 2000, 0, '', '', '(送兩罐雪碧)', 2, 1),
(3, 'Budweiser\r\n330ml', '百威啤酒', '', 'Beer', 0, '0000-00-00', '', 500, 100, '', '', '', 3, 1),
(4, 'Peroni Beer\r\n330ml', '沛羅尼啤酒', '', 'Beer', 0, '0000-00-00', '', 750, 150, '', '', '', 4, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_brandy`
--

CREATE TABLE `jazz_brandy` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inprice` int(11) NOT NULL,
  `inputtime` date NOT NULL,
  `supply` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottle` int(11) NOT NULL,
  `glass` int(11) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_brandy`
--

INSERT INTO `jazz_brandy` (`id`, `name`, `chinese`, `image`, `type`, `inprice`, `inputtime`, `supply`, `bottle`, `glass`, `memo`, `intro`, `promo`, `rank`, `sh`) VALUES
(1, 'Remy Martin VSOP', '人頭馬VSOP', '', 'Cognac', 0, '0000-00-00', '', 4500, 420, 'Congnac', '', '', 1, 1),
(2, 'Hennessy VSOP', '軒尼詩VSOP', '', 'Cognac', 0, '0000-00-00', '', 4800, 450, 'Congnac', '', '', 2, 1),
(3, 'Remy Martin X.O', '人頭馬X.O', '', 'Cognac', 0, '0000-00-00', '', 10000, 0, 'Congnac X.O', '', '', 3, 1),
(4, 'Hennessy X.O', '軒尼詩X.O', '', 'Cognac', 0, '0000-00-00', '', 12000, 0, 'Congnac X.O', '', '', 4, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_cocktail`
--

CREATE TABLE `jazz_cocktail` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '品名',
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分類',
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '中文',
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '照片',
  `base` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '基底酒',
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '簡介',
  `ingredient` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '材料',
  `feel` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '酒感',
  `acidity` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '酸度',
  `sweet` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '甜度',
  `step` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '步驟',
  `web` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '參考網頁',
  `rank` int(11) NOT NULL COMMENT '排序',
  `sh` tinyint(1) NOT NULL DEFAULT 1 COMMENT '上下架'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_cocktail`
--

INSERT INTO `jazz_cocktail` (`id`, `name`, `type`, `chinese`, `image`, `base`, `intro`, `ingredient`, `feel`, `acidity`, `sweet`, `step`, `web`, `rank`, `sh`) VALUES
(1, 'Gin Tonic', 'Classic', '琴通寧', '', 'Gin', '如果說到琴酒最經典的調酒莫過於Gin Tonic，最簡單的材料，帶出琴酒最原始最美好的風味，是款萬年不敗的經典調酒。', '琴酒	45 ml	 \r\n通寧水	 適量	 \r\n檸檬角	1 個', '★★☆☆☆', '★☆☆☆☆', '☆☆☆☆☆', '１．可林杯放入冰塊，攪拌冰杯後將融水倒出。\r\n２．倒入琴酒，擠入檸檬汁，最後補滿通寧水，稍加攪拌。\r\n\r\n建議裝飾物：檸檬角', 'https://mixology.com.tw/RecipeContent.aspx?acid=7&rid=G004', 1, 1),
(2, 'Chaplin', 'Classic', '卓別林', '', 'Gin', '1920年代，美國一位調酒師為了向卓別林致敬，創造出了這杯滑稽美麗卻又帶著點悲傷的酒。&#32\r\n以野莓琴酒作為基調，帶著優雅的杏桃白蘭地甜而不膩，有著淡淡的藥草苦澀和莓果香氣。', '野莓琴酒	30 ml	 \r\n杏桃白蘭地	30 ml	 \r\n現榨檸檬汁	20 ml', '★★☆☆☆', '★★★☆☆', '★★☆☆☆', '１．冰鎮淺碟香檳杯。\n２．雪克杯加入所有材料及冰塊，搖盪均勻。\n３．濾掉冰塊，將酒液倒入冰鎮過的淺碟香檳杯。\n\n建議裝飾物：柳橙皮捲', 'https://mixology.com.tw/RecipeContent.aspx?acid=7&rid=G039', 2, 1),
(3, 'Whiskey Sour', 'Classic', '威士忌酸酒', '', 'Whiskey', '', '波本威士忌	60 ml	 \r\n現榨檸檬汁	20 ml	 \r\n純糖漿	15 ml', '', '', '', '１．冰鎮古典杯。\r\n２．雪克杯加入所有材料及冰塊，搖盪均勻。\r\n３．濾掉冰塊，將酒液倒入冰鎮過的古典杯，加入適量冰塊。\r\n\r\n建議裝飾物：糖漬櫻桃', 'https://mixology.com.tw/RecipeContent.aspx?acid=11&rid=W016', 3, 1),
(4, 'Old Fashioned', 'Classic', '古典雞尾酒', '', 'Whiskey', '', '波本威士忌	60 ml	 \r\n安格式原味苦精	2~3 dashes	 \r\n蘇打水	1 splash	 \r\n純糖漿	1 tsp', '', '', '', '１．冰鎮古典杯。\r\n２．杯中放入方糖，滴入苦精再加入少許蘇打水\r\n３．將方糖搗碎後加入威士忌攪拌至溶解。\r\n４．加入岩冰攪拌均勻。', 'https://mixology.com.tw/RecipeContent.aspx?acid=11&rid=W012', 4, 0),
(5, 'Godfather', 'Classic', '教父', '', 'Whiskey', '', '蘇格蘭調和式威士忌	90 ml	 \r\n杏仁香甜酒	30 ml', '', '', '', '１．冰鎮古典杯。\r\n２．杯中放入岩石型冰塊，加入所有材料，攪拌均勻。\r\n', 'https://mixology.com.tw/RecipeContent.aspx?acid=11&rid=W010', 5, 1),
(6, 'X.Y.Z.', 'Classic', 'X.Y.Z.', '', 'Rum', '', '陳年蘭姆酒	55 ml	 \r\n君度橙酒	10 ml	 \r\n現榨檸檬汁	20 ml	 \r\n純糖漿	10 ml', '', '', '', '１．冰鎮馬丁尼杯。\r\n２．雪克杯加入所有材料及冰塊，搖盪均勻。\r\n３．濾掉冰塊，將酒液倒入冰鎮過的馬丁尼杯。', 'https://mixology.com.tw/RecipeContent.aspx?acid=8&rid=R019', 6, 1),
(7, 'Cuba Libre', 'Classic', '自由古巴', '', 'Rum', '', '白蘭姆酒	60 ml	 \r\n可口可樂	120 ml	 \r\n檸檬角	1 個', '', '', '', '１．可林杯放入冰塊，攪拌冰杯後將融水倒出。\r\n２．倒入蘭姆酒、擠入檸檬汁，最後補滿可樂，稍加攪拌。\r\n\r\n建議裝飾物：檸檬角', 'https://mixology.com.tw/RecipeContent.aspx?acid=8&rid=R003', 7, 1),
(8, 'Olympic', 'Classic', '奧林匹克  ', '', 'Brandy', '', '白蘭地	30 ml	 \n香橙干邑白蘭地	30 ml	 \n現榨柳橙汁	30 ml', '', '', '', '１．將所有材料倒入雪克杯，加入冰塊搖盪均勻\n２．雙重過濾，濾掉冰塊將酒液倒入白蘭地杯，加入冰塊\n３．噴附柳橙皮油，投入皮捲作為裝飾\n\n建議裝飾物：勒薩多櫻桃、柳橙皮捲', 'https://mixology.com.tw/RecipeContent.aspx?acid=10&rid=B030', 8, 1),
(9, 'Tequila Sunrise', 'Classic', '龍舌蘭日出', '', 'Tequila', '', '龍舌蘭	40 ml	 \r\n現榨柳橙汁	120 ml	 \r\n紅石榴糖漿	適量 ', '', '', '', '１．可林杯放入冰塊，攪拌冰杯後將融水倒出。\r\n２．倒入龍舌蘭及柳橙汁，攪拌均勻。\r\n３．再緩緩倒入紅石榴糖漿沉底。\r\n\r\n建議裝飾物：檸檬片', 'https://mixology.com.tw/RecipeContent.aspx?acid=9&rid=T005', 9, 1),
(10, 'Margarita', 'Classic', '瑪格麗特', '', 'Tequila', '', '龍舌蘭	60 ml	 \r\n君度橙酒	20 ml	 \r\n現榨檸檬汁	20 ml	 \r\n純糖漿	2 tsp	 \r\n瑪格麗特苦精	1 dash', '', '', '', '１．以馬丁尼杯製作鹽口杯，並冰鎮。\r\n２．雪克杯加入所有材料及冰塊，搖盪均勻。\r\n３．濾掉冰塊，將酒液倒入冰鎮過的鹽口馬丁尼杯。\r\n\r\n建議裝飾物：檸檬片', 'https://mixology.com.tw/RecipeContent.aspx?acid=9&rid=T001', 10, 1),
(11, 'Daiquiri', 'Classic', '戴克利', '', 'Rum', '', '白蘭姆酒	60 ml	 \r\n現榨萊姆汁	15 ml	 \r\n純糖漿	10 ml', '', '', '', '１．冰鎮馬丁尼杯。\n２．雪克杯加入所有材料及冰塊，搖盪均勻。\n３．濾掉冰塊，將酒液倒入冰鎮過的馬丁尼杯。\n\n建議裝飾物：檸檬皮捲', 'https://mixology.com.tw/RecipeContent.aspx?acid=8&rid=R001', 11, 1),
(12, 'Mojito', 'Classic', '莫希托', '', 'Rum', '', '白蘭姆酒	60 ml	 \r\n純糖漿	30 ml	 \r\n現榨檸檬汁	30 ml	 \r\n薄荷葉	10-12 片	 \r\n蘇打水	適量', '', '', '', '１．厚底長飲杯放入薄荷葉 & 一半蘭姆酒，用搗棒輕壓出香氣。\r\n２．加入切塊檸檬，用搗棒壓出汁（或直接加入檸檬汁30ml）。\r\n３．加入剩餘蘭姆酒+純糖漿+碎冰至八分滿，攪拌均勻。\r\n４．再加入蘇打水至全滿，稍加攪拌。\r\n\r\n建議裝飾物：薄荷葉一株', 'https://mixology.com.tw/RecipeContent.aspx?acid=8&rid=R010', 12, 1),
(13, 'Long Island Ice Tea', 'Classic', '長島冰茶', '', '', '', '伏特加 15ml\n琴酒 15ml\n蘭姆酒 15ml\n龍舌蘭 15ml\n橙酒 15ml\n檸檬汁 20ml\n糖漿 15~20ml\n可樂適量', '', '', '', '把可樂以外的材料加進雪克杯skake,\r\n倒入厚底杯,補足可樂\r\n用檸檬角裝飾', 'https://cocktail4party.com/2020/05/20/long-island-iced-tea/', 13, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_coffee`
--

CREATE TABLE `jazz_coffee` (
  `id` int(11) NOT NULL,
  `type` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分類',
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '英文品名',
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '中文',
  `japanese` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '日文',
  `price` int(11) NOT NULL COMMENT '價格',
  `rank` tinyint(4) NOT NULL COMMENT '排序',
  `sh` tinyint(1) NOT NULL DEFAULT 1 COMMENT '上下架',
  `break` tinyint(1) NOT NULL DEFAULT 0 COMMENT '換行(ex:風味拿鐵)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_coffee`
--

INSERT INTO `jazz_coffee` (`id`, `type`, `name`, `chinese`, `japanese`, `price`, `rank`, `sh`, `break`) VALUES
(1, 'Coffee', 'Espresso', '義式濃縮', 'エスプレッソ', 120, 1, 1, 0),
(2, 'Coffee', 'Americano', '美式', 'アメリカーノ', 130, 2, 1, 0),
(4, 'Coffee', 'Caffè latte', '拿鐵', 'カフェラテ', 160, 3, 1, 0),
(5, 'Coffee', 'Flavored latte(Hazelnut, Vanilla, Caramel, Mocha, Matcha)', '風味拿鐵（榛果、香草、焦糖瑪琪朵、摩卡、抹茶）', 'フレーバーラテ（ヘーゼルナッツ、バニラ、キャラメル、モカ、抹茶）', 180, 4, 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_ginvodka`
--

CREATE TABLE `jazz_ginvodka` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inprice` int(11) NOT NULL,
  `inputtime` date NOT NULL,
  `supply` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottle` int(11) NOT NULL,
  `glass` int(11) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_ginvodka`
--

INSERT INTO `jazz_ginvodka` (`id`, `name`, `chinese`, `image`, `type`, `inprice`, `inputtime`, `supply`, `bottle`, `glass`, `memo`, `intro`, `promo`, `rank`, `sh`) VALUES
(1, 'Beefeater Gin', '英國英人牌琴酒', '', 'Gin', 0, '0000-00-00', '', 3200, 350, '', '', '', 1, 1),
(2, 'Bombay Sapphire\r\nLondon Dry Gin', '英國龐貝藍鑽特級琴酒', '', 'Gin', 0, '0000-00-00', '', 3500, 350, '', '', '', 2, 1),
(3, 'Roku Gin', '日本六ROKU頂級琴酒', '', 'Gin', 0, '0000-00-00', '', 3500, 350, '日本琴酒', '', '', 3, 1),
(4, 'Hendricks Gin', '蘇格蘭亨利爵士琴酒', '', 'Gin', 0, '0000-00-00', '', 3800, 380, '', '', '', 4, 1),
(5, 'Hendricks Lunar Gin', '蘇格蘭亨利爵士月神琴酒', '', 'Gin', 0, '0000-00-00', '', 3900, 390, '', '', '', 5, 1),
(6, 'Absolut Blue', '絕對伏特加', '', 'Vodka', 0, '0000-00-00', '', 3200, 350, '', '', '', 6, 1),
(7, 'Belvedere Pure Vodka', '波蘭雪樹伏特加', '', 'Vodka', 0, '0000-00-00', '', 4000, 0, '', '', '', 7, 1),
(8, 'GreyGoose', '法國灰雁原味伏特加', '', 'Vodka', 0, '0000-00-00', '', 4000, 0, '', '', '', 8, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_rumteq`
--

CREATE TABLE `jazz_rumteq` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inprice` int(11) NOT NULL,
  `inputtime` int(11) NOT NULL,
  `supply` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottle` int(11) NOT NULL,
  `glass` int(11) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_rumteq`
--

INSERT INTO `jazz_rumteq` (`id`, `name`, `chinese`, `image`, `type`, `inprice`, `inputtime`, `supply`, `bottle`, `glass`, `memo`, `intro`, `promo`, `rank`, `sh`) VALUES
(1, 'Jose Cuervo\nEspecial Gold', '墨西哥金快活龍舌蘭酒', '', 'Tequila', 0, 0, '', 2500, 350, '', '', '', 1, 1),
(2, 'Don Julio\nReposado Tequila', '唐‧胡立歐 Reposado龍舌蘭', '', 'Tequila', 0, 0, '', 4200, 400, '', '', '', 2, 1),
(3, 'Patron Reposado', '培恩 金樽龍舌蘭', '', 'Tequila', 0, 0, '', 4500, 420, '', '', '', 3, 1),
(4, 'Don Julio\nBlanco Tequila', '唐‧胡立歐 Blanco龍舌蘭', '', 'Tequila', 0, 0, '', 4000, 350, '', '', '', 4, 1),
(6, 'Bacardi', '百加得蘭姆酒', '', 'Rum', 0, 0, '', 2500, 350, '', '', '', 5, 1),
(7, 'Captain Morgan', '摩根船長蘭姆酒', '', 'Rum', 0, 0, '', 2500, 350, '', '', '', 6, 1),
(8, 'Diplomatico Reserva \r\nExclusiva', '外交官蘭姆酒', '', 'Rum', 0, 0, '', 3500, 350, '', '', '', 7, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_sake`
--

CREATE TABLE `jazz_sake` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inprice` int(11) NOT NULL,
  `inputtime` date NOT NULL,
  `supply` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottle` int(11) NOT NULL,
  `glass` int(11) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_sake`
--

INSERT INTO `jazz_sake` (`id`, `name`, `image`, `type`, `inprice`, `inputtime`, `supply`, `bottle`, `glass`, `memo`, `intro`, `promo`, `rank`, `sh`) VALUES
(1, '雲州庵-蕎麥燒酎', '', 'Shochu', 0, '0000-00-00', '', 2800, 250, '', '', '', 1, 1),
(2, '天孫降臨-芋燒酎', '', 'Shochu', 0, '0000-00-00', '', 2800, 250, '', '', '', 2, 1),
(3, '黑馬 長期貯藏-麥燒酎', '', 'Shochu', 0, '0000-00-00', '', 3000, 300, '', '', '', 3, 1),
(4, '一本槍 琥珀-麥燒酎', '', 'Shochu', 0, '0000-00-00', '', 3500, 350, '', '', '', 4, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_soft`
--

CREATE TABLE `jazz_soft` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `inprice` int(11) NOT NULL,
  `inputtime` date NOT NULL,
  `supply` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glass` int(11) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_soft`
--

INSERT INTO `jazz_soft` (`id`, `name`, `chinese`, `image`, `inprice`, `inputtime`, `supply`, `glass`, `memo`, `intro`, `promo`, `rank`, `sh`) VALUES
(1, 'Coke', '可口可樂', '', 0, '0000-00-00', '', 150, '', '', '', 1, 1),
(2, 'Sprite', '雪碧', '', 0, '0000-00-00', '', 150, '', '', '', 2, 1),
(3, 'Tonic Water', '通寧水', '', 0, '0000-00-00', '', 150, '', '', '', 3, 1),
(4, 'Ginger Ale', '薑汁汽水', '', 0, '0000-00-00', '', 150, '', '', '', 4, 1),
(5, 'Red Bull', '紅牛', '', 0, '0000-00-00', '', 200, '', '', '', 5, 1),
(6, 'Orange Juice', '現榨柳橙汁', '', 0, '0000-00-00', '', 200, '', '', '', 6, 1),
(7, 'S.Pellegrino Sparking Water', '聖沛黎洛氣泡礦泉水', '', 0, '0000-00-00', '', 200, '', '', '', 7, 1),
(8, 'Acqua Panna Mineral Water', '普娜天然礦泉水', '', 0, '0000-00-00', '', 200, '', '', '', 8, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_whiskey`
--

CREATE TABLE `jazz_whiskey` (
  `id` int(11) NOT NULL,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '分類',
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '品名(英)',
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '中文',
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `inprice` int(11) NOT NULL COMMENT '進價',
  `inputtime` date NOT NULL,
  `supply` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '廠商',
  `bottle` int(11) NOT NULL COMMENT '單瓶價',
  `glass` int(11) NOT NULL COMMENT '單杯價',
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '簡介',
  `promo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '促銷',
  `rank` int(11) NOT NULL COMMENT '排序',
  `sh` tinyint(1) NOT NULL DEFAULT 1 COMMENT '上下架'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `jazz_whiskey`
--

INSERT INTO `jazz_whiskey` (`id`, `type`, `name`, `chinese`, `image`, `inprice`, `inputtime`, `supply`, `bottle`, `glass`, `memo`, `intro`, `promo`, `rank`, `sh`) VALUES
(1, 'Single', 'Balvenie 12 Year OldDoubleWood', '百富雙桶12年', '', 0, '0000-00-00', '', 5200, 420, 'Speyside', '  大眾口味 高低階', '  ', 1, 1),
(2, 'Single', 'Balvenie 16 Year Old \r\nTriple Cask', '百富雙桶16年', '', 0, '0000-00-00', '', 8000, 750, 'Speyside', '大眾口味 高低階', '', 2, 1),
(3, 'Single', 'Singleton 12 Glen Ord', '蘇格登12年', '', 0, '0000-00-00', '', 2800, 350, 'Speyside', '大眾口味 高低階', '', 3, 1),
(4, 'Single', 'Singleton 15 Glen Ord', '蘇格登15年', '', 0, '0000-00-00', '', 3600, 350, 'Speyside', '大眾口味 高低階', '', 4, 1),
(5, 'Single', 'Glenfiddich 12Y', '格蘭菲迪 12年', '', 0, '0000-00-00', '', 3800, 350, 'Speyside', '大眾口味 高低階', '', 5, 1),
(6, 'Single', 'Glenfiddich 18Y', '格蘭菲迪 18年', '', 0, '0000-00-00', '', 6000, 500, 'Speyside', '大眾口味 高低階', '', 6, 1),
(7, 'Single', 'Glenfiddich Gran Reserve \n21 Year Old ', '格蘭菲迪 21年', '', 0, '0000-00-00', '', 10000, 0, 'Speyside', '大眾口味 高年分 須討論衡量', '', 7, 1),
(8, 'Single', 'Laphroaig 10Y', '拉弗格 10年', '', 0, '0000-00-00', '', 3000, 350, '\"Islay Peated\"', '泥煤 味道重', '', 8, 1),
(9, 'Single', 'Lagavulin 10Y', '樂加維林 10年', '', 0, '0000-00-00', '', 5500, 450, '\"Islay Peated\"', '泥煤 味道重', '', 9, 1),
(10, 'Single', 'Auchentoshan Three Wood', '歐肯 三桶威士忌', '', 0, '0000-00-00', '', 5000, 450, 'Lowland', '低地  相對清爽', '', 10, 1),
(11, 'Blended', 'Monkey Shoulder\r\nScotch Whisky', '三隻猴子調和式麥芽威士忌', '', 0, '0000-00-00', '', 2000, 350, '', '', '', 11, 1),
(12, 'Blended', 'John Walker Black Label', '約翰走路黑牌12年', '', 0, '0000-00-00', '', 2000, 350, '', '', '', 12, 1),
(13, 'Blended', 'John Walker Green Label 15Y', '約翰走路綠牌15年', '', 0, '0000-00-00', '', 4200, 350, '', '', '', 13, 1),
(14, 'Blended', 'Ballantine\'s 12 Y ', '百齡罈12年調和威士忌', '', 0, '0000-00-00', '', 3500, 350, '', '', '', 14, 1),
(15, 'Blended', 'Ballantine\'s 21 Y ', '百齡罈21年調和威士忌', '', 0, '0000-00-00', '', 6000, 550, '', '', '', 15, 1),
(16, 'Blended', 'Royal Salute 21 Years \r\nScotch Whisky', '皇家禮炮21年', '', 0, '0000-00-00', '', 9200, 0, '', '', '', 16, 1),
(17, 'Bourbon', 'Jim beam bourbon', '金賓白牌波本威士忌', '', 0, '0000-00-00', '', 3000, 350, '複產區波本', '', '', 17, 1),
(18, 'Bourbon', 'Jack Daniel Old NO.7', '傑克丹尼爾', '', 0, '0000-00-00', '', 3500, 350, '田納西波本', '', '(送兩罐可樂)', 18, 1),
(19, 'Bourbon', 'Maker\'s Mark Bourbon Whisky', '美格經典波本威士忌', '', 0, '0000-00-00', '', 3900, 380, '肯塔基波本', '', '', 19, 1),
(20, 'Bourbon', 'James 1776 Bourbon Whisky', '1776波本威士忌', '', 0, '0000-00-00', '', 4500, 450, '', '', '', 20, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `jazz_wine`
--

CREATE TABLE `jazz_wine` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chinese` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片',
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inprice` int(11) NOT NULL,
  `inputtime` int(11) NOT NULL,
  `supply` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bottle` int(11) NOT NULL,
  `glass` int(11) NOT NULL,
  `memo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `jazz_admin`
--
ALTER TABLE `jazz_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_beans`
--
ALTER TABLE `jazz_beans`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_beerliquer`
--
ALTER TABLE `jazz_beerliquer`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_brandy`
--
ALTER TABLE `jazz_brandy`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_cocktail`
--
ALTER TABLE `jazz_cocktail`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_coffee`
--
ALTER TABLE `jazz_coffee`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_ginvodka`
--
ALTER TABLE `jazz_ginvodka`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_rumteq`
--
ALTER TABLE `jazz_rumteq`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_sake`
--
ALTER TABLE `jazz_sake`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_soft`
--
ALTER TABLE `jazz_soft`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_whiskey`
--
ALTER TABLE `jazz_whiskey`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `jazz_wine`
--
ALTER TABLE `jazz_wine`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_admin`
--
ALTER TABLE `jazz_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_beans`
--
ALTER TABLE `jazz_beans`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_beerliquer`
--
ALTER TABLE `jazz_beerliquer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_brandy`
--
ALTER TABLE `jazz_brandy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_cocktail`
--
ALTER TABLE `jazz_cocktail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_coffee`
--
ALTER TABLE `jazz_coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_ginvodka`
--
ALTER TABLE `jazz_ginvodka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_rumteq`
--
ALTER TABLE `jazz_rumteq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_sake`
--
ALTER TABLE `jazz_sake`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_soft`
--
ALTER TABLE `jazz_soft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_whiskey`
--
ALTER TABLE `jazz_whiskey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `jazz_wine`
--
ALTER TABLE `jazz_wine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
