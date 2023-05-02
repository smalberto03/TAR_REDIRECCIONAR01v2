<?php

    require_once('../config/configdb.php');
    require_once('consultas.php');
    require_once('index.php');

    if(isset($_GET['btn1']))
    {
        $objeto_consulta = new Consultas(); //Instaciamo siun objeto de la clase Consultas

        $consulta = $_GET['consulta'];  //Guardamis la cinsulta que el usuario untroduce por teclado en una variable

        $filas = $objeto_consulta->realizar_consulta_select($consulta); //Con el objeto llamamos a un metodo de la clase y le pasamos la consulta 

        echo('Las filas que ha devuelto esta consulta son: <b>'.$objeto_consulta->numfilas.'</b>.<br>'); //Escribimos un atributo de la clase mediante el objeto (Es propiedad del objeto) 


        foreach($filas as $valores)
        {
            foreach($valores as $valor)
            {
                echo('<p>'.$valor.'</p>');
            }
        }
    }

    if(isset($_GET['btn2']))
    {
        $objeto_update = new Consultas(); //Instaciamo siun objeto de la clase Consultas

        $update = $_GET['update']; //Guardamis la cinsulta que el usuario untroduce por teclado en una variable

        $rows = $objeto_update->modificacion($update); //rEALIZAMOS EL METODO DE LA CLASE pasandole la consulta 

        //$rows = $objeto_update->modificacion($update);

        echo('<h2>Las filas afectadas por la consulta de modificacion son: <b>'.$objeto_update->filasafectadas.'</b></h2>'); //Mostramos el atributo filasafectadas de la clase Consultas 
    }

?>