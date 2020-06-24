<?php
include '../inc/functions.php';
include 'JsonResult.php';
$result = array();

if(!empty($_POST)){
    $action = $_POST['action'];
}

if(!empty($_GET)){
    $action = $_GET['action'];
    if($action == 'getProductTypes'){
        $result = getProductTypes();
    }
    if($action == 'getProductsByType'){
        $productTypeId = $_GET['productTypeId'];
        $result = getProductsByType($productTypeId);
    }
}
$json = new JsonResult($result);
echo json_encode($json);