<?php

include '../../MySql/conecta.php';

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
    <link rel="stylesheet" href="../../CSS/modalConfigStyle.css">
    <link rel="stylesheet" href="../../CSS/adminStyle.css">
    <link rel="stylesheet" href="../../CSS/navBarStyle.css">
    <link rel="stylesheet" href="../../CSS/modalConfigStyle.css">
    <link rel="stylesheet" href="../../CSS/fisioAtendimentoInterno.css">

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

    <div class="container_principal">
        <div class="container_view">
            <div class="container_form">
                <div class="wrapper_formulario">
                    <div class="formulario_esquerda">
                        <div class="formulario_paciente_container">
                            <img src="https://picsum.photos/150" alt="foto_perfil_paciente" class="foto_paciente">
                            <div class="formulario_paciente">
                                <h1>Nome</h1>
                                <?php echo "<h1>$rowPaciente[nome]</h1>" ?>
                                <span>Data de Nascimento: </span>
                                <?php echo "<span>$rowPaciente[datanasc]</span>" ?>
                                <span>CPF: </span>
                                <?php echo "<p>$rowPaciente[cpf]</p>" ?>
                            </div>
                        </div>
                        <div class="Dropdowns">
                            <details>
                                <summary>Receitas <i class='bx bx-chevron-down'> </i><i class='bx bxs-capsule right'></i></summary>
                                <p class="texto_summary">O paciente não possui nenhuma receita anexada!</p>
                            </details>
                            <details>
                                <summary>Pedido de exame <i class='bx bx-chevron-down'></i><i class="fa-solid fa-stethoscope right"></i></summary>
                                <p class="texto_summary">O paciente não possui nenhum pedido de exame anexado!</p>
                            </details>
                            <details>
                                <summary>Atestados <i class='bx bx-chevron-down'></i><i class="fa-regular fa-clipboard right"></i></summary>
                                <p class="texto_summary">O paciente não possui nenhum atestado anexado!</p>
                            </details>
                            <details>
                                <summary>Diagnosticos <i class='bx bx-chevron-down'></i></summary>
                                <p class="texto_summary">O paciente não possui nenhum diagnóstico anexado!</p>
                            </details>
                            <details>
                                <summary>Arquivos atrelados <i class='bx bx-chevron-down'></i><i class="fa-solid fa-paperclip right"></i></summary>
                                <p class="texto_summary">O paciente não possui nenhum arquivo adicional anexado!</p>
                            </details>
                        </div>
                        <div class="Avaliacoes">
                            <?php 
                            $selectAvaliacoes = $conn->query("SELECT * FROM atendimento WHERE fk_paciente = '".$id."' AND tipo_atendimento = 'Evolucao'");

                            
                            
                            ?>
                        </div>
                    </div>

                    <div class="container_formulario_meio">
                        <div class="formulario_meio"></div>
                    </div>

                    <div class="formulario_direita">
                        <div class="faixa_escolha">
                            <button onclick="ava()" id="ava" class="texto_escolha selecionado">Avaliação</button>
                            <button onclick="evo()" id="evo" class="texto_escolha">Evolução</button>
                        </div>
                        <div class="dia_avaliacao">
                            <p id="dia">
                                <?php
                                $data =  date("d-m-Y h:i");
                                echo date("d-m-Y h:i");
                                ?>
                            </p>
                        </div>

                        <form method="post">
                            <div>
                                <textarea name="textArea" id="textarea" cols="100" rows="30" class="textArea_Form"></textarea>
                            </div>
                            <div class="container_parte_inferior">
                                <div class="container_texto_anexos">
                                    <p class="texto_anexos">Selecione qual arquivo deseja anexar:</p>
                                </div>

                                <div class="container_anexoArquivos">
                                    <label for="anexarReceitas" class="anexoItem">

                                        <input type="file" id="anexarReceitas">
                                        <i class='bx bxs-capsule'></i>
                                        <p class="anexoItemText">Receitas</p>
                                        </input>

                                    </label>

                                    <label for="anexarExames" class="anexoItem">
                                        <input type="file" id="anexarExames">
                                        <i class="fa-solid fa-stethoscope"></i>
                                        <p class="anexoItemText">Exames</p>
                                        </input>
                                    </label>

                                    <label for="anexarAtestados" class="anexoItem">
                                        <input type="file" id="anexarAtestados">
                                        <i class="fa-regular fa-clipboard"></i>
                                        <p class="anexoItemText">Atestados</p>
                                        </input>
                                    </label>

                                    <label for="anexarOutros" class="anexoItem">
                                        <input type="file" id="anexarOutros">
                                        <i class="fa-solid fa-paperclip"></i>
                                        <p class="anexoItemText">Outros</p>
                                        </input>
                                    </label>

                                </div>
                                <div class="container_BarraPesquisa">
                                    <input type="text" placeholder="Diagnóstico" class="barraPesquisa"></input>
                                </div>

                                <div class="btn_salvar_container">
                                    <input type="submit" name="btn_salvar" id="btn_salvar"></input>
                                </div>
                                <input type="text" name="flag" id="flag" style="display: none;" value="1">
                        </form>
                    </div>
                </div>
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
                <ul class="menu_links"></ul>
                <li class="nav_link">
                    <a href="fisioView_Atendimento.php" class="active">
                        <i class='bx bxs-plus-circle icone'></i>
                        <span class="menu_texto">Atendimento</span>
                    </a>
                </li>

                <li class="nav_link">
                    <a href="fisioView_Pacientes.php">
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
    <script src="../../Javascript/interno.js"></script>
    <!-- -------------------------------------- -->

</body>

</html>

<?php

if (isset($_POST['btn_salvar'])) {
    $flag = $_POST['flag'];

    echo $flag;

    if ($flag == 1) {
        //Avaliação
        $textArea = $_POST['textArea'];
        $insertAvaliacao = $conn->query("INSERT INTO atendimento(tipo_atendimento, hd, anexo, dataatendimento, descricao, fk_paciente, fk_fisio, fk_estagiario) VALUES('Avaliacao', '', '', '" . $data . "', '" . $textArea . "','" . $id . "', '" . $_SESSION['id'] . "', 1)");
    } else {
        //Evolução
        $textArea = $_POST['textArea'];
        $insertEvolucao = $conn->query("INSERT INTO atendimento(tipo_atendimento, hd, anexo, dataatendimento, descricao, fk_paciente, fk_fisio, fk_estagiario) VALUES('Evolucao', '', '', '" . $data . "', '" . $textArea . "','" . $id . "', '" . $_SESSION['id'] . "', 1)");
    }
}


?>