<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mi primera página 2</title>
    </head>
    <body>
        
        <?php
            include ("function.php");
            echo "Este es el primer mensaje<br>";
            
            function leerDatos(){
                echo "Mensaje al interior de la función<br>";
            }
            
            leerDatos();
           
            echo "Esto es el segundo mensaje<br>";
            imprimecadenas();
            echo "Probando otra cadena";
 
        ?>
    </body>
</html>
