<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Livros</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .login-icon {
            display: flex; /* Para centralizar o ícone */
            align-items: center; /* Alinha verticalmente o ícone */
            margin-left: 20px; /* Espaço à esquerda do ícone */
            transition: transform 0.3s; /* Transição suave ao passar o mouse */
        }

        .login-icon a {
            color: white; /* Cor do ícone */
            font-size: 24px; /* Tamanho do ícone */
            text-decoration: none; /* Remove o sublinhado do link */
        }

        .login-icon a:hover {
            color: #ddd; /* Cor do ícone ao passar o mouse */
            transform: scale(1.1); /* Aumenta o tamanho do ícone ao passar o mouse */
        }
    </style>
</head>

<body>
<header>
    <div class="logo">
        <img src="img/image-removebg-preview.png" alt="Logotipo Livros">
        <h1>Livros</h1>
        <nav class="nav_bar">
            <ul>
                <li><a href="tela_list.php" target="mainFrame">Listar</a></li>
                <?php
                if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === 'admin') {
                    echo '<li><a href="form_add.php" target="mainFrame">Adicionar</a></li>';
                    echo '<li><a href="form_update.php" target="mainFrame">Atualizar</a></li>';
                }
                ?>
            </ul>
        </nav>
    </div>

    <!-- Ícone de login -->
    <div class="login-icon">
        <a href="./login/" title="Voltar ao login">
            <i class="bi bi-box-arrow-in-right"></i>
        </a>
    </div>
</header>


    <main>
        <iframe name="mainFrame"
            style="width: 100%; height: calc(100vh - 160px); border: none; background-color: #1e1e1e; color:white;" src="tela_list.php"></iframe>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Livros. Todos os direitos reservados.</p>
            <ul>
                <li><a href="privacy.php">Política de Privacidade</a></li>
                <li><a href="terms.php">Termos de Uso</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>