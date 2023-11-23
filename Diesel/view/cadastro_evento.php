<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../img/logo.ico" type="image/png">
    <title>Diesel - Cadastrar Eventos</title>
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

    <h2>Formulário Eventos</h2>
    <form action="../processing/processamento.php" method="post">
        <!-- Inputs para tabela eventos -->
        <label for="nome_evento">Nome do Evento:</label>
        <input type="text" id="nome_evento" name="nome_evento" required>
        <label for="duracao_dias">Duração (em dias):</label>
        <input type="text" id="duracao_dias" name="duracao_dias" required>
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required></textarea>
        <label for="porcentagem_promocao">Porcentagem de Promoção:</label>
        <input type="text" id="porcentagem_promocao" name="porcentagem_promocao" required>
        <input type="submit" value="Enviar">
    </form>
    
    <footer>
        <p>&copy; 2023 Todos os direitos academicos reservados - Diesel</p>
    </footer>

</body>
</html>
