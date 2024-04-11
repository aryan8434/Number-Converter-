<!DOCTYPE html>
<html lang="en">

<head></head>
<title>Converted </title>
<style>
   
         .main{
            color: orange;
         }
         .main:hover{
            color:red;
            transform: scale(1.2);
            
            transition: 0.7s;
            background-color: orange;
         }
         .pii{
            padding: 40px;
            margin-left: 500px;
            font-size: xx-large;
            margin-top:100px;
            background-color: #AFE2CC;
            margin-right:400px;
         }
</style>
<body>
   <p class="pii">
    <?php
    $n1= $_POST['num3'];
    if(empty($n1)){
        echo"EMPTY";
    }
    else{
        echo "You have entered " .$n1 ." and the converetd binary number is ";
    }
   
   ?>
  
   <span class="main">
<?php

$n1 = $_POST['num3'];
if (empty($n1)) {
   exit();
} else {

    $e = dechex($n1);
    for ($i = 0; $i < strlen($e); $i++) {
        $r = $e[$i];
        if($r=='a')
        {
            $e[$i] = 'A';
        }
        else if($r=='b')
        $e[$i] = 'B';
        else if($r=='c')
        $e[$i] = 'C';
        else if($r=='d')
        $e[$i] = 'D';
        else if($r=='e')
        $e[$i] = 'E';
        else if($r=='f')
            $e[$i] = 'F';
        
    }
    echo $e;
}
    


?>
</span>
</p>
</body>