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
    <script>
    let option = "<option></option>";
    let productItem = "<div class='game-item'><p class='name'></p><img src=''class='image'></img><p class='price'></p></div>";

        $(document).ready(function(){
            $.ajax({
                url : "./test/productcontroler.php",
                type : "GET",
                data : { 
                    action : 'getProductTypes',
                },
                success : function(data){
                    // debugger;
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
                    url : "./test/productcontroler.php",
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
                            $(newProduct,".name").text(product.productName);
                            
                            $(newProduct,".price").text(product.productPrice);
                            // $(newProduct,".image").attr('src', product.productImage);
                            $('.products').append(newProduct);
                        }
                    }
                })
            });
        });

    </script>

</html>