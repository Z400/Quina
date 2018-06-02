<?php
    
    class ConexaoDB
    {
        private $drive;
        private $porta;
        private $banco;
        private $user;
        private $senha;
        
        function __construct()
        {
            
            $this->drive = "mysql:host=localhost;";
            $this->porta = "port=3306;";
            $this->banco = "dbname=quina";
            $this->user = "root";
            $this->senha = "";
            $this->conexao();
        }

        function conexao(){
            try{

                $db = new PDO($this->drive.$this->porta.$this->banco, $this->user, $this->senha);
                if ($db){
//                    echo "Ok";
                }
            }catch (Exception $e){
                echo "<p id='teste'>Erro: ".$e->getMessage()."</p>";
    
            }

        }
    }
    