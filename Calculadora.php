<?php
    session_start();
     if(isset($_POST["Numero"])){
        if(isset($_SESSION["num"])){
            $_SESSION["num"] .= $_POST["Numero"];
        
        }else{
            $_SESSION["num"] = $_POST["Numero"];
        }
        $result = $_SESSION["num"];                
    }else{
        $result = "";
    }
    
    if($_POST["Numero"] === "cc"){
        $_SESSION["num"] = null;
        $result = "";
    }
    
    if(isset($_POST["Operacion"])){
        $_SESSION["Op"] = $_POST["Operacion"];
        $result = $_SESSION["Op"];
    }







        /*$cookie_name1="num";
        $cookie_value1="";
        $cookie_name2="op";
        $cookie_value2="";
    
        if(isset($_POST["num"])){
            $num=$_POST["num"];
        }else{
            $num="";
        }
        if(isset($_POST['op'])){
            $cookie_value1=$_POST['num'];
            setcookie($cookie_name1, $cookie_value1, time()+(86400*30),"/");
    
            $cookie_value2=$_POST["op"];
            setcookie($cookie_name2, $cookie_value2, time()+(86400*30),"/");
            $num="";
        }
        if(isset($_POST["equal"])){
            $num=$_POST['num'];
            switch($_COOKIE["op"])
            {
                case "+":
                    $result=$_COOKIE["num"]+$num;
                    break;
                case "-":
                    $result=$_COOKIE["num"]-$num;
                    break;
                case "*":
                    $result=$_COOKIE["num"]*$num;
                    break;
                case "/":
                    $result=$_COOKIE["num"]/$num;
                    break;
                case "^":
                    $result=$_COOKIE["num"]**$num;
                    break;
                case "%":
                    $result=$_COOKIE["num"]*($num/100);
                    break;
                case "√":
                    $result=$_COOKIE["num"]**(1/$num);
                    break;
            }
            $num=$result;
        }*/
        
    //header("Content-type: application/json");
        /*
        session_start();
        if(isset($_POST["Numero"])){
            if($_POST["Numero"] == "cc"){
                $_SESSION["num"] = null;
            }else{
                if(isset($_SESSION["num"])){
                    $_SESSION["num"] .= $_POST["Numero"];
                }else{
                    $_SESSION["num"] = $_POST["Numero"];
                }
            }
        }

        if(isset($_POST["Operacion"])){
            switch($_SESSION["Operacion"])
            {
                case "+":
                    $result=$_SESSION["num"]+$_POST["Numero"];
                    break;
                case "-":
                    $result=$_SESSION["num"]-$_POST["Numero"];
                    break;
                case "*":
                    $result=$_SESSION["num"]*$_POST["Numero"];
                    break;
                case "/":
                    $result=$_SESSION["num"]/$_POST["Numero"];
                    break;
            }
            $_SESSION["num"] = $result;
        }*/

        
       // echo $_POST["Numero"];
    
    /*print_r($_POST);
    
    //print_r ($_POST["valor1"]);
    
    switch ($_POST["Numero"]):
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
        endswitch;*/
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
        <input type="text" class="textOut" name="valor" value="<?php echo @$num; ?>"><br>
        <!--value = "<?php //echo isset($_SESSION['num']) ? $_SESSION['num'] :0;?>"-->
        <div class="group">
            <input type="submit" class ="numBtn" name="Numeroum" value="7">
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
            <input type="submit" class ="numBtn btnCC" name="Numero" value="cc">
            <input type="submit" class ="numBtn" name="Numero" value="0">
            <input type="submit" class ="numBtn btnRe" name="Resultado" value="=">
            <input type="submit" class ="opBtn" name="Operacion" value="/">
        </div>
        </div>
      
    </form>
</body>
</html>

