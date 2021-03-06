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

function getProductsByType($productTypeId)
{
    $connection = dBconnect();

    $products = array();

    $getProductsSQL = "
    SELECT * FROM `products` WHERE productTypeId = " . $productTypeId;

    $resource = mysqli_query($connection, $getProductsSQL) or die (mysqli_error($connection));

    while($row = mysqli_fetch_assoc($resource))
    {
        $products[] = $row;
    }
    return $products; 
}

function getProductById()
{
    $connection = dBconnect();

    $products = array();

    $getProductsSQL = "
    SELECT * FROM `products` WHERE productId = " . $productId;

    $resource = mysqli_query($connection, $getProductsSQL) or die (mysqli_error($connection));

    while($row = mysqli_fetch_assoc($resource))
    {
        $products[] = $row;
    }
    return $productDetail; 
}

function getProductTypes(){
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

function getProductsId($productId = false)
{
    //connect to database
    $connection = dBconnect();
    //define an empty array to store teams
    $productInfo = array();
    //define the query to fetch data from the database
    $getproductInfoSQL = "
    SELECT * FROM products
    ";
    if(isset($productInfo))
    {
        $getproductInfoSQL .= " WHERE productId = " . $productId;
    }

    $resource = mysqli_query($connection, $getproductInfoSQL) or die (mysqli_error($connection));

    $productInfo = mysqli_fetch_assoc($resource);

    return $productInfo;
}
