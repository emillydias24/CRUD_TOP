<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cadastrar Brincadeira</title>
</head>
<body style="background-image: url('../img/bg-brinks.webp');background-size:cover; background-repeat:no-repeat; background-attachment: fixed;">
    <div class="container-sm mt-3 p-3 w-50 text-center bg-info border rounded shadow">
        <div class="row text-center">
            <div class="col">
                <p class="mt-2 h3"><i>Cadastrar Brincadeira</i></p>
            </div>
            <div class="col">
                <button class="btn btn-light m-2"><a href="visuBrinks.php" class="text-decoration-none text-dark">Voltar</a></button>
            </div>
        </div>
        <hr>
        <form action="processaB.php" method="POST">
            <div class="form-group">
                <label> <b>Nome da Brincadeira :</b> </label>
                <input type="text" name="nome_brinks" class="form-input m-3 rounded" /> 
            </div>
            <div class="form-group">
                <label> <b>Regras :</b> </label>
                <input type="text" name="regras" class="form-input m-3 mt-3 rounded" /> 
            </div>
            <div class="form-radio m-2">
                <label class="form-check-label m-2"> <b>Faixa Etária :</b> </label> <br>
                <label><input type="radio" name="faixa_etaria" class="form-check-input m-1" value="2-5" />2 à 5 anos</label> <br>
                <label><input type="radio" name="faixa_etaria" class="form-check-input m-1" value="5-8" /> 5 à 8 anos</label> <br>
                <label><input type="radio" name="faixa_etaria" class="form-check-input m-1" value="8-11" />8 à 11 anos</label> <br>
                <label><input type="radio" name="faixa_etaria" class="form-check-input m-1" value="Livre" />Livre</label>
            </div>
            <div class="form-group">
                <label> <b>Número de participantes :</b> </label>
                <input type="text" name="participantes" class="form-input m-3 rounded"> 
            </div>
                <button class="btn btn-light mt-5" type="submit" name="cadastrar" class="form-input">Cadastrar</button>
        </form>
    </div>
</body>
</html>