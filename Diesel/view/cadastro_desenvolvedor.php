<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/logo.ico" type="image/png">
    <title>Diesel - Cadastrar Desenvolvedores</title>
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

    <h2>Formulário Desenvolvedor</h2>
    <form action="../processing/processamento.php" method="post">
        <!-- Inputs para tabela desenvolvedor -->
        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" required>
        <label for="jogos_publicados">Jogos Publicados:</label>
        <input type="text" id="jogos_publicados" name="jogos_publicados" required>
        <input type="submit" value="Enviar">
    </form>
    
    <footer>
        <p>&copy; 2023 Todos os direitos academicos reservados - Diesel</p>
    </footer>

</body>
</html>
