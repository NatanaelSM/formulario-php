<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Empresa</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php 
                include "./conexao.php";

                $id = $_POST["id"];

                $sql = "DELETE FROM pessoas WHERE cod_pessoa = $id";

                if(mysqli_query($conn, $sql)){
                    echo "Usuário deletado com sucesso!";
                }else {
                    echo "Erro ao deletar o usuário!";
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>