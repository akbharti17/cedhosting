<?php

include_once("connection.php");
class Product
{
    public $con;
    function __construct()
    {
       
        $dboj = new DbConnect();
        $this->con = $dboj->mkconnection();
    }

    function insertproduct($id, $prodname,$link)
    {
        $q = "INSERT INTO `tbl_product`
        (`prod_parent_id`, `prod_name`,`link`) VALUES
         ('$id','$prodname','$link')";

        if ($this->con->query($q) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function getData($proPrntId){
        $q="select * from tbl_product where `prod_parent_id`='$proPrntId' and `prod_available`=1";
        $result=$this->con->query($q);
        if ($this->con->query($q)->num_rows>0) {
            return $result;
        }else{
            echo false;
        }
    }

    function getallproduct($id){
        $q="select * from tbl_product where `id`='$id'";
        $result=$this->con->query($q);
        if ($this->con->query($q)->num_rows>0) {
            return $result;
        }else{
            echo false;
        }
    }

    function deleteData($id){
        $q="delete from tbl_product where id='$id'";
        if($this->con->query($q)===TRUE){
            return true;
        }else{
            return false;
        }
    }

    function update($prodname,$link,$avail,$id){
        $q="UPDATE `tbl_product` SET `prod_name`='$prodname',`link`='$link'
        ,`prod_available`='$avail' WHERE id='$id'";
        
        if($this->con->query($q)===TRUE){
            return true;
        }else{
            return false;
        }
    }

    function getAllrecord(){
        $q="SELECT  tbl_product.*, tbl_product_description.* FROM tbl_product
         INNER JOIN tbl_product_description ON (tbl_product.id=tbl_product_description.prod_id)";
        $result=$this->con->query($q);
         if($this->con->query($q)->num_rows>0){
             return $result;
         }else{
             return false;
         }
    }

    function deleteallrecord($id){
        $q="DELETE tbl_product_description.*
        FROM tbl_product
        INNER JOIN tbl_product_description ON tbl_product.id = tbl_product_description.prod_id
        WHERE prod_id='$id'";

        if($this->con->query($q)===true){
            return true;
        }else{
            return false;
        }

        

    }
}
