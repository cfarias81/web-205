<html>
<body>

Hi <?php echo $_POST["name"]; ?>,

The cost of your eletricity Bill is: 
<?php
$units= $_POST['units'];
$first = 3.50;
$second = 4.00;
$third = 5.20;
$fourth = 6.50;

if($units <= 50) {
    $bill = $units * $first;
}
else if($units > 50 && $units <= 100) {
    $temp = 50 * $first;
    $left_units = $units - 50;
    $bill = $temp + ($left_units * $second);
}
else if($units > 100 && $units <= 200) {
    $temp = (50 * 3.5) + (100 * $second);
    $left_units = $units - 150;
    $bill = $temp + ($left_units * $third);
}
else {
    $temp = (50 * 3.5) + (100 * $second) + (100 * $third);
    $left_units = $units - 250;
    $bill = $temp + ($left_units * $fourth);
}



echo $bill;
?>

</body>
</html>

