<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input.php" method="POST">
        <label>number :</label>
        <input type="text" name="number">
        <input type="submit" value="calculate">
    </form><br>

</body>
</html>
<?php
$input1 = (int)$_POST['number'];
$sum = 0;
for ($i = 1; $i <= $input1; $i++) {
    $sum = $sum + $i;
}
echo "Sum of first " . $input1 . 
    "  Natural Numbers is : " . $sum;
?>