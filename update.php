<?php
require('conexao.php');

// Recebe os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$volume = $_POST['volume'];
$categoria = $_POST['categoria'];

try {
    // Prepara a query de atualização
    $stmt = $conn->prepare('UPDATE livros SET nome = :nome, volume = :volume, categoria = :categoria WHERE id = :id');
    $stmt->execute(array(
        ':id' => $id,
        ':nome' => $nome,
        ':volume' => $volume,
        ':categoria' => $categoria
    ));
    
    // Verifica se a atualização foi bem-sucedida
    if ($stmt->rowCount() > 0) {
        echo 'Livro alterado com sucesso!';
        header('location:tela_list.php'); // Redireciona para a página de listagem
        exit;
    } else {
        echo 'Nenhuma alteração foi feita.';
    }
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
