<?php
        include 'inc/functions.php';

        $producttypes = getProductTypes();

        dBconnect();
        getProducts();
        getProductTypes()
    
    ?>


<!DOCTYPE html>
<html>
    <head>
        <title>The Generics</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>


<div class="container">
            <h2>Products</h2>

<form id="form-products">




<div class="form-group">
	<select class="form-control" name="producttype">
		<option value="">Product types:</option>
		<?php foreach($producttypes as $producttype) { ?>
			<option value="<?php echo $producttype['id']; ?>"<?php if(isset($_GET['productTypeName']) && $_GET['productTypeName'] == $producttype['productTypeId']) { echo ' selected="selected"'; } ?>><?php echo $producttype['productTypeName']; ?></option>
		<?php } ?>
	</select>
</div>


<script>
funtion getProducts(result){
    $.ajax({
        url: "index.php",
        type: "GET",
        data: {
            action : "getProducts"

        },
        succes: function(result) {

        }
    })
}
</script>

</div>
        </body>

