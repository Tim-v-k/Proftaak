<?php
?>

<body>

<div class="product-detail"></div>



<script>

let productItem = "<div class='product-detail'><p class='product-name'></p>";

    $('.product-detail').change(function(){
        let value = $(this).val();
        console.log(value);
        $.ajax({
            url : "./controllers/productcontroller.php",
            type : "GET",
            data : { 
                action : 'getProductById', 
                productTypeId : value,
            },
            success : function(data){
                console.log(productId);
                die;
                $('.product-detail').empty();
                let result = JSON.parse(data);
                let products = result.value;

                let newProduct = $(productItem).clone();
                
                $(newProduct).find(".product-name").text(product.productName);

                $('.product-detail').append(newProduct);
                
            }
        })
    });
        </script>
</body>

</html>