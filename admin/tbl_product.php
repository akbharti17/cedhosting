<?php

class Tblproduct
{
    public $con;
    function __construct()
    {
        include("connection.php");
        $dboj = new DbConnect();
        $this->con = $dboj->mkconnection();
    }

    function insertproduct($id, $prodname)
    {
        $q = "INSERT INTO `tbl_product`
        (`prod_parent_id`, `prod_name`) VALUES
         ('$id','$prodname')";

        if ($this->con->query($q) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function getData($proPrntId){
        $q="select * from tbl"
    }
}
