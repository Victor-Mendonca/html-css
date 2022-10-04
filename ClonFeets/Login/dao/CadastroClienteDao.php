<?php
    require_once 'model/CadastroClienteModel.php';
    require_once 'model/conexao.php';

    class CadastroClienteDao{

        public static function cadastrar(CadastroClienteModel $cliente){
            $conexao = conexao::conectar();

            $queryInsert = "INSERT INTO tbcliente(nomeCliente, cpfCliente, emailCliente, 
            senhaCliente, logradouroCliente, numlogCliente, compCliente, bairroCliente, cidadeCliente, 
            ufCliente, cepCliente)
            
                            VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $cliente->getNomeCliente());
            $prepareStatement->bindValue(2, $cliente->getCpfCliente());
            $prepareStatement->bindValue(3, $cliente->getEmailCliente());
            $prepareStatement->bindValue(4, $cliente->getSenhaCliente());
            $prepareStatement->bindValue(5, $cliente->getLogradouroCliente());
            $prepareStatement->bindValue(6, $cliente->getNumeroCliente());
            $prepareStatement->bindValue(7, $cliente->getComplementoCliente());
            $prepareStatement->bindValue(8, $cliente->getBairroCliente());
            $prepareStatement->bindValue(9, $cliente->getCidadeCliente());
            $prepareStatement->bindValue(10, $cliente->getUfCliente());
            $prepareStatement->bindValue(11, $cliente->getCepCliente());


            $prepareStatement->execute();
        }

        public static function procurarCPF(CadastroClienteModel $cliente){
            $conexao = conexao::conectar();

            $querySelect = "SELECT * FROM tbcliente WHERE cpfCliente LIKE ?";

            $prepareStatement = $conexao->prepare($querySelect);

            $prepareStatement->bindValue(1, $cliente->getCpfCliente());

            $prepareStatement->execute();

            $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);

            if($resultado != null){
                return true;
            }
        }

        // public static function pegarCodCliente(CadastroClienteModel $cliente){
        //     $conexao = conexao::conectar();

        //     $querySelect = "SELECT * FROM tbcliente WHERE codCliente = ?";

        //     $prepareStatement = $conexao->prepare($querySelect);

        //     $prepareStatement->bindValue(1, $cliente->getCodCliente());

        //     $prepareStatement->execute();

        //     if($prepareStatement->rowCount() > 0){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // }

        // public static function pegarCodigo(Turma $turma){
        //     $conexao = conexao::conectar();

        //     $querySelect = "SELECT codTurma FROM tbTurma WHERE nomeTurma Like ?";

        //     $prepareStatement = $conexao->prepare($querySelect);

        //     $prepareStatement->bindValue(1, $turma->getNome());

        //     $prepareStatement->execute();

        //     $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);

        //     return $resultado['codTurma'];
        // }

        // public static function pegarNome(Turma $turma){
        //     $conexao = conexao::conectar();

        //     $querySelect = "SELECT nomeTurma FROM tbTurma WHERE codTurma = ?";

        //     $prepareStatement = $conexao->prepare($querySelect);

        //     $prepareStatement->bindValue(1, $turma->getId());

        //     $prepareStatement->execute();

        //     $resultado = $prepareStatement->fetch(PDO::FETCH_ASSOC);

        //     return $resultado['nomeTurma'];
        // }
    }
?>