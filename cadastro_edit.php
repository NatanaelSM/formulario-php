<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Formulário PHP</title>
</head>

<body>

    <?php 
        include "./conexao.php";

        $id = $_GET["id"] ?? "";
        $sql = "SELECT * FROM pessoas WHERE cod_pessoa=$id";
        $dados = mysqli_query($conn, $sql);
        $linha = mysqli_fetch_assoc($dados);

    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Edição de usuário</h1>
                <form action="edit_script.php" method="post">
                    <div class="mb-3 form-group">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" value="<?php echo $linha["nome"]; ?>">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha["endereco"]; ?>">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $linha["telefone"]; ?>">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $linha["email"]; ?>">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha["data_nascimento"]; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Salvar Alterações</button>
                    <input type="hidden" name="id" value="<?php echo $linha["cod_pessoa"]; ?>"></input>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>