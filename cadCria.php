<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastrar Criança</title>
</head>
<body>
    <div class="container">
        <h3> Cadastro de Criança </h3>
        <form action="processo.php" method="POST">
            <div class="form-group">
                <label for="responsavel">Nome : </label>
                <input type="text" name="nome" class="form-input" /> 
            </div>
            <div class="form-group">
                <label for="responsavel">Idade : </label>
                <input type="number" name="idade" class="form-input" /> 
            </div>
            <div class="form-group">
                <label for="sexo"> Gênero : </label>
                <input type="radio" name="sexo" class="form-input" value="boy" />Garoto
                <input type="radio" name="sexo" class="form-input" value="girl" />Garota
                <input type="radio" name="sexo" class="form-input" value="other" />Outro
            </div>
            <div class="form-group">
                <label for="responsavel">Nome do Responsável : </label>
                <input type="text" name="responsavel" class="form-input"> 
            </div>
            <div class="form-group">
                <label for="responsavel">Contato do Responsável : </label>
                <input type="text" name="responsavel" class="form-input"> 
            </div>
            <div class="form-group">
                <button class="btn btn-success"><input type="submit" name="cadastrar" class="form-input" /> Cadastrar Criança</button>
            </div>
        </form>
    </div>
</body>
</html>