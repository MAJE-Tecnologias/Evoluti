<?php
include '../MySQL/conecta.php';
?>
<!DOCTYPE html>
<html lang="Pt-br">

<head></head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="/Imagens/Icon.png">

	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/CSS/style.css" />
	<link rel="stylesheet" href="/CSS/cadastroStyle.css" />
    <link rel="stylesheet" href="/CSS/cadastroClinicaStyle.css" />
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

			<div class="container_form">
				<img src="/Imagens/Logo.jpeg" class="logotipoClinica"></img>

			<div class="formSuperior">
				<div class="superiorRow">
					<div class="label1">
					<label for="nomeCompleto" class="Label_Forms">Nome Completo: </label>
					<p id="nomeCompleto">Nome Completo</p> 
					</div>

					<div class="label1">
					<label for="nomeClinica" class="Label_Forms">Nome da Clínica: </label>
					<p id="nomeClinica">Nome da Clínica</p> 
					</div>
				</div>

				<div class="superiorRow">
					<div class="label1">
					<label for="nomeClinica" class="Label_Forms">E-mail: </label>
					<p id="nomeClinica">E-mail</p> 
					</div>
				</div>
			</div>
			<span class="barrinhaClinica"></span>

			<div class="formInferior">

	<form action="" method="POST">

			<div class="linha">
				<div class="linha1">

					<div class="campos">
						<label class="labelForms" for="dtNascClinica">Data de nascimento</label>
						<input type="date" name="nasc" id="dtNascClinica">
					</div>

					<div class="campos">
                                <label class="labelForms" for="cadastroGeneroClinica">Gênero</label>
                                <select id="cadastroGeneroClinica" name="genero">
                                    <option selected value="">Selecione o gênero</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                    <option value="3">Outro</option>
                                </select>
                    </div>

					<div class="campos">
					<label class="labelForms" for="telefoneClinica">Telefone</label>
                                <input type="text" name="telefone" id="telefoneClinica" placeholder="(00) 0000-0000">
                    </div>


				</div>

				<div class="linha2">
							<div class="camposInferior">
                                <label class="labelForms" for="cadastroRGClinica">RG</label>
                                <input type="text" name="rg" id="cadastroRGClinica" placeholder="Digite o RG">
                            </div>

							<div class="camposInferior">
                                <label class="labelForms" for="cadastroCPFClinica">CPF</label>
                                <input type="text" name="cpf" id="cadastroCPFClinica" placeholder="Digite o CPF">
                            </div>
				</div>

				<div class="linha2">
							<div class="camposInferior">
                                <label class="labelForms" for="cadastroCNPJClinica">CNPJ da clínica</label>
                                <input type="text" name="cnpj" id="cadastroCNPJClinica" placeholder="Digite CNPJ">
                            </div>

							<div class="camposInferior">
                                <label class="labelForms" for="cadastroEmailClinica">E-mail da clínica</label>
                                <input type="email" name="email" id="cadastroEmailClinica" placeholder="Digite o E-mail">
                            </div>
				</div>

			</div>
			</form>

			</div>

		</div>

		</div>
		</div>
	</main>
</body>

</html>


<?php

if (isset($_POST['btn'])) {
	$insert = "INSERT INTO clinica (CLINICA, NOME, EMAIL, SENHA)
				VALUES ('" . $_POST['adm'] . "', '" . $_POST['clinica'] . "', '" . $_POST['email'] . "', '" . $_POST['senha'] . "');";
	if ($conn->query($insert) === TRUE) {
		header("Location: Admin/adminView.html");
	} else {
		echo "Erro de conexão";
	};
};

?>