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

        <?php require("inc\Bar.php");?>    

        <div class="LeftBox">
            <div class="PC">
                <a href="Product.php">
                <img src="img/Monogram-PC-Logo-Design-by-Greenlines-Studios.jpg"></a>
            </div>
            <div class="Playstation">
                <a href="Product.php">
                <img src="img/playstation-5_n3m4.jpg"></a>
            </div>
            <div class="Xbox">
                <a href="Product.php">
                <img src="img/Microsoft_XBOX-logo-84F3ECD063-seeklogo.com.png"></a>
            </div>
        </div>

        <div class="BigBox">
            <div class="TextBox">
                <p>GamingZone</p>
            </div>
            <div class="ShownItems">
                <div class="ProductOne">
                    <div class="ProductItem">
                    </div>
                    <Button class="Button" href="#">BUY NOW!</Button>
                    <div class="ItemPrice">
                    </div>
                </div>
                <div class="ProductTwo">
                    <div class="ProductItem">
                    </div>
                    <Button class="Button" href="#">BUY NOW!</Button>
                    <div class="ItemPrice">
                    </div>
                </div>
                <div class="ProductThree">
                    <div class="ProductItem">
                    </div>
                    <Button class="Button" href="#">BUY NOW!</Button>
                    <div class="ItemPrice">
                    </div>
                </div>
                <div class="ProductFour">
                    <div class="ProductItem">
                    </div>
                    <Button class="Button" href="#">BUY NOW!</Button>
                    <div class="ItemPrice">
                    </div>
                </div>
            </div>
        </div>  

        <?php require("inc\Footer.php");?>

    </div>
</body>
</html>