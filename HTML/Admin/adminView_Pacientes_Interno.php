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
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/navBarStyle.css">
    <link rel="stylesheet" href="/CSS/adminCadastroStyle.css">
    <link rel="stylesheet" href="/CSS/adminCadastroPacienteStyle.css">
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

    include '../Componentes Gerais/NavPerfil.php'

    ?>

    <div id="containerPrincipal" class="container_cadastroUser">
        <div class="container_view" data="interno/a.html" id="container_view_pacientes">
            <div class="titulo">
                <i class='bx bxs-user-plus'></i>
                <p>Novo Paciente</p>
            </div>
            <div class="container_form">

                <div class="container_foto_forms">
                    <div class="foto_forms"></div>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="titulo1"><label class="labelTitulos">Dados pessoais</label></div>
                    <div class="linhas">
                        <div class="linha1">

                            <div class="campos">
                                <label class="labelForms" for="cadastroNome">Nome completo</label>
                                <p>Nome completo</p>
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="dtNasc">Data de nascimento</label>
                                <p>Data de Nascimento</p>
                            </div>

                        </div>
                        <div class="linha2">
                            <div class="campos">
                                <label class="labelForms" for="cadastroCPF">CPF</label>
                                <p>CPF</p>
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroRG">RG</label>
                                <p>RG</p>
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroGenero">Gênero</label>
                                <p>Gênero</p>
                            </div>
                        </div>

                        <div class="barrinha">

                        </div>
                    </div>

                    <div class="titulo1"><label class="labelTitulos">Contato</label></div>
                    <div class="linhas">
                        <div class="linha2">

                            <div class="campos">
                                <label class="labelForms" for="cadastroEmail">E-mail</la>
                                    <p>E-mail</p>
                            </div>


                            <div class="campos">
                                <label class="labelForms" for="cadastroCPF">Telefone</label>
                                <p>Telefone</p>
                            </div>
                        </div>

                        <div class="barrinha"></div>

                    </div>

                    <div class="titulo1"><label class="labelTitulos">Endereço</label></div>
                    <div class="linhas">
                        <div class="linha1">

                            <div class="campos">
                                <label class="labelForms" for="cadastroRua">Rua</label>
                                <p>Rua</p>
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroCEP">CEP</label>
                                <p>CEP</p>
                            </div>

                        </div>
                        <div class="linha2_semMargem">
                            <div class="campos">
                                <label class="labelForms" for="cadastroNum">Número</label>
                                <p>Número</p>
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroComplemento">Complemento</label>
                                <p>Complemento</p>
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroBairro">Bairro</label>
                                <p>Bairro</p>
                            </div>
                        </div>
                        <div class="linha3" id="LinhaComMargem">
                            <div class="campos">
                                <label class="labelForms" for="cadastroCidade">Cidade</label>
                                <p>Cidade</p>
                            </div>
                        </div>

                        <div class="barrinha"></div>

                        <div class="linha4">
                            <div class="campos">
                                <label for="cadastroArquivo" class="Selecionar_Arquivo">

                                    <span class="texto_Arquivo">Anexar documentos</span>

                                    <i class='bx bxs-file icone_Arquivo'></i>

                                    <span class="texto_Arquivo2" id="nome_arquivo">Selecione ou arraste documentos relevantes</span>

                                </label>
                            </div>
                        </div>

                        <input type="number" name="flag" value="0" id="flag" style="display: none;">
                        <div class="container_btn_cadastro">
                            <div class="linha4">
                                <input type="submit" class="btn_cadastrar" name="cadastrar" value="Cadastrar"></input>
                            </div>
                        </div>
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



PIELICH, ta ai? Ó, acho que vc não tem mais nada pra fazer, então acho que é melhor vc só commitar e eu
fazer aqui localmente o resto das coisas, q tal?