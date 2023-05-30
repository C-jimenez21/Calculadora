<?php
    header("Content-type: application/json");
    echo <<<HTML
        Hola Mundo <br> <a href="index.html" target="_blank">Volver</a>  
    HTML;

    var_dump($_GET); //Se usa para mostrar la informacion desde el formulario, se debe usar tener en cuenta el metodo de envio de formulario (Los datos se pasan como parametros usando la URL)
    print_r($_POST) //Se usa para mostrar la informacion desde el formulario, se pone en el formulario de tipo POST (Los datos se envian en segundo plano y no son visibles en la URL )

    
?>


    /**
     * * Este es el metodo antiguo de la forma de enviar los datos 
     */