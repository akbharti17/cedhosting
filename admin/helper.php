<?php
include("../tbl_product.php");
include("../tbl_prod_description.php");
$ob = new ProdDes();
$obj = new Product();
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if ($_POST['action'] == 'delete') {
    $id = $_POST['id'];

    if ($obj->deleteData($id)) {
        echo "Delete successfully";
    } else {
        echo "Failed to delete";
    }
}

if ($_POST['action'] == 'getdata') {
    $id = $_POST['id'];
    $result = $obj->getallproduct($id);

    $data = $result->fetch_assoc();
    $encdata = json_encode($data);
    echo $encdata;
}

if ($_POST['action'] == 'update') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $link = $_POST['link'];
    $avail = $_POST['avail'];

    if ($obj->update($name, $link, $avail, $id)) {
        echo 'Record Updated successfully';
    } else {
        echo 'failed to update';
    }
}

if ($_POST['action'] == 'delete all') {
    $id = $_POST['id'];
    // echo $id;

    if ($obj->deleteallrecord($id)) {
        echo "Delete successfully";
    } else {
        echo "Failed to delete";
    }
}

if ($_POST['action'] == 'cart') {
    $id = $_POST['id'];
    $plan=$_POST['plan'];
    echo $id,$plan;
    $_SESSION['plan']=$plan;
    $result = $ob->getrecord($id);
    $cartarrdata = $result->fetch_assoc();
    print_r($cartarrdata);
    array_push($_SESSION['cart'], $cartarrdata);
}

if($_POST['action']=='delete cart row'){
   $id=$_POST['id'];
   unset($_SESSION['cart'][$id]);
}
