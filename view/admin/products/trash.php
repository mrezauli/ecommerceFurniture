<?php

include_once ("../include/header.php");
include_once ("../../../vendor/autoload.php");



?>
    <!--inner block start here-->
    <div class="inner-block">
        <div class="product-block">
            <div class="pro-head">
                <h2>Products</h2>
            </div>
            <div style="position: fixed; z-index: 111; right: 30px">
                <?php


                if (isset($_SESSION['insert'])) {
                    echo "<div class='alert alert-success'>" . $_SESSION['insert']. "</div>";
                    $_SESSION['insert'] = null;
                }

                if (isset($_SESSION['delete'])) {
                    echo "<div class='alert alert-danger'>" . $_SESSION['delete'] . "</div>";
                    $_SESSION['delete'] = null;
                }

                if (isset($_SESSION['update'])) {
                    echo "<div class='alert alert-info'>" . $_SESSION['update'] . "</div>";
                    $_SESSION['update'] = null;
                }

                if (isset($_SESSION['approve'])) {
                    echo "<div class='alert alert-info'>" . $_SESSION['approve'] . "</div>";
                    $_SESSION['approve'] = null;
                }

                if (isset($_SESSION['temp_delete'])) {
                    echo "<div class='alert alert-info'>" . $_SESSION['temp_delete'] . "</div>";
                    $_SESSION['temp_delete'] = null;
                }

                if (isset($_SESSION['restore'])) {
                    echo "<div class='alert alert-info'>" . $_SESSION['restore'] . "</div>";
                    $_SESSION['restore'] = null;
                }

                ?>
            </div>
            <?php

            $_all_products = new \App\admin\Products\Products();
            $_products_info = $_all_products->trash();
            foreach ($_products_info as $_product) {
                ?>
                <div class="col-md-3 product-grid">
                    <div class="product-items">
                        <div class="project-eff">

                            <img width="100" height="100" class="img-responsive" src="assets/uploads/<?php echo $_product['Upload_Product_Image']?>" alt="">
                        </div>
                        <div class="produ-cost">
                            <h4><?php echo $_product['Product_Name']?></h4>
                            <h5>$<?php echo $_product['Price']?></h5>
                            <h5><?php echo $_product['Category']?></h5>
                            <td>
                                <a class="text-danger" href="view/admin/Products/restore.php?uid=<?php echo $_product['unique_id']?>">Restore</a> |
                                <a class="text-danger" href="view/admin/Products/delete.php?uid=<?php echo $_product['unique_id']?>">Permanent Delete</a>
                            </td>
                        </div>
                    </div>
                </div>
            <?php }?>


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