<?php

namespace App\front\Fproducts;

use App\Connections;
use PDO;
use PDOException;

class Fproducts extends Connections
{

    public function index($_category) {
        try {
            $_stmt = $this->_connection->prepare("SELECT * FROM `products` WHERE `Category` = $_category AND `Token` = 1 AND `deleted_at` = '0000-00-00 00:00:00';");
            $_stmt->execute();
            $_result = $_stmt->fetchAll(PDO::FETCH_ASSOC);

            return $_result;
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
}