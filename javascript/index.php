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




</div>
        </body>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
    let option = "<option></option>";
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
                        $(newOption).text(productType);
                        $('#productTypeDropdown').append(newOption);
                    }
                    
                }


            })

        // $('#productTypeDropdown').change(function(){
        //     //Selected value
        //     var inputValue = $(this).val();
        //     console.log(inputValue); return;
        //     //Ajax for calling php function
        //     $.get('inc/functions.php', { dropdownValue: inputValue }, function(data){
        //         alert('ajax completed. Response:'+data);
        //         //do after submission operation in DOM
        //     });
        // });
    });
    // console.log(selectedVal);









    </script>

</html>