<?php
    class ModelHome{
        private $instancia;

        public function __construct(){
            $this->instancia = Banco::instanciar();
        }

        public function getUsuarios(){
            $dados = array();

            $sql = "SELECT * FROM usuarios";
            $sql = $this->instancia->prepare($sql);
            $sql->execute();

            if ($sql->rowCount() > 0){
                $dados = $sql->fetchAll();
            }

            return $dados;
        }
    }
?>