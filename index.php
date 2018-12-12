
<html>
	<title> MEU CEP </title>
	<body> 
		<form action="idex.php" method="post">
		<label> Insira o CEP: </label>
		<input type="text" name="cep">
		<input type="submit" value="Enviar">
	</body>
</html>

<?php

//Deve-se usar include para chamada do método get_address na classe Address
include_once('Address.php');

if (!empty($_POST['cep'])) {

	$cep = $_POST['cep'];
	//Chamada ao método get_address está incorreta, deveria ser utilizada com o $this->
	$address = ($this->get_address($cp));

	echo "<br><br>CEP Informado: $cep<br>";
	echo "Rua: $addres->logradoro<br>";
	echo "Bairro: $address->bairro<br>";
	echo "Estado: $adress->uf<br>";
}

//Fechamento da TAG de PHP - Não aconselhável
?>