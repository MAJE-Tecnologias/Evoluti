<?php

include '../../MySql/conecta.php';

session_start();

if ($_SESSION['nivel'] == 0) {
    $selectNome = $conn->query("SELECT NOME FROM admin WHERE ID_ADMIN = '" . $_SESSION['id'] . "'");
    $prof = "Administrador";
} elseif ($_SESSION['nivel'] == 1) {
    $selectNome = $conn->query("SELECT NOME FROM admin WHERE ID_FISIO = '" . $_SESSION['id'] . "'");
    $prof = "Fisioterapia";
} else {
    $selectNome = $conn->query("SELECT NOME FROM admin WHERE ID_ESTAGIARIO = '" . $_SESSION['id'] . "'");
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
            <div class="container_pesquisa">
                <div class="grid_pesquisa">

                    <div class="vazio2"></div>


                    <div class="vazio1"></div>


                    <div class="pesquisa linha"><input type="text" placeholder="Pesquise um usuário"><i
                            class='bx bxs-user-rectangle iconepesquisa'></i></div>

                </div>
            </div>

            <div class="container_form">
                <div class="container_card">
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
                    <a href="" class="info2">
                        <div>
                            <img src="https://picsum.photos/150" alt="">
                            <h4>Eduardo Pielich Sanchez</h4>

                        </div>
                    </a>
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
                    <a href="#">
                        <i class='bx bx-cog icone'></i>
                        <span class="menu_texto">Configurações</span>
                    </a>
                </li>

            </div>
        </div>

    </nav>

    <footer>

    </footer>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="/Javascript/scriptAdm.js"></script>
    <!-- -------------------------------------- -->

</body>

</html>