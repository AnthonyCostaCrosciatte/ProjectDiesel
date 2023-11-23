<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/logo.ico" type="image/png">
    <link rel="icon" href="../img/logo.ico" type="image/png">
    <title>Diesel - Diesel</title>
</head>
<body class="realce">
    <header>
        <div class="logo"><img src="../img/logo.png" width="40px" height="40px"> Diesel</div>
        <nav>
            <ul>
                <li><a href="./home.php">Início</a></li>
                <li><a href="./cadastro_usuario.php">Cadastrar</a></li>
                <li><a href="./ver_jogos.php">Visualizar</a></li>
                <li><a href="./login.php">Entrar</a></li>
            </ul>
        </nav>
    </header>

    <section class="welcome">
        <h2>Entre na sua conta</h2>
        <p>Descubra novos jogos, conecte-se com amigos e explore a comunidade.</p>
    </section>

    <section class="conteudo-login">
        <section class="conteudo-formulario">
            <form id="form-log" method="POST" action="../processamento/processamento.php">
                <label id="input-log">Entrar: </label>
                <input id="input-log" type="text" placeholder="Email" name="inputEmailLog">
                <input id="input-log" type="password" placeholder="Senha" name="inputSenhaLog">
                <input id="botao-log" type="submit" value="ENTRE">
            </form>
            <p>Não possui uma conta? <a href="cadastroCliente.php">Cadastrar</a></p>
        </section>
    </section>


    <footer>
        <p>&copy; 2023 Todos os direitos academicos reservados - Diesel</p>
    </footer>
</body>
</html>
