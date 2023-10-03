<?php
include_once('../conecta.php');

if (isset($_POST['cadastrar'])) {
    $nome_brinks = $_POST['nome_brinks'];
    $regras = $_POST['regras'];
    $faixa_etaria = $_POST['faixa_etaria'];
    $participantes = $_POST['participantes'];

    $sql = "INSERT INTO brinks (nome_brinks, regras, faixa_etaria, participantes) VALUES ('$nome_brinks','$regras', '$faixa_etaria', '$participantes')";
    mysqli_query($conexao, $sql);
    header("Location:visuBrinks.php");
}

if (isset($_POST['editar'])) {
    $ID_brinks = $_POST['ID_brinks'];
    $nome_brinks = $_POST['nome_brinks'];
    $regras = $_POST['regras'];
    $faixa_etaria = $_POST['faixa_etaria'];
    $participantes = $_POST['participantes'];

    $sql = "UPDATE brinks 
    SET nome_brinks='$nome_brinks', regras='$regras', faixa_etaria='$faixa_etaria', participantes='$participantes'  
    WHERE ID_brinks=$ID_brinks";
    mysqli_query($conexao, $sql);
    header("Location:visuBrinks.php");
}

if (isset($_GET['deletar'])) {
    $ID = $_GET['deletar'];

    $sql = "DELETE FROM brinks WHERE ID_brinks=$ID";
    mysqli_query($conexao, $sql);
    header("Location:visuBrinks.php");
}
?>