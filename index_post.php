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
        <form action="" method="post">
            <input type="checkbox" name="r" value="0.5" id="raton"/> 
            <label for="raton">Ratón</label><br/>
            <input type="checkbox" name="m" value="1" id="monitor"/> 
            <label for="monitor">Monitor</label><br/>
            <input type="checkbox" name="t" value="2.2" id="teclado"/> 
            <label for="raton">Teclado</label><br/>
            <button>Enviar</button>
        </form>
        <?php        
        if(isset($_POST) && !empty($_POST)){
            print_r($_POST);
            var_dump($_POST);
            print_r($_REQUEST);
            var_dump($_REQUEST);            
            $total=0;
            if(isset($_POST["r"])){
                echo "Comprado ratón"."</br>";
                $total+=$_POST["r"];
            }
            if(isset($_POST["m"])){
                echo "Comprado monitor"."</br>";
                $total+=$_POST["m"];
            }
            if(isset($_POST["t"])){
                echo "Comprado teclado"."</br>";
                $total+=$_POST["t"];
            }            
            echo "Total gastado: $total"."</br>";
            echo $_SERVER["REQUEST_METHOD"];
            //header("Refresh: 5;url=http://www.google.es");
            
            
            //sleep(5);
            //header("Location: http://localhost/Formularios/index_get.php");
             
        }
        ?>
    </body>
</html>
