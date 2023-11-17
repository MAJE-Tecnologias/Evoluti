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

$pacientes = $conn->query("SELECT * FROM paciente;");

$setPacientes = array();

for ($setPacientes = array(); $rowPacientes = $pacientes->fetch_assoc(); $setPacientes[] = $rowPacientes['nome'], $setPacientes[] = $rowPacientes['id_paciente']);

$nomeArray = $selectNome->fetch_array(MYSQLI_ASSOC);

$numRows = (mysqli_num_rows($pacientes));


if (isset($_GET['enviarFiltro'])) {

    $filtroNome = $_GET['filtroNome'];

    if (!empty($filtroNome)) {
        for ($i = 0; $i < $numRows; $i = $i + 2) {
            if (str_starts_with($setPacientes[$i], $filtroNome) !== true) {
                unset($setPacientes[$i+1]);
                unset($setPacientes[$i]);
                $setPacientes = array_values($setPacientes);
                $numRows = $numRows - 1;
            }
        }
    }
}
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
<link rel="stylesheet" href="../../CSS/modalConfigStyle.css">
    <link rel="stylesheet" href="/CSS/navBarStyle.css">
    <link rel="stylesheet" href="/CSS/adminUsuarioStyle.css">
    <link rel="stylesheet" href="/CSS/adminPacientesStyle.css">
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

    <div class="container_usuarios">
        <div class="container_view">


            <dialog class="modal" id="modal">
                <div class="container_Modal">
                    <form method="get">
                        <div class="TituloESubtitulo">
                            <div class="titulo">
                                <i class='bx bx-filter-alt'></i>
                                <p>Filtrar</p>
                            </div>
                            <div class="subTitulo">
                                <p>Filtre os usuários do sistema para encontrar exatamente quem você procura!</p>
                            </div>
                        </div>
                        <div class="container_Modal_Interno">
                            <input type="text" placeholder="Pesquise um usuário" name="filtroNome">
                        </div>
                        <div class="modal_botoes">
                            <button type="submit" name="enviarFiltro" value="1" class="estiloBotao">
                                Aplicar filtro
                            </button>
                            <button type="button" class="estiloBotao botao-fechar">
                                Voltar
                            </button>
                        </div>
                    </form>

                </div>
            </dialog>

            <div class="filtro_Container">
                <button type="button" class="botao-abrir">
                    <i class='bx bx-filter-alt'></i>
                    <p class="filtrarTexto">Filtrar</p>
                </button>
            </div>

            <div class="container_form">
                <div class="container_card">
                    <?php
                    for ($i = 0; $i < mysqli_num_rows($pacientes)*2; $i = $i + 2) {
                        printf("
                        <a href='adminView_Pacientes_Interno.php?idCliente=%s' class='info2'>
                        <div>
                            <img src='https://picsum.photos/150' alt=''>
                            <h4>%s</h4>
                        </div>
                    </a>
                            ",$setPacientes[$i+1], $setPacientes[$i]);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>




    <!-- MENU LATERAL (DEIXAR SEMPRE POR ÚLTIMO) -->

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
                        <a href="adminView_Cadastro_Inicio.php">
                            <i class='bx bxs-plus-circle icone'></i>
                            <span class="menu_texto">Cadastros</span>
                        </a>
                    </li>

                    <li class="nav_link">
                        <a href="adminView_Pacientes.php" class="active">
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

    <footer>

    </footer>

    <!-- Javascript -->
    <script src="/Javascript/scriptModalConfig.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="/Javascript/scriptAdm.js"></script>
    <!-- -------------------------------------- -->

</body>

</html>