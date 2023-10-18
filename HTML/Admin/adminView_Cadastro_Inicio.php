<?php
session_start();

$_SESSION['clinica'] = 1;

include '../../MySql/conecta.php';


if ($_SESSION['nivel'] == 0) {
    $selectNome = $conn->query("SELECT NOME FROM admin WHERE ID_ADMIN = '" . $_SESSION['id'] . "'");
    $prof = "Administrador";
} elseif ($_SESSION['nivel'] == 1) {
    $selectNome = $conn->query("SELECT NOME FROM fisio WHERE ID_FISIO = '" . $_SESSION['id'] . "'");
    $prof = "Fisioterapia";
} else {
    $selectNome = $conn->query("SELECT NOME FROM estagiario WHERE ID_ESTAGIARIO = '" . $_SESSION['id'] . "'");
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
    <link rel="stylesheet" href="/CSS/navStyle.css">
    <link rel="stylesheet" href="/CSS/adminCadastroInicialStyle.css">
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

    <div id="containerPrincipal" class="container_cadastroEscolha">
        <div class="container_view">
            <a href="adminView_Cadastro.php" class="lado_Esquerdo">
                <p class="texto_CadastroUsuario">Novo Usuário</p>
                <img src="/Imagens/NovoUsuario_Opac.png" class="imgNovoUser" alt="NovoUsuario">
            </a>
            <a href="adminView_Cadastro_Pacientes.php" class="lado_Direito">
            <p class="texto_CadastroUsuario">Novo Paciente</p>
                <img src="/Imagens/NovoPaciente_Opac.png" class="imgNovoPaci" alt="NovoPaciente">
            </a>
        </div>
    </div>

    <!-- Adicioando navbar -->

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
                        <a href="#" class="active">
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
                    <a href="#">
                        <i class='bx bx-cog icone'></i>
                        <span class="menu_texto">Configurações</span>
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
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="/Javascript/scriptAdm.js"></script>
    <script src="/Javascript/scriptAdmCadastro.js"></script>
    <!-- -------------------------------------- -->

</body>

</html>