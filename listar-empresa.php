<?php include 'cabecalho.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/geral.css" media="screen" />

<p><a href="registo.php"><input type="button" value="Inserir Novo Cliente" class="btn btn-success" /></a></p>


<?php
$ligacao = mysqli_connect("localhost","root","","trabalhopap");
$query = "SELECT * FROM cliente";
$resultado = mysqli_query($ligacao,$query);

while($registo = mysqli_fetch_array($resultado)) {
	$id = $registo["codigo"];
	$nome = $registo["nome"];
	$telemovel = $registo["telefone"];

echo $nome." - ".$telemovel." - ","<a href='alterar_cliente.php?id=$id'>alterar</a>"," - ","<a href='eliminar_cliente.php?id=$id'>eliminar</a>";
}
?>

<?php include 'rodape.php'; ?>