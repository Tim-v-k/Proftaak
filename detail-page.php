<?php
require("inc\KopBar.php");
?>

<body>

<div class="product-detail">
    <p class='productDetail-name'>
        
    </p>  

    <img src='' class="productDetail-image"/>

    <p class='productDetail-description'>
        
    </p>  

    <p class='productDetail-release'>

    </p>  

    <p class='productDetail-price'></p>  
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

</body>

</html>