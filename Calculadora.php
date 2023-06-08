<?php
    session_start();
     if(isset($_POST["Numero"])){
        if(isset($_SESSION["num"]) && !isset($_SESSION["num2"])){
            $_SESSION["num"] .= $_POST["Numero"];
            $result = $_SESSION["num"];                
            echo "entro aqui";
        }else if(isset($_SESSION["num2"])){
            if(empty($_SESSION["num2"])){
                $_SESSION["num2"] = $_POST["Numero"];
            }else{
                $_SESSION["num2"] .= $_POST["Numero"];
            }
            $result = $_SESSION["num2"];
        }else{
            $_SESSION["num"] = $_POST["Numero"];
            $result = $_SESSION["num"];                
        }
    }else{
        $result = "";
    }
    
    if(isset($_POST["Clear"])){
        $_SESSION["num"] = null;
        $_SESSION["num2"] = null;
        $result = "";
    }
    
    if(isset($_POST["Operacion"])){
        $_SESSION["Op"] = $_POST["Operacion"];
        $result = $_SESSION["Op"];
        $_SESSION["num2"] = 0;
    }

    if(isset($_POST["Resultado"])){
        $num=$_SESSION['num2'];
        switch($_SESSION["Op"])
        {
            case "+":
                $result=$_SESSION["num"]+$num;
                break;
            case "-":
                $result=$_SESSION["num"]-$num;
                break;
            case "*":
                $result=$_SESSION["num"]*$num;
                break;
            case "/":
                if($num === "0"){
                    $result = "Operacion Invalida";
                    break;
                }else{
                    $result=$_SESSION["num"]/$num;
                    break;
                }
        }
        $_SESSION["num"] = $result;
    }
    ?>


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
            margin-top: 50px;
            padding-block:20px;
            background-color:#154360;
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
            background-color: #154360 ;
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
        <input type="text" class="textOut" name="valor" value="<?php echo @$result; ?>"><br>
        <!--value = "<?php //echo isset($_SESSION['num']) ? $_SESSION['num'] :0;?>"-->
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
      
    </form>
</body>
</html>

