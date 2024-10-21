<?php
require('conexao.php');

// Obtém o ID do livro enviado pelo formulário
$id = $_POST['id'];

try {
    // Prepara a query de remoção
    $stmt = $conn->prepare('DELETE FROM biblioteca.livros WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Verifica se algum registro foi removido
    if ($stmt->rowCount() > 0) {
        echo "Livro removido com sucesso!";
        header('Location: tela_list.php'); // Redireciona para a lista de livros
        exit;
    } else {
        echo "Nenhuma remoção foi feita.";
    }
} catch (PDOException $e) {
    echo 'Erro: ' . $e->getMessage();
}
?>
