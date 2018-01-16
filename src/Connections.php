<?php

namespace App;

use PDO;
use PDOException;


class Connections
{

    private $_user = 'root';

    private $_pass = '';

    protected $_connection;

    public function __construct()
    {

        try {
            $this->_connection = new PDO('mysql:host=localhost;dbname=ecommercefurniture', $this->_user, $this->_pass);

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }
}