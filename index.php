<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Lista de Crianças</title>
</head>
<body>
<div class="container-sm my-5 p-3 text-center border rounded shadow" style="background-color:#de7cba;">
    <?php include('processaC.php');
    $sql = "SELECT * FROM children";
    $resultado = mysqli_query($conexao, $sql);
    $qtLinhas = mysqli_num_rows($resultado);
    ?>
    <div class="row mt-2 text-center mx-auto">
        <div class="col-12">
            <p class="p-3 h3 shadow bg-light rounded"> <i>Lista de Crianças</i> </p>
        </div>
        <div class="col-6 mt-3">
            <button class="btn btn-light m-2"><a href="cadCria.php" class="text-decoration-none text-dark">Cadastrar Criança</a></button>
        </div>
        <div class="col-6 mt-3">
            <button class="btn btn-light m-2"><a href="visuBrinks.php" class="text-decoration-none text-dark">Brincadeiras</a></button>
        </div>
    </div>
    <hr>
    <?php if($qtLinhas > 0) : ?>
    <div class='rounded table-responsive text-center m-3'>
		<table class='table table-light table-hover shadow'>
            <thead class='table-light text-bg-light'>
                <tr>
                    <th> Nome </th>
                    <th> Idade </th>
                    <th> Gênero </th>
                    <th> Responsável </th>
                    <th> Contato do responsável </th>
                    <th colspan="2"> Opções </th>
                </tr>
            </thead>
            <tbody>
            <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                <td> <?php echo $dados['nome']; ?> </td>
                <td> <?php echo $dados['idade']; ?> </td>
                <td> <?php echo $dados['sexo']; ?> </td>
                <td> <?php echo $dados['responsavel']; ?> </td>
                <td> <?php echo $dados['contato_resp']; ?> </td>
                <td>
                    <a href="editCria.php?editar=<?php echo $dados['ID']; ?>">
                        <img height='24' width='24' src='img/edit.png'> </a>
                </td>
                <td>
                    <a href="processaC.php?deletar=<?php echo $dados['ID']; ?>">
                        <img height='24' width='24' src='img\del.png' /> </a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php else :
            print "<p class='alert alert-danger m-3'>Ainda Não Há Crianças Castradas!</p>";
        ?>
        <?php endif; ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>