<?php

    class ItemVendaModel{

        private $idItemVenda;
        private $idVenda;
        private $idProduto;
        private $qtdeitemVenda;
        private $subTotalVenda;

        public function setIdItemVenda($idItemVenda){
            $this->idItemVenda = $idItemVenda;
        }
        public function getIdItemVenda(){
            return $this->idItemVenda;
        }
    
        public function setIdVenda($idVenda){
            $this->idVenda = $idVenda;
        }
        public function getIdVenda(){
            return $this->idVenda;
        }

        public function setIdProduto($idProduto){
            $this->idProduto = $idProduto;
        }
        public function getIdProduto(){
            return $this->idProduto;
        }

        public function setQtndItemVenda($qtdeitemVenda){
            $this->qtdeitemVenda = $qtdeitemVenda;
        }
        public function getQtndItemVenda(){
            return $this->qtdeitemVenda;
        }

        public function setSubTotalItemVenda($subTotalVenda){
            $this->subTotalVenda = $subTotalVenda;
        }
        public function getSubTotalItemVenda(){
            return $this->subTotalVenda;
        }
    }
?>