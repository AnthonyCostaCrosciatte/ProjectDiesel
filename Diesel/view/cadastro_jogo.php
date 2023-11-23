<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/logo.ico" type="image/png">
    <title>Diesel - Cadastrar Jogos</title>
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

    <h2>Formulário Jogos</h2>
    <form action="../processing/processamento.php" method="post">
        <!-- Inputs para tabela jogos -->
        <label for="desenvolvedor">Desenvolvedor:</label>
        <input type="text" id="desenvolvedor" name="desenvolvedor" required>
        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher" required>
        <label for="url_imagem">URL da Imagem:</label>
        <input type="text" id="url_imagem" name="url_imagem" required>
        <label for="nota_geral">Nota Geral:</label>
        <input type="text" id="nota_geral" name="nota_geral" required>
        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required>
        <label for="quantidade_vendas">Quantidade de Vendas:</label>
        <input type="text" id="quantidade_vendas" name="quantidade_vendas" required>
        <label for="generos">Gêneros:</label>
        <input type="text" id="generos" name="generos" required>
        <input type="submit" value="Enviar">
    </form>
    
    <footer>
        <p>&copy; 2023 Todos os direitos academicos reservados - Diesel</p>
    </footer>

</body>
</html>
