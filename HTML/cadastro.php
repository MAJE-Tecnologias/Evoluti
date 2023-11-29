<?php
include '../MySQL/conecta.php';
?>
<!DOCTYPE html>
<html lang="Pt-br">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="/Imagens/Icon.png">

	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/CSS/style.css" />
	<link rel="stylesheet" href="/CSS/cadastroStyle.css" />
	<script src="/Javascript/script.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
	<title>Evoluti</title>
</head>

<body>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->

	<main>
	<div class="tela_inteira">
		<div id="container">
			<div id="cadastro">
				<div id="cadastro_conteudo">
					<form action="?" method="post">
						<div>
							<h1>Cadastro</h1>
						</div>
						<div><i class="fa fa-user"></i><input type="text" name="clinica" id="campo_nomeCli" placeholder="Nome da clinica" /></div>
						<div><i class="fa fa-user"></i><input type="text" name="adm" id="campo_nomeAdm" placeholder="Nome do administrador" /></div>
						<div><i class="fa fa-envelope" id="icone_senha"></i><input type="text" name="email" id="campo_email" placeholder="E-mail" /></div>
						<div><i class="fa fa-lock" id="icone_senha"></i><input type="text" name="senha" id="campo_senha" placeholder="Senha" /></div>
						<div><a href="">Ao criar uma conta você concorda com os termos de uso</a></div>
						<div><input type="submit" name="btn" class="btn_cadastro"></input></div>
					</form>
				</div>
			</div>
			<div id="login">
				<h1>Já tem uma conta?</h1>
				<p>
				Pronto para retomar o controle? Faça login na sua conta agora
				</p>
				<a href="login.php">Entrar</a>
			</div>
		</div>
</div>
	</main>
</body>

</html>


<?php

if (isset($_POST['btn'])) {
	$insert = "INSERT INTO clinica (clinica, nome, email, senha)
				VALUES ('" . $_POST['adm'] . "', '" . $_POST['clinica'] . "', '" . $_POST['email'] . "', '" . $_POST['senha'] . "');";
	if ($conn->query($insert) === TRUE) {
		header("Location: /HTML/cadastroClinica.php");
	} else {
		echo "Erro de conexão";
	};
};

?>