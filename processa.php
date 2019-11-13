<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'password');
$telefone = filter_input(INPUT_POST, 'telefone');
$pais = filter_input(INPUT_POST, 'pais');
$profissao = filter_input(INPUT_POST, 'profissao');

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_freelancer = "INSERT INTO freelancer (nome, email, senha, telefone, pais, profissao, criado) VALUES ('$nome', '$email','$senha', '$telefone', '$pais', '$profissao', NOW())";
$resultado_freelancer = mysqli_query($conn, $result_freelancer);

$linhas = mysqli_affected_rows($conn);


mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="pt-pt">
<head>
	<meta charset="utf-8">
	<title>Cadastro Clientes</title>
	<link rel="stylesheet"  href="css/Estiilloo.css">
	

	
</head>

<body>

	<div class="container">

		<nav>
			<ul class="menu">
				
			</ul>
				<section>

					<a href="index.php"><input type="submit" value="Back Home" class="btn">
			
				


		</nav>			


	



	
		<h1>Confirmação de Cadastro</h1>

		<br><br>

		<?php

		if ($linhas ==1) {

			print "Cadastro Efectuado com sucesso";

		}

		else {
			print "Cadastro não Efectuado. <br> Já existe um usuario cadastrado com este email";
		}



		?>




	

</section>

		
		
		
	</div>



				

</body>
</html>




