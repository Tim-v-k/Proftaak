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
        <div id="checkfields">
            <h2> Categories </h2>
                    <input type="checkbox" id="playstation" name="scales"
                    checked>
                    <label for="playstation">Playstation</label>
                    <input type="checkbox" id="xbox" name="scales"
                    checked>
                    <label for="xbox">xBox</label>
                    <input type="checkbox" id="pc" name="scales"
                    checked>
                    <label for="pc">Pc</label>
             </div>
<div id="products">
            <div id="firstbox">
            Product
                <div id="info">
                <button class="button" style="vertical-align:middle"><span>More info </span></button>
                </div>
                <div id="text">
                Gamename <br>
                Price
                </div>
            </div>
</div>
        <?php require("inc\Footer.php");?>

    </div>
</body>
</html>