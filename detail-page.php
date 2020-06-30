<?php
?>

<body>

<div class="product-detail"></div>



<script>

let productDetailItem = "<div class='product-detail'><p class='productDetail-name'></p></div>";

    $(document).ready(function(){
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
            $('.product-detail').empty();
            let result = JSON.parse(data);
            let newProductDetail = $(productDetailItem).clone();
            let productDetail = result.value;
            
                $(newProductDetail).find(".productDetail-name").text(productDetail.productName);
                
                $('.product-detail').append(newProductDetail);
            }
        })
    });
</script>

</body>

</html>