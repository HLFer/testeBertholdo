<html>
<title>MEU CEP - Teste Bertholdo</title>
<head>
 <link rel="icon" type="image/png" href="https://www.bertholdo.com.br/wp-content/themes/bertholdo-site-2018/assets/images/favicon.ico" sizes="32x32">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
 <header>
   <nav>
     <div class="nav-wrapper grad">
       <a href="https://www.bertholdo.com.br/" target="new_blank" class="brand-logo"><img src="https://www.bertholdo.com.br/wp-content/themes/bertholdo-site-2018/assets/images/logo-branca.png"/></a>
    </div>
     </nav>
   </header>
   <main class="roxo">
     <div class="container">
       <div class="row center-align">
		<!--action para arquivo incorreto(idex.php) deveria ser index.php-->
         <form action="index.php" method="post">
           <div class="input-field col s6 center-align offset-l3">
             <label>Insira o CEP para consulta:</label>
             <input id="input_text" type="text" data-length="8" name="cep" />
		   <input class="btn" type="submit" value="Enviar"/>
		   <div class="white-text">
		   		<?php
					//Deve-se usar include para chamada do método get_address e criação do objeto na classe Address
						include_once('Address.php');
						if (!empty($_POST['cep'])) {
							$cep = $_POST['cep'];
						    //Chamada ao método get_address está incorreta, deveria ser utilizada com o $this->
						 	//Variável passada como parâmetro deveria ser $cep e não $cp
						 	//Deve-se criar o Objeto antes de iniciar a chamada ao método get_address
							$address = (new Address)->get_address($cep);	
						    /*
							 *Também pode ser utilizada desta forma:
							 * $address = new Adress;
							 * $address->get_address($cep);s
							 * Tornando o código mais limpo e de fácil entendimento
							 */
							echo "<br><br>CEP Informado: $cep<br>";
							//Varável $addres escrita errada - faltando 's' no final, deveria ser $address
							//$address->logradoro escrito errado - faltando 'u' 
							echo "Rua: $address->logradouro<br>";
							echo "Bairro: $address->bairro<br>";
							//Varável $adress escrita errada - faltando 'd', deveria ser $address
							echo "Estado: $address->uf<br>";
						}
						//Fechamento da TAG de PHP - Não aconselhável
						?>
		   </div>
         </div>
	   </form>
	 </div>
	</div>
 </main>
 <footer class="page-footer deep-purple lighten-3 white-text">
	 <div class="white-text">
   		<div class="row center-align">
     		© 2018 Teste Henrique L. Fernandes - 
     		<a target="new_blank" href="https://www.github.com/HLFer">GitHub</a>
   		</div>
   	</div>
 </footer>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 </html>