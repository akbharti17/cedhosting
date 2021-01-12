<?php
  class DbConnect{
      private $hostname;
      private $dbname;
      private $username;
      private $password;
      public $conn;

      function  __construct(){
        $this->hostname="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="cedhosting";
      }

      function mkconnection(){
          $this->conn=new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
          if($this->conn->error){
              echo "error in connection";
          }else{
              echo "Connected";
              return $this->conn;
          }
      }
  }
