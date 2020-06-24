<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>GamingZone</title>
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