<?php
include('conecta.php');

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $escola = $_POST['escola'];
    $responsavel = $_POST['responsavel'];
    $contato_resp = $_POST['contato_resp'];

    $sql = "INSERT INTO children (nome, idade, sexo, escola, responsavel, contato_resp) VALUES ('$nome','$idade', '$sexo', '$escola', '$responsavel', '$contato_resp')";
    mysqli_query($conexao, $sql);
    header("Location:index.php");
}

if (isset($_POST['editar'])) {
    $ID = $_POST['ID'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $escola = $_POST['escola'];
    $responsavel = $_POST['responsavel'];
    $contato_resp = $_POST['contato_resp'];

    $sql = "UPDATE children 
    SET nome='$nome', idade='$idade', sexo='$sexo', escola='$escola', responsavel='$responsavel', contato_resp='$contato_resp'  
    WHERE ID=$ID";
    mysqli_query($conexao, $sql);
    header("Location:index.php");
}

if (isset($_GET['deletar'])) {
    $ID = $_GET['deletar'];

    $sql = "DELETE FROM children WHERE ID=$ID";
    mysqli_query($conexao, $sql);
    header("Location:index.php");
}
?>