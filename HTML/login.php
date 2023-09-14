<?php
session_start();
?>



<!DOCTYPE html>
<html lang="Pt-br">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/CSS/style.css" />
	<link rel="stylesheet" href="/CSS/loginStyle.css" />
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
			<div id="login">
				<div id="login_conteudo">
					<form action="?" method="post">
						<div>
							<h1>Login</h1>
						</div>
						<div><i class="fa fa-envelope" id="icone_senha"></i><input type="text" name="email" id="campo_email" placeholder="E-mail" /></div>
						<div><i class="fa fa-lock" id="icone_senha"></i><input type="text" name="senha" id="campo_senha" placeholder="Senha" /></div>
						<a href="">Esqueceu sua senha?</a>
						<div><input type="submit" name="btn" class="btn_login"></div>
					</form>
				</div>
			</div>
			<div id="cadastro">
				<h1>Registre sua clinica</h1>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing
					elit. Doloremque, cumque amet. Consequuntur voluptatem
					reprehenderit, temporibus sapiente vel sint dicta natus
					non obcaecati quibusdam facilis labore architecto? Quam
					animi minima autem.
				</p>
				<a href="cadastro.php">Cadastre-se</a>
			</div>
		</div>
</div>
	</main>
</body>

</html>

<?php
include '../MySQL/conecta.php';

if (isset($_POST['btn'])) {
	$selectAdm = $conn->query("SELECT * FROM admin WHERE EMAIL = '" . $_POST['email'] . "' AND SENHA = '" . $_POST['senha'] . "'");
	$selectFisio = $conn->query("SELECT * FROM fisio WHERE EMAIL = '" . $_POST['email'] . "' AND SENHA = '" . $_POST['senha'] . "'");
	$selectEsta = $conn->query("SELECT * FROM estagiario WHERE EMAIL = '" . $_POST['email'] . "' AND SENHA = '" . $_POST['senha'] . "'");


	for ($i = 0; $i < 3; $i++) {
		if ($i == 0){
			// Checagem no banco de dados para achar Administrator
			if ($selectAdm->num_rows == 1) {
				$_SESSION['id'] = $selectAdm[0];
				$_SESSION['nivel'] = 0;
				$_SESSION['clinica'] = $selectAdm[9];
				header("Location: Admin/adminView.html");
			} else if ($select->num_rows > 1) {
				echo "Mais de um resultado no banco de dados";
			} else {
				echo "Não encontrado no banco de dados";
			}
		} else if ($i == 1){
			// Checagem no banco de dados para achar Fisio
			if ($selectFisio->num_rows == 1) {
				header("Location: Admin/adminView.html");
				$_SESSION['id'] = $selectFisio[0];
				$_SESSION['nivel'] = 1;
				$_SESSION['clinica'] = $selectFisio[12];
			} else if ($select->num_rows > 1) {
				echo "Mais de um resultado no banco de dados";
			} else {
				echo "Não encontrado no banco de dados";
			}
		} else if ($i == 2){
			// Checagem no banco de dados para achar Estagiario
			if ($selectEsta->num_rows == 1) {
				$_SESSION['id'] = $selectEsta[0];
				$_SESSION['nivel'] = 2;
				$_SESSION['clinica'] = $selectEsta[12];
				header("Location: Admin/adminView.html");
			} else if ($select->num_rows > 1) {
				echo "Mais de um resultado no banco de dados";
			} else {
				echo "Não encontrado no banco de dados";
			}
		}
	}

};
