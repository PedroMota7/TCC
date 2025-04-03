

<?php

session_start();

$_SESSION['autenticado'] = 'NAO';

if(!isset($_POST['name']) && $_POST['senha'])
{
HEADER('Location:Login.html');
}


$email_adm = $_POST['email'];

$senha_adm = $_POST['senha'];
 
$abc = mysqli_connect('localhost', 'root', NULL, 'tcc')
or die ('Erro ao se conectar ao banco de dados');

    
$consulta = "SELECT * FROM adm 
WHERE email = '$email' AND senha = '$senha_adm'";
	


$result = mysqli_query($abc, $consulta);

if(!$result)
{
  HEADER('Location:Login.html?log=erro');
}

if(!mysqli_fetch_array($result))
{
	HEADER('Location:Login.html?log=erro2');
}
else
{
	 HEADER('Location:cadastro.html'); 
}


mysqli_close($abc);

?>
