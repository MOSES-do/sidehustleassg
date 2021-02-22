<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<form action="bcalc.php" method="get">
   First Num:<br><input type= "number" name="num1"><br><br>
   OP:<br><input type="text" name="op"><br><br>
   Second num:<br><input type= "number" name="num2"><br><br>
    <input type = "submit">
</form>

</body>
</html>

<?php 
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $op = $_GET["op"];

    if($op == "+"){
        echo $num1 + $num2;
    }elseif($op == "-"){
        echo $num1 - $num2;
    }elseif($op == "/"){
        echo $num1 / $num2;
    }elseif($op == "*"){
        echo $num1 * $num2;
    }else{
        echo "Invalid Operator";
    }
?>
