<?php
// Definir as credenciais de acesso (pode vir de um banco de dados ou de um arquivo de configuração)
$usuarioValido = "admin";
$senhaValida = "12345";

// Obter os dados do formulário
$nome = $_POST['nome'];
$senha = $_POST['senha'];

// Verificar se os dados estão corretos
if ($nome === $usuarioValido && $senha === $senhaValida) {
    // Login bem-sucedido, redireciona para a página protegida
    header("Location: pagina_protegida.php");
    exit;
} else {
    // Login falhou, exibir mensagem de erro
    echo "Nome ou senha incorretos.";
}
?>
