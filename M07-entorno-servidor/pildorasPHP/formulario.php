<style>
.resultado{
    color:blue
}
</style>
<?php
    if(isset($_POST["button"])) {
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $operacion=$_POST["operacion"];
        calcular($operacion, $numero1, $numero2);
    }
    function calcular($operacion, $numero1, $numero2){
        if(!strcasecmp($operacion, "Suma")){
            $resultado = $numero1 + $numero2;
            echo "<p class='resultado'>El resultado de la $operacion es $resultado</p>";
        }
        if(!strcasecmp("Resta", $operacion)){
            $resultado = $numero1 - $numero2;
            echo "<p class='resultado'>El resultado de la $operacion es $resultado</p>";
        }
        if(!strcasecmp($operacion, "Multiplicacion")){
            $resultado = $numero1 * $numero2;
            echo "<p class='resultado'>El resultado de la $operacion es $resultado</p>";
        }
        if(!strcasecmp($operacion, "Division")){
            $resultado = $numero1 / $numero2;
            echo "<p class='resultado'>El resultado de la $operacion es $resultado</p>";
        }
        if(!strcasecmp($operacion, "Módulo")){
            $resultado = $numero1 % $numero2;
            echo "<p class='resultado'>El resultado del $operacion es $resultado</p>";
        }
        if(!strcasecmp($operacion, "Incremento")){
            $numero1++;
            $resultado = $numero1;
            echo "<p class='resultado'>El resultado del $operacion es $resultado</p>";
        }
        if(!strcasecmp($operacion, "Decremento")){
            $numero1--;
            $resultado = $numero1;
            echo "<p class='resultado'>El resultado del $operacion es $resultado</p>";
        }
    }
?>