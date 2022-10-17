<?php
class conectarBaseDatos{
    private $dbHost="localhost";
    private $dbNombre="prueba";
    private $dbUsuario="root";
    private $dbContra="";
    function __construct($dbHost,$dbNombre,$dbUsuario,$dbContra){
        $this->dbHost="localhost";
        $this->dbNombre="prueba";
        $this->dbUsuario="root";
        $this->dbContra="";
    }
     
     
    function conectar($dbHost,$dbNombre,$dbUsuario,$dbContra){
        
        $connection=mysqli_connect($dbHost,$dbUsuario,$dbContra,$dbNombre);
        if($connection->connect_errno){
            echo "Fallo al conectar con la BBDD";
            exit();
        }
        mysqli_select_db($connection, $dbNombre) or die("No se encuentra la BBDD");
        mysqli_set_charset($connection, "UTF8");
        return $connection;
    }
    function realizarConsulta($datos, $connection){
        $consulta="SELECT * FROM ARTICULOS WHERE PAISORIGEN LIKE '%$datos%'";
        $resultado=mysqli_query($connection,$consulta);
        $nombrescolumnas=array("PK", "SECCION","NOMBREARTICULO", "FECHA", "PAISORIGEN", "PRECIO");
        echo "<table class='tabla'>";
        while($fila=$resultado->fetch_assoc()) {
            echo "<tr>";
            for($i=0;$i<count($fila);$i+=1){
                $nombre = $nombrescolumnas[$i];
                echo "<td class='tabla'>" . $fila[$nombre] . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_close($connection);
    }
}
    
    
?>
