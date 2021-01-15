<?php
include("tbl_user.php");


if ($_POST["action"] == "insert") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mob'];
	$secQues = $_POST["ques"];
	$ans = $_POST["ans"];
	$pass = $_POST["pass"];
	$signupObj = new User();
	if ($signupObj->insertrecord($email, $mobile, $name, $pass, $secQues, $ans)) {
		echo "record inserted";
	} else {
		echo "failed to insert";
	}
}


include("tbl_product.php");
if($_POST["action"] =="insertproduct"){
	$proname=$_POST["proname"];
	$link=$_POST["link"];
	echo $proname;
	$prodobj=new Product();
	if($prodobj->insertproduct(1,$proname,$link)){
		echo "inserted";
	}else{
		echo "failed to add";
	}

}

include("tbl_prod_description.php");
if($_POST["action"] =="insert in pro_description"){
	$id=$_POST['id'];
	$desc=$_POST["des"];
	$monPrice=$_POST["mprice"];
	$annPrice=$_POST["annualprc"];
	$suk=$_POST["suk"];

	$prodobj=new ProdDes();
	if($prodobj->insert($id,json_encode($desc),$monPrice,$annPrice,$suk)){
		echo "inserted";
	}else{
		echo "failed to add";
	}

}



