<?php 

    //Controller
    require_once 'controller/clienteController.php';
    $clienteController = new clienteController();

    //DAO
    require_once 'dao/CadastroClienteDao.php';
    $cadastroDAO = new CadastroClienteDao();

    //Model
    require_once("model/CadastroClienteModel.php");
    require_once("model/conexao.php");
    $cadastroModel = new CadastroClienteModel();
    $cadastroModel->setNomeCliente($_POST['txtNome']);
    $cadastroModel->setCpfCliente($_POST['txtCpf']);
    $cadastroModel->setEmailCliente($_POST['boxEmail']);
    $cadastroModel->setSenhaCliente($_POST['passSenha']);
    $cadastroModel->setLogradouroCliente($_POST['txtLogra']);
    $cadastroModel->setNumeroCliente($_POST['txtNumLogra']);
    $cadastroModel->setComplementoCliente($_POST['txtComp']);
    $cadastroModel->setBairroCliente($_POST['txtBairro']);
    $cadastroModel->setCidadeCliente($_POST['txtCidade']);
    $cadastroModel->setUfCliente($_POST['txtUf']);
    $cadastroModel->setCepCliente($_POST['txtCep']);
    $conexao = new conexao();

     //Verificando se foi digitado um cpf existente

    $cadastroModel->setCpfCliente($_POST['txtCpf']);
        //Verificando se está tudo correto para cadastrar o aluno
        if($clienteController->validarCPF($cadastroModel) == true){
            //verificando se o aluno já foi cadastrado
            if($cadastroDAO->procurarCPF($cadastroModel)== true){
                echo "<h2>Erro ao cadastrar cliente!</h2> <br><h5> CPF já cadastrado<br></h5>";
            }
            //Cadastrando o Aluno
            else if($cadastroDAO->procurarCPF($cadastroModel) == false){
                $cadastroModel->setNomeCliente($_POST['txtNome']);
                $cadastroModel->setEmailCliente($_POST['boxEmail']);

                $cadastroDAO->cadastrar($cadastroModel);
                echo "<h2>Cliente cadastrado com sucesso!<br></h2>";
            }
        }
        else{
            echo "<h2>Erro ao cadastrar cliente!</h2> <br><h5> CPF inválido<br></h5>";
        }
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma Aluno</title>
</head>
<body>
    <div class="voltar"><span><a href="index.php">voltar</a></span></div>
</body>
</html>