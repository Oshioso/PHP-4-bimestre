<?php
session_start(); // Iniciar a sessão

// Definir as credenciais de acesso (pode vir de um banco de dados)
$usuarioAdmin = "admin";
$senhaAdmin = "12345";

// Obter os dados do formulário
$nome = $_POST['nome'] ?? null; // Usa null como valor padrão se não estiver definido
$senha = $_POST['senha'] ?? null;

// Verificar se os dados estão corretos
if ($nome === $usuarioAdmin && $senha === $senhaAdmin) {
    // Login bem-sucedido para admin
    $_SESSION['usuario'] = 'admin'; // Define a sessão como admin
    header("Location: ../inicial.php"); // Redireciona para a página principal
    exit;
} else {
    // Login como visitante ou falha
    $_SESSION['usuario'] = 'visitante'; // Define como visitante por padrão
    header("Location: ../inicial.php"); // Redireciona para a página principal
    exit;
}
?>
