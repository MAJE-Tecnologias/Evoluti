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
    <link rel="stylesheet" href="../../CSS/adminStyle.css">
    <link rel="stylesheet" href="../../CSS/navBarStyle.css">

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

    <div class="container_principal">

    <dialog class="modal" id="modal">
            <div class="containerModal">
            <h2>Seja bem-vindo Fisioterapeuta!</h2>
            <div class="modal_texto">
            <p>Se você clicou nesse botão, é por que precisa de um tutorial sobre a plataforma. </p>
            <p>Selecione uma das opções abaixo para entender mais sobre a tela em questão!</p>
            </div>

            <div class="modal_conteudo">
                <div class="label_botao">
                    <label>Novo Atendimento</label>
                    <button type="button" class="botaoModalSelecao botao-abrir2"><i class='bx bxs-user-plus' ></i></button>
                </div>
                <div class="label_botao">
                    <label>Visualizar Prontuários</label>
                    <button type="button" class="botaoModalSelecao botao-abrir3"><i class='bx bx-search-alt-2' ></i></button>
                </div>
            </div>

            <div class="botaoFechar">
            <button class="botao-fechar">Fechar tutorial</button>
            </div>
            </div>
        </dialog>

        <div class="container_view">
            <img src="\Imagens\Logo_Sem_fundo.png" alt="LogoAnimado" class="LogoAnimado">
            <span class="TextoLogo">
                <h1>Seja bem-vindo(a) a sua tela inicial!</h1>
                <p>Sinta-se livre para abrir o menu lateral e escolher uma opção, ou clique no botão abaixo para ver os tutoriais das telas:</p>
            </span>

            <div class="divInterna_Botoes">
                <button type="button" class="estiloBotoes botao-abrir"><i class='bx bxs-help-circle icone'></i>TUTORIAIS</button>
            </div>
        </div>
    </div>

    <dialog class="modal2" id="modal2">
            <div class="containerModal2">
            <h2>Realizar um novo atendimento</h2>
            <div class="modal_texto">
            <p>Para registrar uma avaliação ou evolução, é necessário: </p>

            <div class="modal2_texto2">

            <p>1. Selecionar a aba atendimentos no menu lateral;</p>
            <p>2. Pesquisar paciente desejado;</p>
            <p>3. Selecionar tipo de atendimento: <b>avaliação</b> ou <b>evolução</b>;</p>
            <p>4. Anexar documentos, receitas, pedidos ou outros documentos necessários;</p>
            <p>5. Adicionar ou checar HD;</p>
            <p>6. Salvar atendimento.</p>

            <div class="barrinha"> </div>

            <img src="../../Imagens/Exemplo_prontuario.png" alt="Filtro" class="img_menu_superior">

            </div>

            </div>


            <div class="botaoFechar">
            <button class="botao-fechar2">Voltar</button>
            </div>
            </div>
        </dialog>

        <dialog class="modal3" id="modal3">
            <div class="containerModal3">
            <h2>Acesso ao prontuário eletrônico</h2>
            <div class="modal_texto">
            <p>Para acessar e visualizar o prontuário eletrônico de um paciente é necessário: </p>

            <div class="modal3_texto3">

            <p>1. Selecionar a aba pacientes no menu lateral;</p>
            <p>2. Buscar o paciente desejado;</p>
            <p>3. Clicar no paciente.</p>

            </div>

            </div>


            <div class="botaoFechar">
            <button class="botao-fechar3">Voltar</button>
            </div>
            </div>
        </dialog>

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
                            <i class='bx bx-clipboard icone'></i>
                            <span class="menu_texto">Atendimento</span>
                        </a>
                    </li>

                    <li class="nav_link">
                        <a href="fisioView_Pacientes.php">
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