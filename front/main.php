<div class="centered body">
    <div class="title">
        <div class="neon_box">
            <h1 class="neon-effect">80 Jazz</h1>
            <h1 class="neon-effect">Lounge Bar</h1>
        </div>
        <br>
        <a href="./coffee.php" class="neon-button cafe mb-4">Café&nbsp;&nbsp;Menu</a>
        <a href="#" class="neon-button bar" data-toggle="offcanvas">Bar&nbsp;&nbsp;Menu</a>
    </div>
</div>
<footer class="footer">
    <span data-bs-toggle="modal" data-bs-target="#Loginmodal" class="big">Copyright © 2022 80-jazz. All rights reserved. Design by Jim Wu</span>
    <span data-bs-toggle="modal" data-bs-target="#Loginmodal" class="small">Copyright © 2022 80-jazz.<br>All rights reserved. Design by Jim Wu</span>
</footer>

<div class="modal fade" id="Loginmodal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="./api/login.php" method="post">
                    <input type="text" class="form-control w-50 m-auto" name="acc" placeholder="Account">
                    <input type="password" class="form-control w-50 m-auto" name="pw" placeholder="Password" >
                
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" >Submit</button>
                <button type="reset" class="btn btn-info" >Reset</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </form>
            </div>

        </div>
    </div>
</div>