<?php
    class ControllerHome extends ControllerHelper{
        //A função index tem que ser criada em todo controller novo
        //pois é a função que é executada automaticamente
        public function index(){
            //Se for utilizar banco de dados apague os dados que está no array e deixe $dados = array();
            //e descomentar as linhas 10 e 11 do modelHome. Se não for usar dados pode apagar tudo
            //e deixar apenas a função $this->loadTemplate("home");
            $dados = array(                  
                0 => array('id_usuarios' => 1, 'usuario' => 'João'),
                1 => array('id_usuarios' => 2, 'usuario' => 'Jose'),
            );

            //$modelHome = new ModelHome();
            //$dados = $modelHome->getUsuarios();
            $this->loadTemplate("home", $dados);
        }

        public function produto(){
            $this->loadTemplate("produto");
        }
    }
?>