<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="style/style.css">
    <script>
        // Função para confirmar a remoção
        function confirmarRemocao() {
            return confirm("Tem certeza de que deseja remover este livro?");
        }
    </script>
</head>
<body>
    <div class="container_1">
        <div class="container_2">
            <div class="container_3">
                <h2>Lista de Livros</h2>
            </div>
            <table class="livros-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Volume</th>
                        <th>Categoria</th>
                        <?php
                        // Exibir a coluna "Ações" apenas para administradores
                        if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === 'admin') {
                            echo '<th>Ações</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Conectar ao banco de dados
                    require('conexao.php');

                    // Buscar os dados da tabela 'livros'
                    $stmt = $conn->query('SELECT * FROM biblioteca.livros');

                    // Exibir cada livro em uma linha da tabela
                    while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>{$linha['id']}</td>";
                        echo "<td>{$linha['nome']}</td>";
                        echo "<td>{$linha['volume']}</td>";
                        echo "<td>{$linha['categoria']}</td>";

                        // Exibir o botão de "Remover" apenas para administradores
                        if (isset($_SESSION['usuario']) && $_SESSION['usuario'] === 'admin') {
                            echo "<td>
                                    <form method='post' action='remover.php' onsubmit='return confirmarRemocao();' style='display:inline-block'>
                                        <input type='hidden' name='id' value='{$linha['id']}'>
                                        <button type='submit'>Remover</button>
                                    </form>
                                  </td>";
                        }

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
