<?php
$bdServidor = "localhost"; 
$bdUsuario = "root"; 
$bdSenha = "D4ll4n0r@"; 
$bdBanco = "tcc";

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno()) {
    echo "Problemas para conectar no banco. Erro: "; 
    echo mysqli_connect_error();
    die();
}