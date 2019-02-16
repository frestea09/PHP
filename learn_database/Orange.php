<?php

/**
 * Created by PhpStorm.
 * User: ilman
 * Date: 2/16/2019
 * Time: 9:16 PM
 */
abstract class KerangkaOrange{
    abstract function getAll();
    abstract function insert();
    abstract function update();
    abstract function delete();
    abstract function getByID();
}
class Orange extends KerangkaOrange
{
    private $id;
    private $namaOrange;
    private $qtyOrange;
    private $data = [];
    public function __construct($insertId=null,$insertNamaOrange=null,$insertQtyOrang=null)
    {
        $this->id = $insertId;
        $this->namaOrange = $insertNamaOrange;
        $this->qtyOrange = $insertQtyOrang;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNamaOrange()
    {
        return $this->namaOrange;
    }

    /**
     * @param mixed $namaOrange
     */
    public function setNamaOrange($namaOrange)
    {
        $this->namaOrange = $namaOrange;
    }

    /**
     * @return mixed
     */
    public function getQtyOrange()
    {
        return $this->qtyOrange;
    }

    /**
     * @param mixed $qtyOrange
     */
    public function setQtyOrange($qtyOrange)
    {
        $this->qtyOrange = $qtyOrange;
    }

    public function getAll()
    {
        include "connect.php";
        $query = "SELECT * FROM orang";
        $result = $conn->query($query);
        if($result):
            return $result;
            header("location:home.php");
        else:

        endif;
    }
    public function insert()
    {
        include "connect.php";
        $id = $this->id;
        $name = $this->namaOrange;
        $qty = $this->qtyOrange;
        $query = "INSERT INTO orang(id_orange,name_orange,qty_orange) VALUES('$id','$name','$qty')";
        $num = $conn->exec($query);
        if($num>0):
            header('location:home.php');
        else:
            header('location:form_insert.php');
        endif;
    }
    public function update()
    {
        include 'connect.php';
        $id = $this->id;
        $name = $this->namaOrange;
        $qty = $this->qtyOrange;
        $query = "UPDATE orang SET name_orange = '$name',qty_orange='$qty' WHERE id_orange='$id'";
        $num = $conn->exec($query);
        if($num>0):
            header('location:home.php');
        else:
            header('location:form_update.php');
        endif;
    }
    public function delete()
    {
        include "connect.php";
        $data = $this->data;
        for($indeks = 0; $indeks < sizeof($data);$indeks++):
            $query = "DELETE FROM orang WHERE id_orange='$data[$indeks]'";
            $num = $conn->exec($query);
        endfor;
        if($num>0):
            header('location:home.php');
        endif;
    }
    public function getByID()
    {
        include "connect.php";
        $id = $this->id;
        $query = "SELECT * FROM orang WHERE id_orange = '$id'";
        $result = $conn->query($query);
        if($result):
            return $result;
            header('location:form_update.php');
        endif;
    }
}