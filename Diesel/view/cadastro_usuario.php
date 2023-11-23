<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/logo.ico" type="image/png">
    <title>Formulários Diesel</title>
</head>
<body>
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

    <h2>Formulário Cliente</h2>
    <form action="../processing/processamento.php" method="post">
        <!-- Inputs para tabela usuario -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <label for="saldo">Saldo da Conta:</label>
        <input type="text" id="saldo" name="saldo" required>
        <label for="nacionalidade">Nacionalidade:</label>
        <input type="text" id="nacionalidade" name="nacionalidade" required>
        <label for="lista_amigos">Lista de Amigos:</label>
        <input type="text" id="lista_amigos" name="lista_amigos">
        <input type="submit" value="Enviar">
    </form>

    <footer>
        <p>&copy; 2023 Todos os direitos academicos reservados - Diesel</p>
    </footer>

</body>
</html>
