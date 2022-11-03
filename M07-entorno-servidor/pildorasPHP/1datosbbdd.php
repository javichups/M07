<?php
class conectarBaseDatos{
    
    function __construct(){
        $this->dbHost="localhost";
        $this->dbNombre="prueba";
        $this->dbUsuario="root";
        $this->dbContra="";
        $this->connection=mysqli_connect($this->dbHost, $this->dbUsuario, $this->dbContra,$this->dbNombre);
    }
    function conectar(){
        if($this->connection->connect_errno){
            $conexion = $this->connection;
            echo "Fallo al conectar con la BBDD" . $conexion->connect_errno;
            exit();
        }
        mysqli_select_db($this->connection, $this->dbNombre) or die("No se encuentra la BBDD");
        //$this->connection->mysqli_select_db($this->dbNombre) or die("No se encuentra la BBDD");
        $this->connection->set_charset("UTF8");
    }
    function realizarConsulta($datos){
        $this->conectar();
        $query="SELECT * FROM ARTICULOS WHERE NOMBREARTICULO = ?";
        $resultado=mysqli_prepare($this->connection,$query);
        $ok = mysqli_stmt_bind_param($resultado,"s", $datos);
        $ok = mysqli_stmt_execute($resultado);
        if($ok==false){
            echo "Error al hacer la consulta";
        } else {
            $ok=mysqli_stmt_bind_result($resultado, $seccion, $nombrearticulo, $fecha, $paisorigen, $precio, $pk);
            echo "Artículos encontrados";
            echo "<table class='tabla'>";
            
            while(mysqli_stmt_fetch($resultado)){
                echo "<tr>";
                echo "<td class='tabla'>" . $pk . "</td>";
                echo "<td class='tabla'>" . $seccion . "</td>";
                echo "<td class='tabla'>" . $nombrearticulo . "</td>";
                echo "<td class='tabla'>" . $fecha . "</td>";
                echo "<td class='tabla'>" . $paisorigen . "</td>";
                echo "<td class='tabla'>" . $precio . "</td>";
                echo "</tr>";
            }
            
        }
        echo "</table>";
        $this->connection->close();
    }
    function insertarRegistro($seccion, $nombrearticulo, $fecha, $paisorigen, $precio){
        $this->conectar();
        $query="INSERT INTO ARTICULOS(SECCION, NOMBREARTICULO, FECHA, PAISORIGEN, PRECIO) VALUES (?, ?, ?, ?, ?)";
        $resultado=mysqli_prepare($this->connection,$query);
        $ok = mysqli_stmt_bind_param($resultado,"sssss", $seccion, $nombrearticulo, $fecha, $paisorigen, $precio);
        $ok = mysqli_stmt_execute($resultado);
        if($ok==false){
            echo "Error al crear el registro";
        } else {
            echo "Nuevo registro añadido";
            echo "<table class='tabla'>";
            echo "<tr>";
            echo "<td class='tabla'>" . $seccion . "</td>";
            echo "<td class='tabla'>" . $nombrearticulo . "</td>";
            echo "<td class='tabla'>" . $fecha . "</td>";
            echo "<td class='tabla'>" . $paisorigen . "</td>";
            echo "<td class='tabla'>" . $precio . "</td>";
            echo "</tr>";
            echo "</table>";
        }
        $this->connection->close();
    }

    function eliminarRegistro($nombrearticulo){
        $this->conectar();
        $query="DELETE FROM ARTICULOS WHERE NOMBREARTICULO='$nombrearticulo'";
        $resultado=mysqli_query($this->connection,$query);
        if($resultado==false){
            echo "Error en la eliminación";
        } else if ($rowsAfected = mysqli_affected_rows($this->connection)!=0) {
            if ($rowsAfected==1){
                echo "Se ha eliminado $rowsAfected registro<br>";
            } else {
                echo "Se han eliminado $rowsAfected registros<br>";
            }
        } else {
            echo "No se ha encontrado ningún registro<br>";
        }
        $this->connection->close();
    }
 //------------------Eliminar Usuario------------------//
    function eliminarUsuario($usuario,$contraseña){
        $this->conectar();
        $query="DELETE FROM USUARIO WHERE USUARIO='$usuario' AND CONTRA='$contraseña'";
        $resultado=mysqli_query($this->connection,$query);
        if($resultado==false){
            echo "Error en la eliminación";
        } else if ($rowsAfected = mysqli_affected_rows($this->connection)!=0) {
            if ($rowsAfected){
                echo "Se ha eliminado el usuario<br>";
            }
        } else {
            echo "No se ha encontrado ningún usuario<br>";
        }
        $this->connection->close();
    }
    function actualizarRegistro($nombrearticulo,$nombreArticuloAntiguo){
        $this->conectar();
        $query="UPDATE ARTICULOS SET NOMBREARTICULO='$nombrearticulo' WHERE NOMBREARTICULO='$nombreArticuloAntiguo'";
        $resultado=mysqli_query($this->connection,$query);
        if($resultado==false){
            echo "Error en la actualización";
        } else if ($rowsAfected = mysqli_affected_rows($this->connection)!=0) {
            if ($rowsAfected==1){
                echo "Se ha actualizado $rowsAfected registro<br>";
            } else {
                echo "Se han actualizado $rowsAfected registros<br>";
            }
        } else {
            echo "No se ha encontrado ningún registro<br>";
        }
        $this->connection->close();
    }
}
?>