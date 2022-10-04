<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/icon.png" type="image/x-icon">

        <title>Cadastro Turma:</title>
    </head>
    <body>
    <div class="container">
            <div class="buttons">
                <h2 id="value" >Cadastro:</h2>
                    <form method="post" action="validadorCadastro.php">
                        <label for="txtNome">Nome:</label>
                        <input type="text" name="txtNome" id="txtNome" required></span>

                        <label for="txtCpf">CPF:</label>
                        <input type="text" name="txtCpf" id="txtCpf" required></span>

                        <label for="boxEmail">Email:</label>
                        <input type="email" name="boxEmail" id="boxEmail" required></span>

                        <label for="passSenha">Senha:</label>
                        <input type="password" name="passSenha" id="passSenha" required>

                        <label for="txtLogra">Logradouro:</label>
                        <input type="text" name="txtLogra" id="txtLogra" required></span>

                        <label for="txtNumLogra">Numero do Logradouro:</label>
                        <input type="text" name="txtNumLogra" id="txtNumLogra" required></span>

                        <label for="txtComp">Complemento:</label>
                        <input type="text" name="txtComp" id="txtComp" required></span>
                        
                        <label for="txtBairro">Bairro:</label>
                        <input type="text" name="txtBairro" id="txtBairro" required></span>

                        <label for="txtCidade">Cidade:</label>
                        <input type="text" name="txtCidade" id="txtCidade" required></span>

                        <label for="txtUf">UF:</label>
                        <input type="text" name="txtUf" id="txtUf" required></span>

                        <label for="txtCep">CEP:</label>
                        <input type="text" name="txtCep" id="txtCep" required></span>

                        <button type="submit" value="Cadastrar">Cadastrar</button>
                    </form>
                </div>
                <div class="voltar"><span><a href="../index.html">voltar</a></span></div>
                
            </div>
    </body>
</html>