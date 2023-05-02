<?php
    require_once('../config/configdb.php');
    require_once('consultas.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>TAR_REDIRECCIONAR 01 v1</title>
    </head>
    <body>
        <h2>Escriba una consulta select o de actualizacion y pulsa sobre su boton correspondiente</h2>
        <form action="index.php" method="POST"> <!-- ES RECONMEDNABLE USAR EL $GET ASI YA USAMOS EL METODO GET TODAS LAS VECES -->
            <input type="text" name="input_consulta" id="consulta"><br><br>
            <input type="submit" name="btn_consulta" value="CONSULTAR"> <input type="submit" name="btn_actualizar" value="ACTUALIZAR">
        </form>


        <?php

            //Aqui pregunto que boton se ha pulsaod y mando en ambos caso al mismo archivo, y mando como paramatro la cinsulta y el boton que se ha pulsado
            //para que una vez que llegue al nuevo archivo y preguntando porque boton le ha llegaod haga una cosa u otra


            if(isset($_POST['btn_consulta'])) // || $_POST['btn_actualizar']))
            {
                header('Location: actualizar_y_select.php?btn1='.$_POST['btn_consulta'].'&consulta='.$_POST['input_consulta'].'');
            }
            
            if(isset($_POST['btn_actualizar'])) // || $_POST['btn_actualizar']))
            {
                header('Location: actualizar_y_select.php?btn2='.$_POST['btn_actualizar'].'&update='.$_POST['input_consulta'].'');
            }


        ?>
    </body>
</html>