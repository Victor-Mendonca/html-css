<?php 

    class CadastroClienteModel{

        private $codCliente;
        private $nomeCliente;
        private $cpfCliente;
        private $emailCliente;
        private $senhaCliente;
        private $logradouroCliente;
        private $numlogCliente;
        private $compCliente;
        private $bairroCliente;
        private $cidadeCliente;
        private $ufCliente;
        private $cepCliente;

        
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

        public function setCpfCliente($cpfCliente){
            $this->cpfCliente = $cpfCliente;
        }
        public function getCpfCliente(){
            return $this->cpfCliente;
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

        public function setLogradouroCliente($logradouroCliente){
            $this->logradouroCliente = $logradouroCliente;
        }
        public function getLogradouroCliente(){
            return $this->logradouroCliente;
        }

        public function setNumeroCliente($numlogCliente){
            $this->numlogCliente = $numlogCliente;
        }
        public function getNumeroCliente(){
            return $this->numlogCliente;
        }

        public function setComplementoCliente($compCliente){
            $this->compCliente = $compCliente;
        }
        public function getComplementoCliente(){
            return $this->compCliente;
        }

        public function setBairroCliente($bairroCliente){
            $this->bairroCliente = $bairroCliente;
        }
        public function getBairroCliente(){
            return $this->bairroCliente;
        }

        public function setCidadeCliente($cidadeCliente){
            $this->cidadeCliente = $cidadeCliente;
        }
        public function getCidadeCliente(){
            return $this->cidadeCliente;
        }

        public function setUfCliente($ufCliente){
            $this->ufCliente = $ufCliente;
        }
        public function getUfCliente(){
            return $this->ufCliente;
        }

        public function setCepCliente($cepCliente){
            $this->cepCliente = $cepCliente;
        }
        public function getCepCliente(){
            return $this->cepCliente;
        }

    }
?>