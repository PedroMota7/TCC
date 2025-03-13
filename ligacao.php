<?php
$host = 'localhost';
$usuario = 'root';
$senha = NULL;
$banco = 'cad_admin';

    $Nome = $_post ['Nome'];
    $Cpf = $_post ['Cpf'];
    $Email = $_post ['Email'];
    $Senha = $_post ['Senha'];

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if ($conexao -> connect_error){
    die ("Falha na conexão: ".$conexao -> connect_error);
}
mysqli_close($conexao);
?>