<?php
$host = 'localhost/PCC';
$usuario = 'root';
$senha = NULL;
$banco = 'cad_admin';
$conexao = mysqli_connect($host, $usuario, $senha, $banco);
if ($conexao -> connect_error){
    die ("Falha na conexão: ".$conexao -> connect_error);
    $Nome = $_post ['Nome'];
    $Cpf = $_post ['Cpf'];
    $Email = $_post ['Email'];
    $Senha = $_post ['Senha'];
}
mysqli_close($conexao);
?>

