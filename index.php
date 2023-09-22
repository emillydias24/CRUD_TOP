<?php

if(isset($_POST['logar'])){

    include_once('conecta.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email='$email'";
    $resultado = mysqli_query($conexao, $sql);  

    if(mysqli_num_rows($resultado) > 0){
        $dados = mysqli_fetch_assoc($resultado);
        if(password_verify($senha,$dados['senha'])){
           
            session_start();
            $_SESSION["idusuario"] = $dados['idusuario'];
            $_SESSION["nome"] = $dados['nome'];

            header("location:principal.php"); 
           
        }
    } 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
</head>

<body style="background-image: url('fundo.png');">


    <div class="container">
        <div class="text-center">         
        <img src="foto2.png" class="rounded-circle" alt="Cinque Terre" width="190"> 
      </div>

      <div class="jumbotron text-center mt-5" style="margin-bottom:0; background-color: #6fb695;">

    <div class="container">
    <div class="container p-3 my-3 border text-center">
        <h1 class="text-light"> Login</h1>
        <form method="POST" class="form-group">
                <div class="form-group">
                    <label  class="text-light"> E-mail </label>
                    <input class="form-control" type="text" name="email" required="required" />
                </div>

                <div class="form-group">
                    <label  class="text-light"> Senha </label>
                    <input class="form-control" type="password" name="senha" required="required" />
                </div>

                <input class="btn btn-success" type="submit" role="button" name="logar" value="Concluir"/>

              </form>
        </div>
        </div>
    </div>
    </div>
</div>

</body>

</html>