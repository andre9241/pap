<?php include 'cabecalho.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/geral.css" media="screen" />

<?php
$ligacao = mysqli_connect("localhost","root","","trabalhopap");
$query = "SELECT * FROM empresa";
$resultado = mysqli_query($ligacao,$query);

while($registo = mysqli_fetch_array($resultado)) {
	$nome = $registo["nome"];
	$telemovel = $registo["telefone"];
	$email = $registo["email"];

echo nl2br("$nome \n Contacto: \n Telefone: $telemovel \n Email: $email");
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'rodape.php'; ?>