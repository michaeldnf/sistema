<?php
    class Banco{
        private static $DSN = "mysql:dbname=mvc;host=localhost";
        //dbname é onde altera o nome do banco de dados...
        
        private static $USER = "root";
        private static $PASS = "";
        private static $instance;

        public static function instanciar(){
            if(!self::$instance){
                try{
                    self::$instance = new PDO(self::$DSN, self::$USER, self::$PASS);
                }catch (Exception $e){
                    $e->getMessage();
                    die();
                }
            }
            return self::$instance;
        }
    }
?>
