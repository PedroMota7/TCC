<?php


$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$cnpj = $_POST['cnpj'];
$senha = $_POST['senha'];


$abc = mysqli_connect('localhost', 'root', NULL, 'tcc');

if (!$abc) {
    die('Erro ao se conectar ao banco de dados: ' . mysqli_connect_error());
}


$sql = "INSERT INTO adm (ID, NOME, email, CPF, cnpj, senha)
        VALUES (NULL, '$nome', '$email', '$cpf', '$cnpj', '$senha')";

$result2 = mysqli_query($abc, $sql);

if ($result2) {
    header('login.html?log=autenticado');
    
} else {
    echo "Erro ao cadastrar: " . mysqli_error($abc);
}

mysqli_close($abc);
?>


