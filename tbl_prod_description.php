<?php
include_once("connection.php");

class ProdDes
{
    public $con;
    function __construct()
    {
        
        $dbobj = new DbConnect();
        $this->con = $dbobj->mkconnection();
    }

    function insert($prod_id, $des, $monprc, $anualp, $suk)
    {
        $q = "INSERT INTO `tbl_product_description`(`prod_id`, `description`, `mon_price`, `annual_price`, `sku`)
          VALUES ('$prod_id','$des','$monprc','$anualp','$suk')";

        if ($this->con->query($q) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function getdata($id)
    {
        $q = "SELECT * FROM `tbl_product_description` WHERE `prod_id`=$id";
        $result = $this->con->query($q);
        if ($this->con->query($q)->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
    function getrecord($id)
    {
        $q = "SELECT * FROM `tbl_product_description` WHERE `id`=$id";
        $result = $this->con->query($q);
        if ($this->con->query($q)->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
