<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
function processDrpdown($selectedVal) {
    echo "Selected value in php ".$selectedVal;
}        

if ($_GET['dropdownValue']){
    //call the function or execute the code
    processDrpdown($_GET['dropdownValue']);
}
?>

</body>
</html>