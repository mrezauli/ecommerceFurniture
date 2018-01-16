<?php

include_once ("../include/header.php");
include_once ("../../../vendor/autoload.php");

$_single_product = new \App\admin\Products\Products();
$_GET['uid'] = "'".$_GET['uid']."'";
$_single = $_single_product->view($_GET['uid']);


?>
    <!--inner block start here-->
    <div class="inner-block">
        <div class="product-block">
            <div class="pro-head">
                <h2>Products</h2>
            </div>


                <div class="col-md-3 product-grid">
                    <div class="product-items">
                        <div class="project-eff">

                            <img width="250" height="250" class="img-responsive" src="assets/uploads/<?php echo $_single['Upload_Product_Image']?>" alt="">
                        </div>
                        <div class="produ-cost">
                            <h4><?php echo $_single['Product_Name']?></h4>
                            <h5>$<?php echo $_single['Price']?></h5>
                            <h5><?php echo $_single['Category']?></h5>

                        </div>
                    </div>
                </div>



            <div class="clearfix"> </div>
        </div>
    </div>
    <!--inner block end here-->
    <link rel="stylesheet" type="text/css" href="assets/admin/css/magnific-popup.css">
    <script type="text/javascript" src="assets/admin/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
        });
    </script>

    <!--copy rights start here-->
    <div class="copyrights">
        <p>© 2016 Shoppy. All Rights Reserved | Design by  US->WE</p>
    </div>
    <!--COPY rights end here-->
    </div>
    </div>

<?php

include_once ("../include/footer.php");
?>