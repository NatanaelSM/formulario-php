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
    if (isset($_POST["busca"])) {
        $pesquisa = $_POST["busca"];
    } else {
        $pesquisa = "";
    }

    include "./conexao.php";

    $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);
    ?>


    <div class="container">
        <div class="row">
            <div class="col">

                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="post">
                            <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Funções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $cod_pessoa = $linha["cod_pessoa"];
                            $nome = $linha["nome"];
                            $endereco = $linha["endereco"];
                            $telefone = $linha["telefone"];
                            $email = $linha["email"];
                            $data_nascimento = $linha["data_nascimento"];
                            $data_nascimento = mostrar_data($data_nascimento);

                            echo "<tr>
                                    <th scope='row'>$nome</th>
                                    <td>$endereco</td>
                                    <td>$telefone</td>
                                    <td>$email</td>
                                    <td>$data_nascimento</td>
                                    <td>
                                        <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-primary'>Editar</a>
                                        <a href='' class='btn btn-danger'>Excluir</a>
                                    </td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>