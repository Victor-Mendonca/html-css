<?php 
    //Controller

    //DAO
    require_once 'dao/LoginAdmDao.php';
    $LoginAdmDao = new LoginAdmDao();
    $LoginAdmDao::cadastrar($LoginAdmModel);

    //Model
    require_once 'model/LoginAdmModel.php';
    $LoginAdmModel = new LoginAdmModel();
    $LoginAdmModel->setNomeAdm($_POST['txtNome']);
    $LoginAdmModel->setSenhaAdm($_POST['passSenha']);
    
    //Verificando se a turma existe e criando ela
    if($LoginAdmDao->procurarNome($LoginAdmModel) and $LoginAdmDao->procurarSenha($LoginAdmModel)){
        echo '<h2>Logado com sucesso!</h2><br><h5>Bem-Vidno Administrador</h5>';

    } else {
        echo 'Conta inexistente!';

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>
    <body>
       <div class="voltar"><span><a href="LoginAdm.php">voltar</a></span></div>
    </body>
</html>