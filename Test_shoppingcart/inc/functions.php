<?php
    function dBconnect()
    {
        $host       ="localhost";
        $user       ="root";
        $pass       ="";
        $database   ="gamingzone";
        $connection = mysqli_connect($host, $user, $pass, $database) or die(mysli_error($connection));
    
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        
    
        return $connection;
    }

    

function getProducts()
{
    $connection = dBconnect();

    $products = array();

    $getProductsSQL = "
    SELECT * FROM `products`
    ";

    $resource = mysqli_query($connection, $getProductsSQL) or die (mysqli_error($connection));

    while($row = mysqli_fetch_assoc($resource))
    {
        $products[] = $row;
    }
    return $products; 
}


    function getProductTypes()
{
    $connection = dBconnect();
    $producttypes = array();
    $getProductTypesSQL = "
    SELECT * FROM `product_type`
    ";
    $resource = mysqli_query($connection, $getProductTypesSQL) or die (mysqli_error($connection));
    while($row = mysqli_fetch_assoc($resource))
    {
        $producttypes[] = $row;
    }
    return $producttypes; 
}
?>