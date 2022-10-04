<?php 

    class LoginClienteModel{
        
        private $codCliente;
        private $nomeCliente;
        private $emailCliente;
        private $senhaCliente;

        public function setCodCliente($codCliente){
            $this->codCliente = $codCliente;
        }
        public function getCodCliente(){
            return $this->codCliente;
        }

        public function setNomeCliente($nomeCliente){
            $this->nomeCliente = $nomeCliente;
        }
        public function getNomeCliente(){
            return $this->nomeCliente;
        }

        public function setEmailCliente($emailCliente){
            $this->emailCliente = $emailCliente;
        }
        public function getEmailCliente(){
            return $this->emailCliente;
        }

        public function setSenhaCliente($senhaCliente){
            $this->senhaCliente = $senhaCliente;
        }
        public function getSenhaCliente(){
            return $this->senhaCliente;
        }
    }
?>