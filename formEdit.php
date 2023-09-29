<?php
include_once("conecta.php");
// pega o id vindo via get
$ID = $_GET['editar'];
$sql = "SELECT * FROM children WHERE ID=" . $ID;
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1> Editar Criança </h1>
    <hr>
    <form action="processa.php" method="POST">
            <input type="hidden" name="ID" value="<?php echo $dados['ID']; ?>" />
        <label> Nome </label>
            <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" /> 
        <br>
        <label> Idade </label>
            <input type="number" name="idade" value="<?php echo $dados['idade']; ?>" /> 
        <br>
        <label> Gênero </label>
            <input type="radio" name="sexo" class="form-input m-3" value="boy" />Garoto
            <input type="radio" name="sexo" class="form-input m-3" value="girl" />Garota
            <input type="radio" name="sexo" class="form-input m-3" value="other" />Outro
            <input type="text" name="sexo" value="<?php echo $dados['sexo']; ?>" /> <br>
        <label> Responsável </label>
            <input type="text" name="responsavel" value="<?php echo $dados['responsavel']; ?>" /> <br>
        <label> Contato do responsável </label>
            <input type="text" name="contato" value="<?php echo $dados['contato_resp']; ?>" /> <br>

        <button type="submit" name="editar"> Editar </button>
    </form>
    <hr>
    <a href="principal.php"> Voltar </a>
</body>
</html>