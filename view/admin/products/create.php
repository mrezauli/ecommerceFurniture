<?php

include_once ("../include/header.php");
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
                        Product Entry
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" method="POST" action="view/admin/products/store.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input class="form-control" type="text" name="Product_Name">
                                        <input class="form-control" type="hidden" value="0" name="Token">
                                        <input class="form-control" type="hidden" value="1" name="is_admin">
                                    </div>

                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" type="number" name="Price">

                                    </div>

                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="Category">
                                            <option value="Mobile">Mobile</option>
                                            <option value="Laptop">Laptop</option>
                                            <option value="AC">AC</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="Description" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Upload Product Image</label>
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