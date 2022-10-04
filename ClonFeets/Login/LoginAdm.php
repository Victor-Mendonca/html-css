<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">

        <title>Cadastro Aluno:</title>
    </head>
    <body>
    <div class="container">
            <div class="buttons">
                <h2 id="value" >Login:</h2>
                    <form method="post" action="validadorLoginAdm.php">
                        <label for="txtNome">Usuario:</label>
                        <input type="text" name="txtNome" id="txtNome" required></span>
                        <label for="passSenha">Senha:</label>
                        <input type="password" name="passSenha" id="passSenha" required>
                        <button type="submit" value="Cadastrar" id="cadastrar">Login</button>
                    </form>
            </div>
            <div class="voltar"><span><a href="../index.html">voltar</a></span></div>
    </div>
    </body>
</html>