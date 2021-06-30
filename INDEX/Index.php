<?php
       //CONECTAMOS CON EL SERVIDOR//
       $conectar = @mysql_connect('localhost','root','');
       //VERIFICAMOS LA CONEXION//
       if (!$conectar){
           echo "No se pudo conectar con el servidor.";
       } else {
           $base = mysql_select_Db('PaginaWenK');
           if (!$base){
               echo "No se encontro la base de datos.";
           }
       }

       //RECUPERAR LAS VARIABLES//
       $Nombre = $_POST['Nombre'];
       $Apellido = $_POST['Apellido'];
       $CORREO = $_POST['CORREO'];
       $TELEFONO = $_POST['TELEFONO'];
       //HACEMOS LA SENTENCIA SQL//
       $sql = "INSERT INTO datos VALUES ('$Nombre',
                                         '$Apellido',
                                         '$CORREO',
                                         '$TELEFONO')";
        //EJECUTAMOS LA SENTENCIA//
        $ejecutar = mysql_query($sql);
        //VERIFICAMOS LA EJECUCION//
        if (!$ejecutar){
            echo "Hubo algun error";
        } else {
            echo "Datos guardados correctamente<br><a href='index.html'>volver</a>";
        }
?>