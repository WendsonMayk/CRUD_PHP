<?php
    Class Connection{
        
        private $host;
        private $userName;
        private $passWord;
        private $dataBase;
        private $pdo; // Variável para armazenar o objeto PDO
        
        /**
         * Class constructor.
        */
        public function __construct($host, $username, $password, $database)
        {
            try {
                $this->host = $host;
                $this->userName = $username;
                $this->passWord = $password;
                $this->dataBase = $database;
                
                // Conexão com o banco de dados usando PDO
                $this->pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
                
                // Configuração do PDO para lançar exceções em caso de erros
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch(PDOException $err) {
                echo "Erro de conexão: " . $err->getMessage();
            }            
        }
    
        // Método para obter a conexão PDO
        public function getPdo() {
            return $this->pdo;
        }

    }
?>