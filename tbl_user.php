<?php
include_once("connection.php");

class User
{
    public $con;

    function __construct()
    {
        
        $dbobj = new DbConnect();
        $this->con = $dbobj->mkconnection();
    }
    function insertrecord($email, $mob, $name, $password, $secQues, $secAns)
    {
        $q = "INSERT INTO `tbl_user`
        (`email`, `name`, `mobile`, `password`, `security_question`, `security_answer`) VALUES
         ('$email','$name','$mob','$password','$secQues','$secAns')";

        if ($this->con->query($q) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    function login($email, $password)
    {
        $q1 = "SELECT * FROM `tbl_user` WHERE `email`='$email' and `password`='$password'";
        // $result = $this->con->query($q);
        $data=$this->con->query($q1)->fetch_assoc();
        if ($this->con->query($q1)->num_rows>0) {
            return $data;
        }else{
            echo "failed";
        }
    }
}
