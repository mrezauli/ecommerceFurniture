<?php
include_once ("../include/header.php");
include_once ("../../../vendor/autoload.php");



?>
    <table class="table table-striped table-inverse">
        <label>Orders from Customer</label>
        <thead>
        <tr>

            <th>Customer_Name</th>
            <th>Address</th>
            <th>Mobile_Number</th>
            <th>Quantity</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $_order = new \App\admin\Products\Products();
        $_order = $_order->orders();

        foreach ($_order as $item) {
        ?>
        <tr>
            <td><?php echo $item['Customer_Name']?></td>
            <td><?php echo $item['Address']?></td>
            <td><?php echo $item['Mobile_Number']?></td>
            <td><?php echo $item['Quantity']?></td>
        </tr>
        <?php } ?>

        </tbody>
    </table>










<?php
include_once ("../include/footer.php");
?>

