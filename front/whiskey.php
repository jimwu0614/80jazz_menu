<div class="whiskey"></div>
<div class="box">
    <div class="liquortitle">
        <span class="type active">Single</span>
        <span class="type">Blended</span>
        <span class="type">Bourbon</span>
    </div>
    <div class="blur">
        <table class="w100 ">
            <tr>
                <td class="w60"></td>
                <td class="w20">Glass/<br>杯</td>
                <td class="w20">Bottle/<br>瓶</td>
            </tr>
            <tbody class="tbody">

            </tbody>
        </table>
    </div>
</div>
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="position: relative;z-index: 99999999;">
    Open modal
  </button> -->


<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
          <img src="./img/beer.jpeg" alt="">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $.post("./get/getwhiskey.php", {type:'Single'}, (res) => {

            $(".tbody").html(res)
        })
    })

    $(".type").on("click",function(){
        let cancel = $(".active");
        cancel.removeClass("active");

        let add = $(this);
        // console.log(add);
        add.addClass("active");

        let type = $(this).text();
        // console.log(type);

        $.post("./get/getwhiskey.php", {type}, (res) => {
            $(".tbody").html(res)
        })
    })


</script>