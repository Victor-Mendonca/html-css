<?php
    require_once 'model/LoginAdmModel.php';
    require_once 'model/conexao.php';

    class LoginAdmDao{

            public static function cadastrar(LoginAdmModel $adm){
            $conexao = conexao::conectar();

            $queryInsert = "INSERT INTO tbadm(nomeAdm, senhaAdm)
            
                            VALUES(?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);

            $prepareStatement->bindValue(1, $adm->getNomeAdm());
            $prepareStatement->bindValue(2, $adm->getSenhaAdm());

            $prepareStatement->execute();

            }

            public static function procurarNome(LoginAdmModel $adm){
                $conexao = conexao::conectar();
    
                $querySelect = "SELECT * FROM tbadm WHERE nomeAdm LIKE ?";
    
                $prepareStatement = $conexao->prepare($querySelect);
    
                $prepareStatement->bindValue(1, $adm->getNomeAdm());
    
                $prepareStatement->execute();
    
                $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);
    
                if($resultado != null){
                    return true;
                }
            }
    
            public static function procurarSenha(LoginAdmModel $adm){
                $conexao = conexao::conectar();
    
                $querySelect = "SELECT * FROM tbadm WHERE senhaAdm LIKE ?";
    
                $prepareStatement = $conexao->prepare($querySelect);
    
                $prepareStatement->bindValue(1, $adm->getSenhaAdm());
    
                $prepareStatement->execute();
    
                $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);
    
                if($resultado != null){
                    return true;
                }
            }
        }
?>