<?php


$nome_adm = $_POST['nome'];
$email_adm = $_POST['email'];
$cpf_adm = $_POST['cpf'];
$cnpj_emp = $_POST['cnpj'];
$senha_adm = $_POST['senha'];

$senha_hash = password_hash($senha_adm, PASSWORD_BCRYPT);

$abc = mysqli_connect('localhost', 'root', NULL, 'tcc');

if (!$abc) {
    die('Erro ao se conectar ao banco de dados: ' . mysqli_connect_error());
}


$sql = "INSERT INTO adm (ID, NOME, email, CPF, cnpj, senha)
        VALUES (NULL, '$nome_adm', '$email_adm', '$cpf_adm', '$cnpj_emp', '$senha_adm')";

$result2 = mysqli_query($abc, $sql);

if ($result2) {
    echo "Cadastro realizado com sucesso!";
    
} else {
    echo "Erro ao cadastrar: " . mysqli_error($abc);
}

mysqli_close($abc);
?>


