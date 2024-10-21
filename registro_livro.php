<?php
// Recebendo os dados do formulário
$nome = $_POST['nome'];
$volume = $_POST['volume'];
$categoria = $_POST['categoria'];

require('conexao.php'); // Certifique-se de que a conexão está correta

try {
    // Preparando a inserção dos dados na tabela 'livros'
    $stmt = $conn->prepare('INSERT INTO livros (nome, volume, categoria) VALUES (:nome, :volume, :categoria)');
    
    // Executando a inserção com os valores recebidos
    $stmt->execute(array(
        ':nome'  => $nome,
        ':volume' => $volume,
        ':categoria' => $categoria
    ));
 
    // Verificando se o livro foi registrado com sucesso
    if ($stmt->rowCount() > 0) {
        echo ("Livro cadastrado com sucesso!");
    } else {
        echo ("Ocorreu um problema no cadastro.");
    }
} catch (PDOException $e) {
    // Exibindo erros, caso ocorram
    echo 'Erro: ' . $e->getMessage();
    echo ("Não foi possível conectar.");
}
?>
