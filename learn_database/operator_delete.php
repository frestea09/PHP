<?php
/**
 * Created by PhpStorm.
 * User: ilman
 * Date: 2/16/2019
 * Time: 10:53 PM
 */
    include ('Orange.php');
    $data = $_POST['insertDelete'];
    $objOrange = new Orange();
    $objOrange->setData($data);
    $objOrange->delete();