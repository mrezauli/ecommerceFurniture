<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once ("../include/header.php");
if (!isset($_SESSION['user_name']) || $_SESSION['is_user'] != 1) {
    echo "<script>window.location = 'view/front/auth/login.php'</script>>";
}
?>


<div class="mobiles">
    <div class="container">
        <div class="w3ls_mobiles_grids">
            <div class="col-md-4 w3ls_mobiles_grid_left">
            </div>
            <div class="col-md-8 w3ls_mobiles_grid_right">

                <div class="clearfix"> </div>


                <div class="w3ls_mobiles_grid_right_grid3">

                        <form role="form" method="POST" action="view/front/singleView/buy.php">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input class="form-control" type="text" name="Customer_Name" value="<?php echo $_SESSION['user_name']?>">
                            </div>


                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="Address" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input name="Mobile_Number" type="text">
                            </div>

                            <div class="form-group">
                                <label>Quantity</label>
                                <input name="Quantity" type="number">
                            </div>


                            <button type="submit" class="btn btn-default">BUY</button>

                        </form>

                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>




<?php
include_once ("../include/footer.php");
?>
