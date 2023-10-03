<?php
include_once("../conecta.php");
$ID = $_GET['editar'];
$sql = "SELECT * FROM children WHERE ID=" . $ID;
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <title>Editar Criança</title>
</head>
<body style="background-image: url('fundo.png');background-size:cover; background-repeat:no-repeat; background-attachment: fixed;">
>
<div class="container-sm mt-3 p-3 w-50 text-center border rounded shadow" style="background-color:#de7cba;">
        <div class="row">
            <div class="col">
                <p class="mt-2 h3"> <i>Editar Criança</i> </p>
            </div>
            <div class="col">
                <button class="btn btn-light m-2"><a href="../index.php" class="text-decoration-none text-dark">Voltar</a></button>
            </div>
        </div>
        <hr>
        <form action="processaC.php" method="POST">
            <input type="hidden" name="ID" value="<?php echo $dados['ID']; ?>" />
            <div class="form-group">
                <label> <b>Nome :</b> </label>
                <input type="text" name="nome" class="form-input m-3 rounded" value="<?php echo $dados['nome']; ?>" /> 
            </div>
            <div class="form-group">
                <label> <b>Idade :</b> </label>
                <input type="text" name="idade" class="form-input m-3 rounded" value="<?php echo $dados['idade']; ?>" /> 
            </div>
            <div class="form-radio m-2">
                <label class="form-check-label m-2"> <b>Gênero :</b> </label> <br>
                <label> <input type="radio" name="sexo" class="form-check-input m-1" value="Masc" <?php if ($dados['sexo'] == "Masc") echo "checked"; ?>/> Garoto  </label> <br>
                <label><input type="radio" name="sexo" class="form-check-input m-1" value="Fem" <?php if ($dados['sexo'] == "Fem") echo "checked"; ?> /> Garota  </label>   <br>
                <label><input type="radio" name="sexo" class="form-check-input m-1" value="Outro" <?php if ($dados['sexo'] == "Outros") echo "checked"; ?>/> Outros  </label>
            </div>
            <div class="form-group">
                <label> <b>Nome do Responsável :</b> </label>
                <input type="text" name="responsavel" class="form-input m-3 rounded" value="<?php echo $dados['responsavel']; ?>" /> 
            </div>
            <div class="form-group">
                <label for="responsavel"> <b>Contato do Responsável :</b> </label>
                <input type="text" name="contato_resp" id="contato" class="form-input m-3 rounded" id="contato" value="<?php echo $dados['contato_resp']; ?>" /> 
            </div>
                <button class="btn btn-light mt-5" type="submit" name="editar" class="form-input">Editar</button>
        </form>
    </div>
        <script>
        $(document).ready(function(){
            $('#contato').mask('(00) 00000-0000');
        });
    </script>
</body>
</html>