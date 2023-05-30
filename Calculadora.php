<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora basica</h1>
    <form action="Calculadora.php" method="POST">
        <input type="number" name="valor1" placeholder="Ingrese un número"><br>
        <input type="number" name="valor2" placeholder="Ingrese un número"><br>
        <input type="radio" name="operacion" value="+"><label>Sumar</label>
        <input type="radio" name="operacion" value="-"><label>Restar</label>
        <input type="radio" name="operacion" value="*"><label>Multiplicar</label>
        <input type="radio" name="operacion" value="/"><label>Dividir</label>
        <br>
        <input type="submit" value="Enviar"><br><br>


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

