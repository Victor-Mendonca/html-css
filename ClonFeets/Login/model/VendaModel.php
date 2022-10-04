<?php

    class VendaModel{

        private $idVenda;
        private $dataVenda;
        private $valorTotalVenda;
        private $statusVenda;
        private $idCliente;

        public function setIdVenda($idVenda){
            $this->idVenda = $idVenda;
        }
        public function getIdVenda(){
            return $this->idVenda;
        }

        public function setDataVenda($dataVenda){
            $this->dataVenda = $dataVenda;
        }
        public function getDataVenda(){
            return $this->dataVenda;
        }

        public function setValorTotalVenda($valorTotalVenda){
            $this->valorTotalVenda = $valorTotalVenda;
        }
        public function getValorTotalVenda(){
            return $this->valorTotalVenda;
        }

        public function setStatusVenda($statusVenda){
            $this->statusVenda = $statusVenda;
        }
        public function getStatusVenda(){
            return $this->statusVenda;
        }

        public function setIdCliente($idCliente){
            $this->idCliente = $idCliente;
        }
        public function getIdCliente(){
            return $this->idCliente;
        }
    }
?>