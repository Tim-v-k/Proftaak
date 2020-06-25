<?php 
include('functions.php');
$games = getGames();
?>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="page-container">
<?php
foreach($games as $key => $game)
	    {
            echo $game['productName'];
        ?>
	<?php 
      };
      
    ?>
</body>
</html>
