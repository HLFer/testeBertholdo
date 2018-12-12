
<html>
	<title> MEU CEP </title>
	<head>
  		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Compiled and minified CSS -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>
	<body> 
		<!-- Nome do arquivo está incorreto, deveria ser action="index.php" - anterior: action="idex.php"-->
		<form action="index.php" method="post">
		<label> Insira o CEP: </label>
		<input type="text" name="cep">
		<input type="submit" value="Enviar">
	</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>

<?php

//Deve-se usar include para chamada do método get_address e criação do objeto na classe Address
include_once('Address.php');

if (!empty($_POST['cep'])) {

	$cep = $_POST['cep'];
	//Chamada ao método get_address está incorreta, deveria ser utilizada com o $this->
	//Variável passada como parâmetro deveria ser $cep e não $cp
	//Deve-se criar o Objeto antes de iniciar a chamada ao método get_address
	//Não é necessário incluir '()', pois a construct não possui argumentos e não realiza nenhuma operação
	$address = new Adress;
	$address->get_address($cep);
	/*Também pode ser utilizada desta forma:
	 * $address = (new Address)->get_address($cep);	
	 * Tornando o código mais limpo e de fácil entendimento
	 */

	echo "<br><br>CEP Informado: $cep<br>";
	//Varável $addres escrita errada - faltando 's' no final, deveria ser $address
	echo "Rua: $address->logradoro<br>";
	echo "Bairro: $address->bairro<br>";
	//Varável $adress escrita errada - faltando 'd', deveria ser $address
	echo "Estado: $address->uf<br>";
}

//Fechamento da TAG de PHP - Não aconselhável
?>