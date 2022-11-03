<?php
    require ("Conexion.php");
    class realizarConsulta extends Conexion{
        public function __construct()
        {
            parent::__construct();

        }
        function realizarConsulta()
        {
            $resultado = $this->conexion_db->query("SELECT * FROM ARTICULOS");
            $productos = $resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;
            
        }
    }
?>