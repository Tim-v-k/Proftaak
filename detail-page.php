<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Proftaak">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>GamingZone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require("inc\KopBar.php"); ?>
</head>

<body>

<div class="bg">

<?php require("inc\Bar.php"); ?>   

<div class="product-detail">
    <p class='productDetail-name'>
        
    </p>  

    <p class="Headerdescription">Description:</p>

    <img src='' class="productDetail-image"/>

    <p class='productDetail-description'>
        
    </p>  

    <p class="Header">Release Date:</p>

    <p class='productDetail-release'>

    </p>  

    <p class="Header">Price:</p>

    <p class='euroV2'>&euro;</p><p class='productDetail-price'></p>  

    <a class='BuyButton' href="ShoppingCart.php">BUY!</a>

</div>

<script>

    $(document).ready(function(){
        var url = new URL(window.location.href);
        let value = url.searchParams.get("productId");
        $.ajax({
            url : "./controllers/productcontroller.php",
            type : "GET",
            data : { 
                action : 'getProductById', 
                productId : value,
            },
            success : function(data){
            let result = JSON.parse(data);
            let productDetail = result.value;
            
                $(".product-detail").find(".productDetail-name").text(productDetail.productName);
                $(".product-detail").find(".productDetail-image").attr('src', productDetail.productImage);
                $(".product-detail").find(".productDetail-description").text(productDetail.productDescription);
                $(".product-detail").find(".productDetail-release").text(productDetail.productReleaseDate);
                $(".product-detail").find(".productDetail-price").text(productDetail.productPrice);
            }
        })
    });
</script>

<?php require("inc\Footer.php"); ?>

</div>

</body>

</html>