<?php
    
    class ConexaoDB
    {
       
        function __construct()
        {

            $this->conexao();
        }

        function conexao(){
            try{

                $db = new PDO('mysql:host=localhost;port=3306;dbname=quina','root','');
                if ($db){
                    echo "Ok";
                }
            }catch (Exception $e){
                echo "erro";
            }

        }
    }
    
    $con = new ConexaoDB();
    