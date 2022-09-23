<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$FirstNumber = isset($_POST['FirstNumber'])?$_POST['FirstNumber'] : '';
$SecondNumber = isset($_POST['SecondNumber'])?$_POST['SecondNumber']:'';
$ThirthNumber = isset($_POST['ThirthNumber'])?$_POST['ThirthNumber']:'';
$FourthNumber = isset($_POST['FourthNumber'])?$_POST['FourthNumber']:'';
$operator = isset($_POST['operator'])?$_POST['operator']:'';

$CalculatorResult = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
    switch ($operator) {
        case "+":
        $CalculatorResult = $FirstNumber + $SecondNumber + $ThirthNumber + $FourthNumber;
        break;
        case "-":
        $CalculatorResult = $FirstNumber - $SecondNumber - $ThirthNumber - $FourthNumber;
        break;
        case "x":
        $CalculatorResult = $FirstNumber * $SecondNumber * $ThirthNumber * $FourthNumber;
        break;
        case "/":
        $CalculatorResult = $FirstNumber / $SecondNumber / $ThirthNumber / $FourthNumber;
        break;
    }
}
?>
<body>
    <form action="" method="post">
        <h1>Simple Calculator</h1><br>
        First Number:<input name="FirstNumber" value="<?php echo $FirstNumber; ?>"><br>
        Second Number:<input name="SecondNumber" value="<?php echo $SecondNumber; ?>"><br>
        Thirth Number:<input name="ThirthNumber" value="<?php echo $ThirthNumber; ?>"><br>
        Fourth Number:<input name="FourthNumber" value="<?php echo $FourthNumber; ?>"><br>

        <input type="submit" name="operator" value="-">
        <input type="submit" name="operator" value="x">
        <input type="submit" name="operator" value="+">
        <input type="submit" name="operator" value="/">
        
        <br>
        
        <br>Result: <input readonly="readonly" type='text' value="<?php echo $CalculatorResult; ?>"><br>
    </form>
</body>
</html>