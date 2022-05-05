<?php include 'cabecalho.php'; ?>
	<link rel="stylesheet" type="text/css" href="css/geral.css" media="screen" />

<p><a href="registo.php"><input type="button" value="Inserir Venda" class="btn btn-success" /></a></p>


<?php
$ligacao = mysqli_connect("localhost","root","","trabalhopap");
$query = "SELECT * FROM vendas";
$resultado = mysqli_query($ligacao,$query);

while($registo = mysqli_fetch_array($resultado)) {
$nomecli = $registo["nome"];
$nomeprod = $registo["nome"];
$quantidade = $registo["quantidade"];
$precofinal = $registo["preçofinal"];


echo "<div class='well'>".$nomecli." - ".$nomeprod." - ".$quantidade." - ".$precofinal.
"<a href='alterar_vendas.php?id=$id'>alterar</a></div>";
"<a href='eliminar-venda.php?id=$id'>eliminar</a></div>";

} ?>

<?php include 'rodape.php'; ?>