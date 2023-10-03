<?php
include_once("conecta.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <title>Editar</title>
</head>
<body>
<div class="container-sm mt-5 p-3 w-50 text-center border rounded shadow" style="background-color:#de7cba;">
        <div class="row text-center">
            <div class="col">
                <p class="mt-2 h3"> <i>Editar Criança</i> </p>
            </div>
            <div class="col">
                <button class="btn btn-light m-2"><a href="index.php" class="text-decoration-none text-dark">Voltar</a></button>
            </div>
        </div>
        <hr>
        <form action="processa.php" method="POST">
            <input type="hidden" name="ID" value="<?php echo $dados['ID']; ?>" />
            <div class="form-group">
                <label> <b>Nome :</b> </label>
                <input type="text" name="nome" class="form-input m-3 rounded" value="<?php echo $dados['nome']; ?>" /> 
            </div>
            <div class="form-group">
                <label> <b>Idade :</b> </label>
                <input type="text" name="nome" class="form-input m-3 rounded" value="<?php echo $dados['idade']; ?>" /> 
            </div>
            <div class="form-radio">
                <label class="form-check-label m-2"> <b>Gênero :</b> </label> <br>
                <label>  <input type="radio" name="sexo" class="form-check-input m-3" value="masc" />Garoto</label> 
                <label><input type="radio" name="sexo" class="form-check-input m-3" value="fem" />Garota </label>   
                <label><input type="radio" name="sexo" class="form-check-input m-3" value="outro" />Outro</label>
            </div>
            <div class="form-group">
                <label> <b>Nome do Responsável :</b> </label>
                <input type="text" name="nome" class="form-input m-3 rounded" value="<?php echo $dados['responsavel']; ?>" /> 
            </div>
            <div class="form-group">
                <label for="responsavel"> <b>Contato do Responsável :</b> </label>
                <input type="text" name="nome" class="form-input m-3 rounded" id="contato" value="<?php echo $dados['contato_resp']; ?>" /> 
            </div>
                <button class="btn btn-light mt-5" type="submit" name="editar" class="form-input">Editar</button>
        </form>
    </div>
</body>
</html>