<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0px;
            padding:0px;
            border-sizing: border-box;
        }
        .container{
            margin:auto;
            padding-block:20px;
            background-color:black;
            border:2px solid white;
            width: 400px;
            height: 500px;
            border-radius: 50px;
            box-shadow: 10px 10px 20px;
            display:grid;
            grid-row: 1fr 1fr 1fr 1fr 1fr;
            justify-content:center;
            align-items:center;
        }
        .textOut{
            background-color:black;
            border-radius: 20px;
            padding:20px;
            font-size:1.3em;
            width:89%;
            color:white;
        }
        .numBtn{
            padding: 30px 35px;
            border-radius: 100vh;
            cursor: pointer;
            background-color:lightgray;
            
        }
        .opBtn{
            padding: 30px 35px;
            border-radius:100vh;
            background-color:orange;
            cursor: pointer;
        }
        .btnRe{
            background-color:green;
        }
        .btnCC{
            background-color:red;
            
        }
    </style>
    <title>Calculadora</title>
</head>
<body>
    <form action="Calculadora.php" method="POST">
        <div class="container">
        <input type="text" class="textOut" name="valor"><br>
        <div class="group">
            <input type="submit" class ="numBtn" name="Numero" value="7">
            <input type="submit" class ="numBtn" name="Numero" value="8">
            <input type="submit" class ="numBtn" name="Numero" value="9"> 
            <input type="submit" class ="opBtn" name="Operacion" value="+">
        </div>
        <div class="group">
            <input type="submit" class ="numBtn" name="Numero" value="4">
            <input type="submit" class ="numBtn" name="Numero" value="5">
            <input type="submit" class ="numBtn" name="Numero" value="6">
            <input type="submit" class ="opBtn" name="Operacion" value="-">
        </div>
        <div class="group">
            <input type="submit" class ="numBtn" name="Numero" value="1">
            <input type="submit" class ="numBtn" name="Numero" value="2">
            <input type="submit" class ="numBtn" name="Numero" value="3">
            <input type="submit" class ="opBtn" name="Operacion" value="*">
        </div>
        <div class="group">
            <input type="submit" class ="numBtn btnCC" name="Clear" value="cc">
            <input type="submit" class ="numBtn" name="Numero" value="0">
            <input type="submit" class ="numBtn btnRe" name="Resultado" value="=">
            <input type="submit" class ="opBtn" name="Operacion" value="/">
        </div>
        </div>
        <?php
    //header("Content-type: application/json");
    print_r($_POST);
    
    //print_r ($_POST["valor1"]);
    
    switch ($_POST["operacion"]):
        case "+":
            echo $_POST["valor1"] + $_POST["valor2"];
            break;
        case "-":
            echo $_POST["valor1"] - $_POST["valor2"];
            break;
        case "*":
            echo $_POST["valor1"] * $_POST["valor2"];
            break;
        case "/":
            echo $_POST["valor1"] / $_POST["valor2"];
            break;
        endswitch;
    ?>
    </form>
</body>
</html>

