<?php
$host = 'localhost';
$usuario = 'root';
$senha = NULL;
$banco = 'cad_admin';
$conexao = mysqli_conect($host, $usuario, $senha, $banco);
if ($conexao -> conect_error){
    die ("Falha na conexão: ".$conexao -> conect_error);
    $nome = $_Post ['nome'];
    $email = $_Post ['email'];
    $senha = $_Post ['senha'];
}
$conexao -> close();
?>

