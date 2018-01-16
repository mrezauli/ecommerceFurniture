<?php

namespace App\admin\Auth;
if (!isset($_SESSION) ) {
    session_start();
}

use App\Connections;
use PDO;
use PDOException;

class Auth extends Connections
{
    public $_user_name;
    public $_email;
    public $_password;
    public $_is_admin;
    public $_is_user;

    public function set($_data = array()) { //type hinting

        if (array_key_exists("user_name", $_data)) {
            if (strlen($_data['user_name']) > 1) {
                $this->_user_name = $_data['user_name'];
            }
        }
        if (array_key_exists("email", $_data)) {
            $this->_email = $_data['email'];
        }
        if (array_key_exists("password", $_data)) {
            $this->_password = $_data['password'];
        }
        if (array_key_exists("is_admin", $_data)) {
            $this->_is_admin = $_data['is_admin'];
        }

        if (array_key_exists("is_user", $_data)) {
            $this->_is_user = $_data['is_user'];
        }

        return $this;

    }

    public function store() {

        try {
            $_stmt = $this->_connection->prepare("INSERT INTO `users` (`user_name`, `email`, `password`, `is_admin`) VALUES (:user_name,:email,:password,:is_admin)");

            $_result = $_stmt->execute(array(
                ':user_name' => $this->_user_name,
                ':email' => $this->_email,
                ':password' => $this->_password,
                ':is_admin' => $this->_is_admin
            ));

            if ($_result) {
                $_SESSION['register'] = "User Registered!";
                header('location:login.php');
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function user_store() {

        try {
            $_stmt = $this->_connection->prepare("INSERT INTO `users` (`user_name`, `email`, `password`, `is_user`) VALUES (:user_name,:email,:password,:is_user)");

            $_result = $_stmt->execute(array(
                ':user_name' => $this->_user_name,
                ':email' => $this->_email,
                ':password' => $this->_password,
                ':is_user' => $this->_is_user
            ));

            if ($_result) {
                $_SESSION['register'] = "User Registered!";
                header('location:login.php');
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function login() {
        try {

            $_stmt = $this->_connection->prepare("SELECT * FROM `users` WHERE (`user_name` = :user_name OR `email` = :email) AND `password` = :password AND `is_admin` = :is_admin;");
            $_stmt->bindValue(':user_name',$this->_user_name, PDO::PARAM_STR);
            $_stmt->bindValue(':email',$this->_email, PDO::PARAM_STR);
            $_stmt->bindValue(':password',$this->_password, PDO::PARAM_STR);
            $_stmt->bindValue(':is_admin',$this->_is_admin, PDO::PARAM_STR);
            $_stmt->execute();
            $_result = $_stmt->fetch(PDO::FETCH_ASSOC);

            if ($_stmt->rowCount() == 1 ) {

                $_SESSION['user_name'] = $_result['user_name'];
                if ($this->_is_admin == 0) {
                    $_SESSION['is_admin'] = $_result['is_admin'];
                    header('location:../../contributor/index.php');
                }
                else if ($this->_is_admin == 1) {
                    $_SESSION['is_admin'] = $_result['is_admin'];
                    header('location:../products/index.php');
                }
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }

    public function user_login() {
        try {

            $_stmt = $this->_connection->prepare("SELECT * FROM `users` WHERE (`user_name` = :user_name OR `email` = :email) AND `password` = :password AND `is_user` = :is_user;");
            $_stmt->bindValue(':user_name',$this->_user_name, PDO::PARAM_STR);
            $_stmt->bindValue(':email',$this->_email, PDO::PARAM_STR);
            $_stmt->bindValue(':password',$this->_password, PDO::PARAM_STR);
            $_stmt->bindValue(':is_user',$this->_is_user, PDO::PARAM_STR);
            $_stmt->execute();
            $_result = $_stmt->fetch(PDO::FETCH_ASSOC);

            if ($_stmt->rowCount() == 1 ) {
                $_SESSION['user_name'] = $_result['user_name'];
                $_SESSION['is_user'] = $_result['is_user'];
                header('location:../singleView/purchase.php');
            }
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }

    }
}