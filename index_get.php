<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formularios PHP</title>
    </head>
    <body>
        <form action="" method="get">
            <input type="checkbox" name="r" value="0.5" id="raton"/> 
            <label for="raton">Ratón</label><br/>
            <input type="checkbox" name="m" value="1" id="monitor"/> 
            <label for="monitor">Monitor</label><br/>
            <input type="checkbox" name="t" value="2.2" id="teclado"/> 
            <label for="raton">Teclado</label><br/>
            <button>Enviar</button>
        </form>
        <?php        
        if(isset($_GET) && !empty($_GET)){
            $total=0;
            if(isset($_GET["r"])){
                echo "Comprado ratón"."</br>";
                $total+=$_GET["r"];
            }
            if(isset($_GET["m"])){
                echo "Comprado monitor"."</br>";
                $total+=$_GET["m"];
            }
            if(isset($_GET["t"])){
                echo "Comprado teclado"."</br>";
                $total+=$_GET["t"];
            }            
            echo "Total gastado: $total";
        }
        ?>
    </body>
</html>
