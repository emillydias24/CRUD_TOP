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
<body>
    <div class="container-sm my-5 p-5 border text-center text-bg-light rounded" style="background:pink;">
        <p class="h4 p-3 w-50 text-dark mx-auto shadow rounded"> Cadastro de Criança </p>
        <form action="processa.php" method="POST">
            <div class="form-group">
                <label for="responsavel">Nome : </label>
                <input type="text" name="nome" class="form-input m-3" /> 
            </div>
            <div class="form-group">
                <label for="responsavel">Idade : </label>
                <input type="number" name="idade" class="form-input m-3" /> 
            </div>
            <div class="form-check-inline">
                <label class="form-check-label"> Gênero : </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">  
                    <input type="radio" name="sexo" class="form-check-input m-3" value="boy" />Garoto
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label"> 
                    <input type="radio" name="sexo" class="form-check-input m-3" value="girl" />Garota 
                </label>        
            </div>
            <div class="form-check-inline">        
                <label class="form-check-label"> 
                    <input type="radio" name="sexo" class="form-check-input m-3" value="other" />Outro
                </label>
            </div>
            <div class="form-group">
                <label for="responsavel">Nome do Responsável :</label>
                <input type="text" name="responsavel" class="form-input m-3"> 
            </div>
            <div class="form-group">
                <label for="responsavel">Contato do Responsável : </label>
                <input type="text" id="contato" name="contato" class="form-input m-3"> 
            </div>
            <div class="form-group">
                <button class="btn btn-success m-3" type="submit" name="cadastrar" class="form-input">Cadastrar Criança</button>
            </div>
        </form>
    </div>
    <!--<script>
        $(document).ready(function(){
            $('#contato').mask('(00) 00000-0000');
        });
    </script>-->
</body>
</html>