<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div>
            <form action="" method="post">
            <br/><br/><br>  
                <input type="text" name="num1" id="num1">    
                <label for="num1"></label>
                <input type="text" name="num2" id="num2">
                <label for="num2"></label>
                <br><br>
                <select name="operacion" id="operacion">
                    <option>Suma</option>
                    <option>Resta</option>
                    <option>Multiplicacion</option>
                    <option>Division</option>
                    <option>Módulo</option>
                    <option>Incremento</option>
                    <option>Decremento</option>
                </select>
                <br><br>
                <input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
                <br><br>
            </form>
        </div>
        <div>          
            <?php include "formulario.php" ?>
        </div>
    </body>
</html>
