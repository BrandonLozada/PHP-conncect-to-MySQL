<?php 

class Conexion {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "db_system";
    private $connect; 

    public function __construct() {
        $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->connect = new PDO($connectionString, $this->user, $this->password);
            //Detectar los errores posibles y en donde se encuentran
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión exitosa";
        }catch(Exception $e){
            //$this->connect = "Error de conexion: ".$e->getMessage();
            echo "ERROR: ".$e->getMessage();
        }
        
    }
}
$connect = new Conexion();

?>
