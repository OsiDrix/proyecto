<?php 

    class Connection
    {
        public $conn;
        public function connect()
        {
            try {
                $db_conf = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
                $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                $this->conn = new PDO($db_conf, DB_USER, DB_PASS);
                return $this->conn;
            } catch (PDOException $e) {
                echo "Error!: No se pudo conectar a la base de datos <br/>";
                echo "<br/> Error!: ".$e->getMessage();
            }
            
        }

        public function disconnect()
        {
            $this->conn = null;
        }
        
    }
    
?>