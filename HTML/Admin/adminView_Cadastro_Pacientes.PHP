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
<link rel="stylesheet" href="../../CSS/modalConfigStyle.css">
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
                                <input type="text" name="nome" id="cadastroNome" placeholder="Digite o nome completo">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="dtNasc">Data de nascimento</label>
                                <input type="date" name="nasc" id="dtNasc">
                            </div>

                        </div>
                        <div class="linha2">
                            <div class="campos">
                                <label class="labelForms" for="cadastroCPF">CPF</label>
                                <input type="text" name="cpf" id="cadastroCPF" placeholder="Digite o CPF">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroRG">RG</label>
                                <input type="text" name="rg" id="cadastroRG" placeholder="Digite o RG">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroGenero">Gênero</label>
                                <select id="cadastroGenero" name="genero">
                                    <option selected value="">Selecione o gênero</option>
                                    <option value="1">Masculino</option>
                                    <option value="2">Feminino</option>
                                    <option value="3">Outro</option>
                                </select>
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
                                    <input type="email" name="email" id="cadastroEmail" placeholder="Digite o e-mail">
                            </div>


                            <div class="campos">
                                <label class="labelForms" for="cadastroCPF">Telefone</label>
                                <input type="text" name="telefone" id="cadastroCPF" placeholder="(00) 0000-0000">
                            </div>
                        </div>

                        <div class="barrinha"></div>

                    </div>

                    <div class="titulo1"><label class="labelTitulos">Endereço</label></div>
                    <div class="linhas">
                        <div class="linha1">

                            <div class="campos">
                                <label class="labelForms" for="cadastroRua">Rua</label>
                                <input type="text" id="cadastroRua" name="rua" placeholder="Digite a rua">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroCEP">CEP</label>
                                <input type="text" id="cadastroCEP" name="cep" placeholder="Digite o CEP">
                            </div>

                        </div>
                        <div class="linha2_semMargem">
                            <div class="campos">
                                <label class="labelForms" for="cadastroNum">Número</label>
                                <input type="number" id="cadastroNum" name="numero" placeholder="Digite o número da residência">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroComplemento">Complemento</label>
                                <input type="text" id="cadastroComplemento" name="complemento" placeholder="Digite o complemento">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroBairro">Bairro</label>
                                <input type="text" id="cadastroBairro" name="bairro" placeholder="Digite o bairro">
                            </div>
                        </div>
                        <div class="linha3" id="LinhaComMargem">
                            <div class="campos">
                                <label class="labelForms" for="cadastroCidade">Cidade</label>
                                <input type="text" id="cadastroCidade" name="cidade" placeholder="Digite a cidade">
                            </div>
                        </div>

                        <div class="barrinha"></div>

                        <div class="linha4">
                            <div class="campos">
                                <label for="cadastroArquivo" class="Selecionar_Arquivo">

                                    <input type="file" id="cadastroArquivo" name="Arquivos">

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

    <nav class="menuLateral fecharMenu" style="z-index: 2;">
        <header>
            <div class="imagem-texto">
                <span class="imagem">
                    <img src="/Imagens/LogoBranco.png" class="logotipo"></img>
                </span>
            </div>

            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu_container">
            <div class="menu">
                <ul class="menu_links">
                    <li class="nav_link">
                        <a href="adminView_Cadastro_Inicio.php" class="active">
                            <i class='bx bxs-plus-circle icone'></i>
                            <span class="menu_texto">Cadastros</span>
                        </a>
                    </li>

                    <li class="nav_link">
                        <a href="adminView_Pacientes.php">
                            <i class='bx bxs-group icone'></i>
                            <span class="menu_texto">Pacientes</span>
                        </a>
                    </li>

                    <li class="nav_link">
                        <a href="#">
                            <i class='bx bx-file icone'></i>
                            <span class="menu_texto">Documentos</span>
                        </a>
                    </li>

                    <li class="nav_link">
                        <a href="#">
                            <i class='bx bx-line-chart icone'></i>
                            <span class="menu_texto">Relatórios</span>
                        </a>
                    </li>

                    <li class="nav_link">
                        <a href="adminView_Usuarios.php">
                            <i class='bx bx-user-plus icone'></i>
                            <span class="menu_texto">Usuários</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="menu_embaixo">
                <li class="">
                    <a href="#" class="toggle-switch">
                        <i class='bx bx-sun icone'></i>
                        <span class="menu_texto">Alterar Modo</span>
                    </a>
                </li>
                <li class="">
                    <a>
                    <button type="button" class="botaoConfig botao-abrirConfig">
                        <i class='bx bx-cog icone'></i>
                        <span class="menu_texto">Configurações</span>
                    </button>
                    </a>
                </li>

            </div>
        </div>

    </nav>


    <main>
        <!-- <nav class="container_nav_func">
            <ul class="nav_func">
                <li><a href="">Tudo</a></li>
                <li><a href="">Fisioterapeuta</a></li>
                <li><a href="">Administrador</a></li>
                <li><a href="">Estagiário</a></li>
            </ul>
        </nav> -->

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

<?PHP

if (isset($_POST['cadastrar'])) {

    //Dados Gerais de Cadastro
    $nome = $_POST['nome'];
    $nasc = $_POST['nasc'];

    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    //Dados gerais de endereço

    $rua = $_POST['rua'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];

    //Adicionando Endereço a base de dados

    $insertEndereco = $conn->query("SELECT InserirEndereco('" . $rua . "', '" . $numero . "','" . $bairro . "','" . $cidade . "','" . $cep . "')");
    $idEndereco = mysqli_fetch_array($insertEndereco);

    $insertAdm = $conn->query("CALL INSERIR_PACIENTE('" . $nome . "','" . $nasc . "', '" . $telefone . "', '" . $email . "','" . $cpf . "', '" . $rg . "','" . $genero . "', '" . $idEndereco[0] . "')");
    echo "<script type='javascript'>alert('Admin adicionado com sucesso');";

    $target_dir = "../../Imagens/imagensBd/";
    $target_file = $target_dir . basename($_FILES["Arquivos"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowTypes = array('docx', 'png', 'jpeg', 'xlxs', 'txt', 'pdf');

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["Arquivos"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["Arquivos"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["Arquivos"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}



?>