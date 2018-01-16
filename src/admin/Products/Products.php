<?php

namespace App\admin\Products;

if (!isset($_SESSION)) {
    session_start();
}

use App\Connections;
use PDO;
use PDOException;
class Products extends Connections
{

    private $_Product_Name;
    private $_Price;
    private $_Category;
    private $_Description;
    private $_Token;
    private $_Upload_Product_Image;
    private $_is_admin;

    public function set($_data = array()) { //type hinting

        if (array_key_exists("Product_Name", $_data)) {
            $this->_Product_Name = $_data['Product_Name'];
        }

        if (array_key_exists("Price", $_data)) {
            $this->_Price = $_data['Price'];
        }
        if (array_key_exists("Category", $_data)) {
            $this->_Category = $_data['Category'];
        }

        if (array_key_exists("Description", $_data)) {
            $this->_Description = $_data['Description'];
        }

        if (array_key_exists("Token", $_data)) {
            $this->_Token = $_data['Token'];
        }
        if (array_key_exists("Upload_Product_Image", $_data)) {
            $this->_Upload_Product_Image = $_data['Upload_Product_Image'];
        }
        if (array_key_exists("is_admin", $_data)) {
            $this->_is_admin = $_data['is_admin'];
        }


        return $this;

    }

    public function store() {

        try {
            $_stmt = $this->_connection->prepare("INSERT INTO `products`(`Product_Name`, `Price`, `Category`, `Description`, `Upload_Product_Image`, `Token`, `unique_id`) VALUES (:Product_Name,:Price,:Category,:Description,:Upload_Product_Image,:Token,:unique_id)");

            $_result = $_stmt->execute(array(
                ':Product_Name' => $this->_Product_Name,
                ':Price' => $this->_Price,
                ':Category' => $this->_Category,
                ':Description' => $this->_Description,
                ':Upload_Product_Image' => $this->_Upload_Product_Image,
                ':Token' => $this->_Token,
                ':unique_id' => substr(md5(time()), 0, 11)
            ));

            if ($_result) {
                $_SESSION['insert'] = "Data Successfully Inserted!";
                if ($this->_is_admin == 1) {
                    header('Location:new.php');
                }
                else if ($this->_is_admin == 0) {
                    header('Location:../../contributor/index.php');
                }
            }
        }
        catch (PDOException $e) {
            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function index() {
        try {
            $_stmt = $this->_connection->prepare("SELECT * FROM `products` WHERE `Token` = 1 AND `deleted_at` = '0000-00-00 00:00:00';");
            $_stmt->execute();
            $_result = $_stmt->fetchAll(PDO::FETCH_ASSOC);
            return $_result;
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function newTON() {
        try {
            $_stmt = $this->_connection->prepare("SELECT * FROM `products` WHERE `Token` = 0");
            $_stmt->execute();
            $_result = $_stmt->fetchAll(PDO::FETCH_ASSOC);
            return$_result;
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function view($_uid) {
        try {
            $_stmt = $this->_connection->prepare("SELECT * FROM `products` WHERE `unique_id` = $_uid");
            $_stmt->execute();
            $_result = $_stmt->fetch(PDO::FETCH_ASSOC);
            return$_result;
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function update($_uid) {
        try {
            $_stmt = $this->_connection->prepare("UPDATE `ecommercefurniture`.`products` SET `Product_Name` = :Product_Name, `Price` = :Price, `Category` = :Category, `Description` = :Description, `Upload_Product_Image` = :Upload_Product_Image, `Token` = :Token, `updated_at` = NOW() WHERE `products`.`unique_id` = $_uid");
            $_result = $_stmt->execute(array(
                'Product_Name' => $this->_Product_Name,
                'Price' => $this->_Price,
                'Category' => $this->_Category,
                'Description' => $this->_Description,
                'Upload_Product_Image' => $this->_Upload_Product_Image,
                'Token' => $this->_Token
            ));

            if ($_result) {
                $_SESSION['update'] = "Data Successfully Updated!";
                header('Location:index.php');
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function delete($_uid) {
        try {
            $_stmt = $this->_connection->prepare("DELETE FROM `products` WHERE `unique_id` = $_uid");
            $_result = $_stmt->execute();

            if ($_result) {
                $_SESSION['delete'] = "Data Permanently Deleted!";
                header('location:trash.php');
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function approve($_uid) {
        try {
            $_stmt = $this->_connection->prepare("UPDATE `ecommercefurniture`.`products` SET `Token` = :Token WHERE `products`.`unique_id` = $_uid");
            $_result = $_stmt->execute(array('Token' => 1));

            if ($_result) {
                $_SESSION['approve'] = "Post Approved!";
                header('Location:new.php');
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function temp_delete($_uid) {
        try {
            $_stmt = $this->_connection->prepare("UPDATE `products` SET `deleted_at` = NOW() WHERE `products`.`unique_id` = $_uid;");
            $_result = $_stmt->execute();
            //var_dump($_result);
            if ($_result) {
                $_SESSION['temp_delete'] = "Data Successfully Deleted!";
                header('location:index.php');
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function trash() {
        try {
            $_stmt = $this->_connection->prepare("SELECT * FROM `products` WHERE `deleted_at` != '0000-00-00 00:00:00'");
            $_stmt->execute();
            $_result = $_stmt->fetchAll(PDO::FETCH_ASSOC);
            return$_result;
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function restore($_uid) {
        try {
            $_stmt = $this->_connection->prepare("UPDATE `products` SET `deleted_at` = '0000-00-00 00:00:00' WHERE `products`.`unique_id` = $_uid;");
            $_result = $_stmt->execute();
            //var_dump($_result);
            if ($_result) {
                $_SESSION['restore'] = "Data Successfully Restored!";
                header('location:trash.php');
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function pending() {
        try {
            $_stmt = $this->_connection->prepare("SELECT * FROM `products` WHERE `Token` = 0 AND `deleted_at` = '0000-00-00 00:00:00';");
            $_stmt->execute();
            $_result = $_stmt->fetchAll(PDO::FETCH_ASSOC);
            return$_result;
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function buy($_buy) {

        try {
            $_stmt = $this->_connection->prepare("INSERT INTO `orders`(`Customer_Name`, `Address`, `Mobile_Number`, `Quantity`) VALUES (:Customer_Name,:Address,:Mobile_Number,:Quantity)");

            $_result = $_stmt->execute(array(
                ':Customer_Name' => $_buy['Customer_Name'],
                ':Address' => $_buy['Address'],
                ':Mobile_Number' => $_buy['Mobile_Number'],
                ':Quantity' => $_buy['Quantity']
            ));

            if ($_result) {
                $_SESSION['insert'] = "Order Received!";
                header('Location:../../../index.php');

            }
        }
        catch (PDOException $e) {
            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function orders() {
        try {
            $_stmt = $this->_connection->prepare("SELECT * FROM `orders`;");
            $_stmt->execute();
            $_result = $_stmt->fetchAll(PDO::FETCH_ASSOC);
            return$_result;
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

}