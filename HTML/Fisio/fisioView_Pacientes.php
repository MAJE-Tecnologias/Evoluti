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

for ($setPacientes = array(); $rowPacientes = $pacientes->fetch_assoc(); $setPacientes[] = $rowPacientes['nome'], $setPacientes[] = $rowPacientes['id_paciente']);

$nomeArray = $selectNome->fetch_array(MYSQLI_ASSOC);

if (isset($_GET['nice'])) {

    $filtrar = $_GET['poggers'];

    if (!empty($filtrar)) {
        $pacientes = $conn->query("SELECT * FROM paciente where (`nome` like '" . $filtrar . '%' . "');");

        for ($setPacientes = array(); $rowPacientes = $pacientes->fetch_assoc(); $setPacientes[] = $rowPacientes['nome']);
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
    <link rel="stylesheet" href="../../CSS/modalConfigStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/adminStyle.css">
    <link rel="stylesheet" href="../../CSS/navBarStyle.css">
    <link rel="stylesheet" href="/CSS/adminUsuarioStyle.css">
    <link rel="stylesheet" href="../../CSS/fisioAtendimento.css">

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

    $id = $_GET['idCliente'];

    $result = $conn->query("SELECT * from paciente where (`id_paciente` = '" . $id . "') LIMIT 1");

    $rowPaciente = mysqli_fetch_assoc($result);

    ?>

    <div class="container_usuarios">
        <div class="container_view">
            <div class="container_pesquisa">
                <div class="grid_pesquisa">

                    <div class="vazio2"></div>


                    <div class="vazio1"></div>


                    <div class="pesquisa linha">
                        <form method="_GET">
                            <input type="text" placeholder="Pesquise um paciente" name="poggers">
                            <button type="submit" name="nice">
                                <i class='bx bxs-user-rectangle iconepesquisa'> </i>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="titulo">
                <i class='bx bxs-user'></i>
                <p>Pacientes</p>
            </div>
            <div class="subTitulo">
                <p>Selecione um paciente para verificar seu prontuário eletrônico:</p>
            </div>
            <div class="container_form">
                <div class="container_card">
                    <?php
                    for ($i = 0; $i < mysqli_num_rows($pacientes) * 2; $i = $i + 2) {
                        printf("
                        <a href='fisioView_ProntuarioEletronico.php?idCliente=%s' class='info2'>
                        <div>
                            <img src='https://picsum.photos/150' alt=''>
                            <h4>%s</h4>
                        </div>
                    </a>
                            ", $setPacientes[$i + 1], $setPacientes[$i]);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <nav class="menuLateral fecharMenu">
        <header>
            <div class="imagem-texto">
                <span class="imagem">
                    <img src="../../Imagens/LogoBranco.png" class="logotipo"></img>
                </span>
            </div>

            <i class="bx bx-chevron-right toggle"></i>
        </header>

        <div class="menu_container">
            <div class="menu">
                <ul class="menu_links">
                    <li class="nav_link">
                        <a href="fisioView_Atendimento.php">
                            <i class='bx bxs-plus-circle icone'></i>
                            <span class="menu_texto">Atendimento</span>
                        </a>
                    </li>

                    <li class="nav_link">
                        <a href="fisioView_Pacientes.php" class="active">
                            <i class='bx bxs-group icone'></i>
                            <span class="menu_texto">Pacientes</span>
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

    </main>

    <footer>

    </footer>

    <!-- Javascript -->
    <script src="/Javascript/scriptModalConfig.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="/Javascript/scriptAdm.js"></script>
    <!-- -------------------------------------- -->

</body>

</html>