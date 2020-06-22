<?php
include '../inc/functions.php';
include 'JsonResult.php';
dBconnect();
$result = array();

if(!empty($_POST)){
    $action = $_POST['action'];
}

if(!empty($_GET)){
    $action = $_GET['action'];
    if($action == 'getProductTypes'){
        $result = mysqli_query($connection, "SELECT * FROM product_type");

        $data = array();
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        return $result;
        
    }

$json = new JsonResult($result);
echo json_encode($json);
?>
