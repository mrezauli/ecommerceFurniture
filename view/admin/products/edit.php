<?php

include_once ("../include/header.php");
include_once ("../../../vendor/autoload.php");

$_single_product = new \App\admin\Products\Products();
$_GET['uid'] = "'".$_GET['uid']."'";
$_single = $_single_product->view($_GET['uid']);



?>
    <!--inner block start here-->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Forms For Product Entry</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Update Product
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="POST" action="view/admin/products/update.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input value="<?php echo $_single['Product_Name']?>" class="form-control" type="text" name="Product_Name">
                                        <input class="form-control" type="hidden" value="<?php echo ($_single['Token'] == 1) ? 1 : 0 ?>" name="Token">
                                        <input class="form-control" type="hidden" value="<?php echo $_single['Upload_Product_Image'] ?>" name="Image_Name_Deletion">
                                        <input class="form-control" type="hidden" value="<?php echo $_single['unique_id'] ?>" name="unique_id">
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input value="<?php echo $_single['Price']?>" class="form-control" type="number" name="Price">

                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="Category">
                                            <option <?php echo ($_single['Category'] == 'Mobile')? 'selected' : '' ?> value="Mobile">Mobile</option>
                                            <option <?php echo ($_single['Category'] == 'Laptop')? 'selected' : '' ?> value="Laptop">Laptop</option>
                                            <option <?php echo ($_single['Category'] == 'AC')? 'selected' : '' ?> value="AC">AC</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="Description" class="form-control" rows="3"><?php echo $_single['Description']?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label style="display: block">Upload Product Image</label>
                                        <img src="assets/uploads/<?php echo $_single['Upload_Product_Image']?>">
                                        <input name="Upload_Product_Image" type="file">
                                    </div>


                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>

                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
    <!--inner block end here-->


    <!--copy rights start here-->
    <div class="copyrights">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
    </div>
    <!--COPY rights end here-->
    </div>
    </div>

<?php

include_once ("../include/footer.php");
?>