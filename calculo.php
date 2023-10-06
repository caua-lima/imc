<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cálculo IMC</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $peso=$_POST['peso'];
            $altura=$_POST['altura'];
            $imc=$peso/pow($altura,2);
            echo "<h1 class='text-center'>Resultado</h1>";
            if($imc<18.5){
                echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc.">";
                echo "<h3 class='text-center'>Magreza</h3>";
            }
            else if($imc>=18.5 and $imc<24.9){
                echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc.">";
                echo "<h3 class='text-center'>Normal</h3>";
            }
            else if($imc>=24.9 and $imc<30){
                    echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc.">";
                    echo "<h3 class='text-center'>Sobrepeso</h3>";
            }
            else{
                echo "<input type='text' class='form-control col-6 mx-auto' value=" .$imc.">";
                echo "<h3 class='text-center'>Obesidade</h3>";
            }
        ?>
    </body>
</html>