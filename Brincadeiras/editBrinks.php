<?php
include_once("../conecta.php");
$ID = $_GET['editar'];
$sql = "SELECT * FROM brinks WHERE ID_brinks=" . $ID;
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
<div class="container-sm mt-3 p-3 w-50 text-center bg-info border rounded shadow">
        <div class="row">
            <div class="col">
                <p class="mt-2 h3"> <i>Editar Criança</i> </p>
            </div>
            <div class="col">
                <button class="btn btn-light m-2"><a href="visuBrinks.php" class="text-decoration-none text-dark">Voltar</a></button>
            </div>
        </div>
        <hr>
        <form action="processaB.php" method="POST">
            <input type="hidden" name="ID_brinks" value="<?php echo $dados['ID_brinks']; ?>" />
            <div class="form-group">
                <label> <b>Nome da Brincadeira:</b> </label>
                <input type="text" name="nome_brinks" class="form-input m-3 rounded" value="<?php echo $dados['nome_brinks']; ?>" /> 
            </div>
            <div class="form-group">
                <label> <b>Regras :</b> </label>
                <input type="text" name="regras" class="form-input m-3 rounded" value="<?php echo $dados['regras']; ?>" /> 
            </div>
            <div class="form-radio m-2">
                <label class="form-check-label m-2"> <b>Faixa Etária :</b> </label> <br>
                <label> <input type="radio" name="faixa_etaria" class="form-check-input m-1" value="2-5" <?php if ($dados['faixa_etaria'] == "2-5") echo "checked"; ?>/> 2-5 anos  </label> <br>
                <label><input type="radio" name="faixa_etaria" class="form-check-input m-1" value="5-7" <?php if ($dados['faixa_etaria'] == "5-7") echo "checked"; ?> /> 5-7 anos  </label>   <br>
                <label><input type="radio" name="faixa_etaria" class="form-check-input m-1" value="7-10" <?php if ($dados['faixa_etaria'] == "7-10") echo "checked"; ?>/> 7-10 anos  </label> <br>
                <label><input type="radio" name="faixa_etaria" class="form-check-input m-1" value="PA" <?php if ($dados['faixa_etaria'] == "PA") echo "checked"; ?>/> Pré Adolescente </label>
            </div>
            <div class="form-group">
                <label> <b>Número de participantes :</b> </label>
                <input type="text" name="participantes" class="form-input m-3 rounded" value="<?php echo $dados['participantes']; ?>" /> 
            </div>
                <button class="btn btn-light mt-5" type="submit" name="editar" class="form-input">Editar</button>
        </form>
    </div>
</body>
</html>