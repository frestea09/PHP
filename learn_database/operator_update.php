<?php
/**
 * Created by PhpStorm.
 * User: ilman
 * Date: 2/16/2019
 * Time: 9:41 PM
 */
    include ('Orange.php');
    $objOrange = new Orange();
    if(isset($_POST['submitUpdate'])):
        $insertID = $_POST['insertID'];
        $insertNama = $_POST['insertName'];
        $insertQty = $_POST['insertQty'];
        $objOrange->setId($insertID);
        $objOrange->setNamaOrange($insertNama);
        $objOrange->setQtyOrange($insertQty);
        $objOrange->update();
    endif;
