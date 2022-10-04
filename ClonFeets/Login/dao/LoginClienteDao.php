<?php
    require_once 'model/LoginClienteModel.php';
    require_once 'model/conexao.php';

    class LoginClienteDao{

        public static function logar(LoginClienteModel $cliente){
            $conexao = conexao::conectar();
            
            $prepareStatement = $conexao->prepare('');
            
            $prepareStatement->bindValue(1, $cliente->getEmailCliente());
            $prepareStatement->bindValue(2, $cliente->getSenhaCliente());

            $prepareStatement->execute();
        }

        public static function procurarEmail(LoginClienteModel $cliente){
            $conexao = conexao::conectar();

            $querySelect = "SELECT * FROM tbcliente WHERE emailCliente LIKE ?";

            $prepareStatement = $conexao->prepare($querySelect);

            $prepareStatement->bindValue(1, $cliente->getEmailCliente());

            $prepareStatement->execute();

            $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);

            if($resultado != null){
                return true;
            }
        }

        public static function procurarSenha(LoginClienteModel $cliente){
            $conexao = conexao::conectar();

            $querySelect = "SELECT * FROM tbcliente WHERE senhaCliente LIKE ?";

            $prepareStatement = $conexao->prepare($querySelect);

            $prepareStatement->bindValue(1, $cliente->getSenhaCliente());

            $prepareStatement->execute();

            $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);

            if($resultado != null){
                return true;
            }
        }
    }
?>