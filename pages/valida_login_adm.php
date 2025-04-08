

<?php

session_start();

$_SESSION['autenticado'] = 'NAO';

if(!isset($_POST['name']) && $_POST['senha'])
{
HEADER('Location:Login.html');
}


$email = $_POST['email'];

$senha = $_POST['senha'];
 
$abc = mysqli_connect('localhost', 'root', NULL, 'tcc')
or die ('Erro ao se conectar ao banco de dados');

    
$consulta = "SELECT * FROM adm 
WHERE email = '$email' AND senha = '$senha'";
	


$result = mysqli_query($abc, $consulta);

if(!$result)
{
  HEADER('Location:Login.html');
}

if(!mysqli_fetch_array($result))
{
	HEADER('Location:Login.html');
}
else
{
	 HEADER('Location:cadastro_user.html'); 
}


mysqli_close($abc);

?>
