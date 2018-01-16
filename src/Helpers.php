<?php

namespace App;

use PDO;
use PDOException;

class Helpers extends Connections
{

    static public function upload_image() {
        $_image_real_name = $_FILES['Upload_Product_Image']['name'];
        $_image_temp_name = $_FILES['Upload_Product_Image']['tmp_name'];
        $_name_fraction = explode('.', $_image_real_name);
        $_file_name = substr(md5(time()), 0, 11);
        $_file_extension =  end($_name_fraction);
        $_POST['Upload_Product_Image'] = $_file_name . '.' . $_file_extension;
        move_uploaded_file($_image_temp_name, "../../../assets/uploads/" . $_POST['Upload_Product_Image']);

        return $_POST['Upload_Product_Image'];
    }

    public function delete_image($_uid) {
        try {
            $_stmt = $this->_connection->prepare("SELECT `Upload_Product_Image` FROM `products` WHERE `unique_id` = $_uid");
            $_stmt->execute();
            $_result = $_stmt->fetch(PDO::FETCH_ASSOC);
            unlink('../../../assets/uploads/' . $_result['Upload_Product_Image']);
        }
        catch (PDOException $e) {

            echo "there is some problem in Connection.php" . $e->getMessage();
        }
    }

}