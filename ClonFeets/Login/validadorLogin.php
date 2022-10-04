<?php 
    //Controller

    //DAO
    require_once 'dao/LoginClienteDao.php';
    $LoginDao = new LoginClienteDao();

    //Model
    require_once 'model/LoginClienteModel.php';
    $LoginModel = new LoginClienteModel();
    $LoginModel->setEmailCliente($_POST['boxEmail']);
    $LoginModel->setSenhaCliente($_POST['passSenha']);
    
    //Verificando se a turma existe e criando ela
    if($LoginDao->procurarEmail($LoginModel) and $LoginDao->procurarSenha($LoginModel)){
        echo "Logado com sucesso!";
    } else{
        echo "Nenhuma conta encontrada!";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
    <body>
       <div class="voltar"><span><a href="index.php">voltar</a></span></div>
    </body>
</html>