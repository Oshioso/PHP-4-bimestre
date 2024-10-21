<link rel="stylesheet" href="style/style1.css">
<form method="post" action="registro_livro.php" id="formlivro" name="formlivro" class="form-login">
    <div class="container_login">
      <h2>Cadastro de Livros</h2>
      <div class="form-group">
        <label for="nome">Nome do Livro:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do livro" required />
      </div>
      <div class="form-group">
        <label for="volume">Volume:</label>
        <input type="text" name="volume" id="volume" placeholder="Digite o volume" required />
      </div>
      <div class="form-group">
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" placeholder="Digite a categoria" required />
      </div>
      <div class="submit">
        <input name="submit" type="submit" value="Cadastrar Livro" />
      </div>
    </div>
</form>
