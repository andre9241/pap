<?php include 'cabecalho.php'; ?>
<div class="well">
<h3>
<?php
$nomecli = $_POST['nome'];
$nomeprod = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$precofinal = $_POST['precofinal'];


$ligacao = mysqli_connect("localhost","root","","trabalhopap");

if($ligacao) {

	$query_inserir = "INSERT INTO vendas (nome,nome,quantidade,precofinal) VALUES ('$nomecli','$nomeprod','$quantidade','$precofinal')";
	$resultado = mysqli_query($ligacao, $query_inserir);
	
	if($resultado) {
		echo "Produto registado com sucesso!!";
	} else {
		echo "Erro ao registar utilizador";
	}
} else {
	echo "não foi possível efetuar a ligação ao servidor";
}
?>
</h3>
</div>
</body>
</html>