<?php 

    class LoginAdmModel{

        private $idAdm;
        private $nomeAdm;
        private $senhaAdm;

        public function setIdAdm($idAdm){
            $this->idAdm = $idAdm;
        }
        public function getIdAdm(){
            return $this->idAdm;
        }

        public function setNomeAdm($nomeAdm){
            $this->nomeAdm = $nomeAdm;
        }
        public function getNomeAdm(){
            return $this->nomeAdm;
        }

        public function setSenhaAdm($senhaAdm){
            $this->senhaAdm = $senhaAdm;
        }
        public function getSenhaAdm(){
            return $this->senhaAdm;
        }
    }
?>