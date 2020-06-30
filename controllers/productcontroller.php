<?php
include '../inc/functions.php';
include 'JsonResult.php';
$result = array();

if(!empty($_POST)){
    $action = $_POST['action'];
    if($action == "asdf") {
        return "Test123";
    }
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

    if($action == 'getProductById'){
        $productDetail = $_GET['productId'];
        $result = getProductsId($productDetail);
    }
    
}
$json = new JsonResult($result);
echo json_encode($json);