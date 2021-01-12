<?php
include("tbl_user.php");

//Insert Record of signup
$action = $_POST["action"];
if ($action == "insert") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mob'];
	$secQues = $_POST["ques"];
	$ans = $_POST["ans"];
	$pass = $_POST["pass"];
	$signupObj = new Tbluser();
	if ($signupObj->insertrecord($email, $mobile, $name, $pass, $secQues, $ans)) {
		echo "record inserted";
	} else {
		echo "failed to insert";
	}
}
//End of Insert Record of signup

include("tbl_product.php");
if($action =="insertproduct"){
	$proname=$_POST["proname"];
	echo $proname;
	$prodobj=new Tblproduct();
	if($prodobj->insertproduct(1,$proname)){
		echo "inserted";
	}else{
		echo "failed to add";
	}

}

