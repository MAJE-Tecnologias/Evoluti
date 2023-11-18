<?php

include '../../MySQL/conecta.php';

session_start();

if ($_SESSION['nivel'] == 0) {
    $selectNome = $conn->query("SELECT nome FROM admin WHERE id_admin = '" . $_SESSION['id'] . "'");
    $prof = "Administrador";
} elseif ($_SESSION['nivel'] == 1) {
    $selectNome = $conn->query("SELECT nome FROM fisio WHERE id_fisio = '" . $_SESSION['id'] . "'");
    $prof = "Fisioterapia";
} else {
    $selectNome = $conn->query("SELECT nome FROM estagiario WHERE id_estagiario = '" . $_SESSION['id'] . "'");
    $prof = "Estagiario";
}

$nomeArray = $selectNome->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Imagens/Icon.png">

        <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../CSS/modalConfigStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/navBarStyle.css">
    <link rel="stylesheet" href="/CSS/adminCadastroStyle.css">
    <link rel="stylesheet" href="/CSS/adminCadastroPacienteStyle.css">
    <link rel="stylesheet" href="/CSS/adminPacienteInternoStyle.css">
    <!-- -------------------------------------- -->


    <!-- ÍCONES -->


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- -------------------------------------------------------------------------------------------------------- -->

    <title>Evoluti</title>
</head>

<body>

    <?php

    include '../Componentes Gerais/NavPerfil.php';

    $id = $_GET['idPaciente'];

    $result = $conn->query("SELECT * from paciente where (`id_paciente` = '" . $id . "') LIMIT 1");

    $rowPaciente = mysqli_fetch_assoc($result);



    ?>

    <div id="containerPrincipal" class="container_cadastroUser">
        <div class="container_view" data="interno/a.html" id="container_view_pacientes">
            <div class="titulo">
                <i class='bx bxs-user'></i>
                <p>Visualização de Paciente</p>
            </div>
            <div class="container_form">


                <form method="POST" enctype="multipart/form-data" class="forms">
                    <div class="container_voltar">

                        <a href="adminView_Pacientes.php" class="botao_voltar"><i class='bx bx-left-arrow-circle'></i> Voltar</a>
                    </div>
                    <div class="container_foto_forms">
                        <div class="foto_forms"></div>
                        <?php echo "<input type='text' name='nome' value='$rowPaciente[nome]' class='nomePaciente'>" ?>
                    </div>


                    <div class="titulo1"><label class="labelTitulos">Dados pessoais</label></div>
                    <div class="linhas">
                        <div class="linha1">

                            <div class="campos">
                                <label class="labelForms">Data de nascimento</label>
                                <?php echo "<input type='date' name='datanasc' value='$rowPaciente[datanasc]'>" ?>
                            </div>

                            <div class="campos">
                                <label class="labelForms">CPF</label>
                                <?php echo "<input type='number' name='cpf' value='$rowPaciente[cpf]'>" ?>
                            </div>
                            <div class="campos">
                                <label class="labelForms">RG</label>
                                <?php echo "<input type='number' name='rg' value='$rowPaciente[rg]'>" ?>
                            </div>
                            <div class="campos">
                                <label class="labelForms">Gênero</label>
                                <?php echo "<input type='text'' name='genero' value='$rowPaciente[genero]'>" ?>
                            </div>
                        </div>

                        <div class="barrinha">

                        </div>
                    </div>

                    <div class="titulo1"><label class="labelTitulos">Contato</label></div>
                    <div class="linhas">
                        <div class="linha2">

                            <div class="campos">
                                <label class="labelForms">E-mail</label>
                                <?php echo "<input type='email' name='email' value='$rowPaciente[email]'>" ?>
                            </div>


                            <div class="campos">
                                <label class="labelForms">Telefone</label>
                                <?php echo "<input type='number' name='telefone' value='$rowPaciente[telefone]'>" ?>
                            </div>
                        </div>

                        <div class="barrinha"></div>

                    </div>

                    <div class="titulo1"><label class="labelTitulos">Endereço</label></div>
                    <div class="linhas">
                        <div class="linha1">

                            <?php
                            $resultEndereco = $conn->query("SELECT * from endereco where (`id_endereco` = '" . $rowPaciente['fk_endereco'] . "') LIMIT 1");

                            $rowEndereco = mysqli_fetch_assoc($resultEndereco);

                            ?>

                            <div class="campos">
                                <label class="labelForms">CEP</label>
                                <?php echo "<input type='text' name='cep' value='$rowEndereco[cep]'>" ?>
                            </div>
                            <div class="campos">
                                <label class="labelForms">Rua</label>
                                <?php echo "<input type='text' name='rua' value='$rowEndereco[rua]'>" ?>
                            </div>
                            <div class="campos">
                                <label class="labelForms">Bairro</label>
                                <?php echo "<input type='text' name='bairro' value='$rowEndereco[bairro]'>" ?>
                            </div>

                        </div>
                        <div class="linha2_semMargem">

                            <div class="campos">
                                <label class="labelForms">Número</label>
                                <?php echo "<input type='number' name='numero' value='$rowEndereco[numero]'>" ?>
                            </div>

                            <div class="campos">
                                <label class="labelForms">Cidade</label>
                                <?php echo "<input type='text' name='cidade' value='$rowEndereco[cidade]'>" ?>
                            </div>
                        </div>



                        <div class="barrinha"></div>

                        <div class="linha4">
                            <div class="Selecionar_Arquivo">
                                <div class="container_TextoArquivo">
                                    <i class='bx bxs-file icone_Arquivo'></i>
                                    <span class="texto_Arquivo">Documentos</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="container_editar">
                        <button type="submit" class="botaoEditar" name='Editar'> Editar<i class='bx bxs-pencil iconeEditar'></i> </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <main>

    </main>

    <footer>

    </footer>

    <!-- Javascript -->
    <script src="/Javascript/scriptModalConfig.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="/Javascript/scriptAdm.js"></script>
    <script src="/Javascript/scriptAdmCadastro.js"></script>


    <script>
        let input = document.getElementById("cadastroArquivo");
        let nome_arquivo = document.getElementById("nome_arquivo")

        input.addEventListener("change", () => {
            let arquivoInserido = document.querySelector("input[type=file]").files[0];

            nome_arquivo.innerText = arquivoInserido.name;
        })
    </script>
    <!-- -------------------------------------- -->

</body>

</html>

<?php

function redirect($url)
{
    if (headers_sent()) {
        die('<script type="text/javascript">window.location=\'' . $url . '\';</script>');
    } else {
        header('Location: ' . $url);
        die();
    }
}

if (isset($_POST['Editar'])){
    $nome = $_POST['nome'];
    $datanasc = $_POST['datanasc'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];

    // Example update query for the paciente table
    $updatePacienteQuery = "UPDATE paciente SET 
                            nome = '$nome',
                            datanasc = '$datanasc',
                            cpf = '$cpf',
                            rg = '$rg',
                            genero = '$genero',
                            email = '$email',
                            telefone = '$telefone'
                            WHERE id_paciente = $id";

    // Execute the update query
    $conn->query($updatePacienteQuery);

    // Example update query for the endereco table
    $updateEnderecoQuery = "UPDATE endereco SET 
                            cep = '$cep',
                            rua = '$rua',
                            bairro = '$bairro',
                            numero = '$numero',
                            cidade = '$cidade'
                            WHERE id_endereco = $rowPaciente[fk_endereco]";

    // Execute the update query for the endereco table
    $conn->query($updateEnderecoQuery);


    // After updating, you may want to redirect the user to the view page or show a success message
    $url = 'adminView_Pacientes_Interno.php?idCliente=' . $id . '';
    redirect($url);
}

?>