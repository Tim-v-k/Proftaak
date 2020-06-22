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
        <?php require("inc\Bar.php"); ?>    

        <div id = "MainContainer">

        <header id = "Header">                    
            </header>
            <table id="CheckOutTable">
            <thead>
            <tr>
                <th>Image</th>
                <th>Game</th>
                <th>Discription</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>									
                <td></td>
                <td>&euro; </td>
            </tr>
            <tr>
                <td></td>
                <td></td>									
                <td></td>
                <td>&euro; </td>
            </tr>
            <tr>
                <td></td>
                <td></td>									
                <td></td>
                <td>&euro; </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td colspan="4">&euro; </td>
            </tr>
            </tfoot>
            </table>

        <?php require("inc\Footer.php"); ?>
    </div>
</body>
</html>