<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Crianças</title>
</head>
<body>
    <?php include_once('processa.php');
    $sql = "SELECT * FROM children";
    $resultado = mysqli_query($conexao, $sql);
    ?>
    <h1> Lista de Crianças </h1>
    <button class="btn btn-dark" ><a href="cadCria.php">Cadastrar</a></button>
    <hr>
    <table>
        <thead>
            <tr>
                <th> <b>Nome</b> </th>
                <th> <b>Idade</b> </th>
                <th> <b>Gênero</b> </th>
                <th> <b>Responsável</b> </th>
                <th> <b>Contato do responsável</b> </th>
                <th colspan="2"> <b>Opções</b> </th>
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
                    <a href="formEdit.php?editar=<?php echo $dados['ID']; ?>">
                        <img height='24' width='24' src='img/edit.png'> </a>
                </td>
                <td>
                    <a href="processa.php?deletar=<?php echo $dados['ID']; ?>">
                        <img height='24' width='24' src='img\del.png' /> </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <hr>
</body>
</html>