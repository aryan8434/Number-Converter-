<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Binary Number Converstion</title>
    <style>
        h1{
            text-align: center;
            color:blue;
        }
        h1:hover{
            transform: scale(1.1);
            color:chartreuse;
            border: 1px solid black;
            background-color: orange;
            transition: 0.5s;
        }
        .bin,.dec{
            margin-left: 875px;
            margin-top: 40px;
            margin-bottom: 40px;
            border-radius: 20px;
            border: 0ch;
            color: red;
            background-color: aquamarine;
            padding:10px;
        }
        .bin:hover,.dec:hover{
            background-color: aqua;
            transform: scale(1.025);
            transition: 0.3s;
            border: 0.5px dotted hotpink;
        }
        .inputt{
            margin-left:850px;
            padding: 10px;
            border: 0.05px dotted red;
            
        }
        body{
            background-color: FAFAEB;
        }
    </style>
</head>

<body>
    <div class="form">
        <h1>Number conversion</h1><br>

        <form action="dec.php" method="post">
             <input class="inputt" type="number" name="num1" placeholder="Enter binary number"> <br>
             <input type="submit" class="dec" value="Convert to decimal">
             </form>
             <br> 
             <form action="bin.php" method="post"><input class="inputt" type="number" name="num2" placeholder="Enter decimal number"><br>
           <input type="submit" class="bin" value="Convert to binary" placeholder="123">
    </form>
    <form action="pic.php" method="post">
        <input class="inputt" type="text" name="num3" placeholder="Enter a decimal number"> <br>
        <input type="submit" class="dec" value="Convert to Hexadecimal">

    </form>
    </div>

</body>

</html>