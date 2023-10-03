<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <title>Cadastrar Criança</title>
</head>
<body style="background-image: url('fundo.png');background-size:cover; background-repeat:no-repeat; background-attachment: fixed;">
    <div class="container-sm mt-5 p-3 w-50 text-center border rounded shadow" style="background-color:#de7cba;">
        <div class="row text-center">
            <div class="col">
                <p class="mt-2 h3"> <i>Cadastrar Criança</i> </p>
            </div>
            <div class="col">
                <button class="btn btn-light m-2"><a href="index.php" class="text-decoration-none text-dark">Voltar</a></button>
            </div>
        </div>
        <hr>
        <form action="processa.php" method="POST">
            <div class="form-group">
                <label for="responsavel"> <b>Nome :</b> </label>
                <input type="text" name="nome" class="form-input m-3 rounded" /> 
            </div>
            <div class="form-group">
                <label for="responsavel"> <b>Idade :</b> </label>
                <input type="number" name="idade" class="form-input m-3 rounded" /> 
            </div>
            <div class="form-radio">
                <label class="form-check-label m-2"> <b>Gênero :</b> </label> <br>
                <label>  <input type="radio" name="sexo" class="form-check-input m-3" value="masc" />Garoto</label> 
                <label><input type="radio" name="sexo" class="form-check-input m-3" value="fem" />Garota </label>   
                <label><input type="radio" name="sexo" class="form-check-input m-3" value="outro" />Outro</label>
            </div>
            <div class="form-group">
                <label for="responsavel"> <b>Nome do Responsável :</b> </label>
                <input type="text" name="responsavel" class="form-input m-3 rounded"> 
            </div>
            <div class="form-group">
                <label for="responsavel"> <b>Contato do Responsável :</b> </label>
                <input type="text" id="contato" name="contato_resp" class="form-input m-3  rounded"> 
            </div>
                <button class="btn btn-light mt-5" type="submit" name="cadastrar" class="form-input">Cadastrar</button>
        </form>
    </div>
    <!--<script>
        $(document).ready(function(){
            $('#contato').mask('(00) 00000-0000');
        });
    </script>-->
</body>
</html>