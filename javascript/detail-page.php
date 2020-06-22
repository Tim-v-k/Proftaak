<?php
include 'inc/functions.php';

if(isset($_GET['productId']))
{
    $productId = $_GET['productId'];
    $productInfo = getProductsId($productId);
}

?>
<!DOCTYPE html>
<html lang="en">
<body>

<div class="products-details">
<ul>
    <div class="products-title"><li><?php echo $productInfo['productName'];?></li></div>
    <li><img class="products-image" src="images/<?php echo $productInfo['productImage'];?>"></img></li>
    <div class="products-description"><li><?php echo $productInfo['productDescription'];?></li></div>
</ul>

</div>

</body>

</html>