<!DOCTYPE html>
<html>
    <head>
        <title>The Generics</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/style.css" />

    </head>
    <body>


<div class="container">
            <h2>Products</h2>
<form id="form-products">

	<select id="productTypeDropdown">
		<option disabled selected value="">Product types:</option>
	</select>
</form>

<div class="products">
</div>




</div>
</body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/cart.js"></script>
    <script>

    let option = "<option></option>";
    
    let productItem = "<div class='product-item'><p class='product-name'></p>"+
                      "<img src='' class='product-image'/>"+
                      "<p class='product-description'></p>"+
                      "<a class='product-link' href''>VIEW PRODUCT</a>"+
                      "<p class='product-price'></p></div>";
                      
        $(document).ready(function(){
            $.ajax({
                url : "./controllers/productcontroller.php",
                type : "GET",
                data : { 
                    action : 'getProductTypes',
                },
                success : function(data){
                    let result = JSON.parse(data);
                    let productTypes = result.value;
                    for (let i = 0; i < productTypes.length; i++) {
                        let productType = productTypes[i];
                        let newOption = $(option).clone();
                        $(newOption).text(productType.productTypeName);
                        $(newOption).val(productType.productTypeId);
                        $('#productTypeDropdown').append(newOption);
                    }
                    
                }


            })

            $('#productTypeDropdown').change(function(){
                let value = $(this).val();
                console.log(value);
                $.ajax({
                    url : "./controllers/productcontroller.php",
                    type : "GET",
                    data : { 
                        action : 'getProductsByType', 
                        productTypeId : value,
                    },
                    success : function(data){
                        // debugger;
                        $('.products').empty();
                        let result = JSON.parse(data);
                        let products = result.value;
                        for (let i = 0; i < products.length; i++) {
                            let product = products[i];
                            let newProduct = $(productItem).clone();
                            let productLink = "detail-page.php?productId="+product.productId;

                            $(newProduct).find(".product-description").text(product.productDescription);
                            $(newProduct).find(".product-name").text(product.productName);
                            $(newProduct).find(".product-image").attr('src', product.productImage);
                            $(newProduct).find(".product-link").attr( 'href', productLink);
                            

                            $('.products').append(newProduct);
                        }
                    }
                })
            });
        });

    </script>

</html>