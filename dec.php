<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Binary2Decimal</title>
    <style>
 .not{
    margin-left: 300px;
    margin-top:100px;
    background-color: #AFE2CC;
    margin-right: 300px;
    padding:20px;
    font-size: xx-large;
    color:blue;
 }
 .hi{
    color:red;
 }
 .hi:hover{
    color:orangered;
 }
    </style>
</head>
<body>
    
<div class="not">
<?php

$n1 = $_POST['num1'];
if (empty($n1)) {
    echo "Empty number .<br> Please enter a valid binary number ";
}



else {
    $nn = $n1;
    while($nn>0){
        $op = $nn % 10;
        if($op>1){
            echo "Please enter binary number";
            echo "<br>"." What is a binary number ?"."<br>"."A Binary number is a set of numbers in digits are either 1 or 0 only ";
            echo "<br> For example 100010 is a binary number whereas 123 is not a bianry number as it contains 2 and 3 ";
            exit();
        }
        $nn = $nn / 10;
    }
    echo "The entered number is " . $n1 . " and the converted decimal number is"; 
}

?>
<span class="hi">
<?php


$n1 = $_POST['num1'];
if (!empty($n1)) {
    echo bindec($n1);
}
?>
</span>
</div>
</body>
</html>