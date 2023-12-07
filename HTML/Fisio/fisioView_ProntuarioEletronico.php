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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../CSS/modalConfigStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/adminStyle.css">
    <link rel="stylesheet" href="../../CSS/navBarStyle.css">
    <link rel="stylesheet" href="../../CSS/fisioAtendimentoInterno.css">
    <link rel="stylesheet" href="../../CSS/fisio_ProntuarioEletronicoStyle.css">


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

    $data = array();
    $sql = "SELECT * FROM avaliacoes_dor WHERE fk_paciente = $id";
    $result = $conn->query($sql);
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
                                <?php
                                // Mostrar todas as receitas que estão no banco de dados
                                $selectReceitas = $conn->query("SELECT * FROM arquivos WHERE fk_paciente = '" . $id . "' AND tipo = 'Receitas'");

                                if (mysqli_num_rows($selectReceitas) <= 0) {
                                    printf("<p class='texto_summary'>O paciente não possui nenhuma receita anexada!</p>");
                                }

                                for ($setReceitas = array(); $rowReceitas = $selectReceitas->fetch_assoc(); $setReceitas[] = $rowReceitas['path']);

                                for ($i  = 0; $i < mysqli_num_rows($selectReceitas); $i++) {
                                    printf("<a href='%s' download>%s° Receita</a> <br>", $setReceitas[$i],  $i + 1);
                                }
                                ?>
                            </details>
                            <details>
                                <summary>Pedido de exame <i class='bx bx-chevron-down'></i><i class="fa-solid fa-stethoscope right"></i></summary>
                                <?php
                                // Mostrar todas os Exames que estão no banco de dados
                                $selectExame = $conn->query("SELECT * FROM arquivos WHERE fk_paciente = '" . $id . "' AND tipo = 'Exames'");

                                if (mysqli_num_rows($selectExame) <= 0) {
                                    printf("<p class='texto_summary'>O paciente não possui nenhum pedido de exame anexado!</p>");
                                }

                                for ($setExame = array(); $rowExame = $selectExame->fetch_assoc(); $setExame[] = $rowExame['path']);

                                for ($i  = 0; $i < mysqli_num_rows($selectExame); $i++) {
                                    printf("<a href='%s' download>%s° Exame</a> <br>", $setExame[$i],  $i + 1);
                                }
                                ?>

                            </details>
                            <details>
                                <summary>Atestados <i class='bx bx-chevron-down'></i><i class="fa-regular fa-clipboard right"></i></summary>
                                <?php
                                // Mostrar todas os Exames que estão no banco de dados
                                $selectAtestados = $conn->query("SELECT * FROM arquivos WHERE fk_paciente = '" . $id . "' AND tipo = 'Atestados'");

                                if (mysqli_num_rows($selectAtestados) <= 0) {
                                    printf("<p class='texto_summary'>O paciente não possui nenhum atestado anexado!</p>");
                                }

                                for ($setAtestados = array(); $rowAtestados = $selectAtestados->fetch_assoc(); $setAtestados[] = $rowAtestados['path']);

                                for ($i  = 0; $i < mysqli_num_rows($selectAtestados); $i++) {
                                    printf("<a href='%s' download>%s° Atestados</a> <br>", $setAtestados[$i],  $i + 1);
                                }
                                ?>
                            </details>
                            <details>
                                <summary>Diagnosticos <i class='bx bx-chevron-down'></i></summary>
                                <?php
                                // Mostrar todas os Exames que estão no banco de dados
                                $selectDiagnosticos = $conn->query("SELECT * FROM arquivos WHERE fk_paciente = '" . $id . "' AND tipo = 'Diagnosticos'");

                                if (mysqli_num_rows($selectDiagnosticos) <= 0) {
                                    printf("<p class='texto_summary'>O paciente não possui nenhum diagnóstico anexado!</p>");
                                }

                                for ($setDiagnosticos = array(); $rowDiagnosticos = $selectDiagnosticos->fetch_assoc(); $setDiagnosticos[] = $rowDiagnosticos['path']);

                                for ($i  = 0; $i < mysqli_num_rows($selectDiagnosticos); $i++) {
                                    printf("<h3>%s° Diagnostico</h3> <br> <p>%s</p>", $i + 1, $setDiagnosticos[$i]);
                                }
                                ?>

                            </details>
                            <details>
                                <summary>Arquivos atrelados <i class='bx bx-chevron-down'></i><i class="fa-solid fa-paperclip right"></i></summary>

                                <?php
                                // Mostrar todas os Exames que estão no banco de dados
                                $selectOutros = $conn->query("SELECT * FROM arquivos WHERE fk_paciente = '" . $id . "' AND tipo = 'Outros'");

                                if (mysqli_num_rows($selectOutros) <= 0) {
                                    printf("<p class='texto_summary'>O paciente não possui nenhum arquivo adicional anexado!</p>");
                                }

                                for ($setOutros = array(); $rowOutros = $selectOutros->fetch_assoc(); $setOutros[] = $rowOutros['path']);

                                for ($i  = 0; $i < mysqli_num_rows($selectOutros); $i++) {
                                    printf("<a href='%s' download>%s° Arquivo diverso</a> <br>", $setOutros[$i],  $i + 1);
                                }
                                ?>
                            </details>
                        </div>
                        <div class="Avaliacoes">
                            <?php
                            $selectAvaliacoes = $conn->query("SELECT * FROM atendimento WHERE fk_paciente = '" . $id . "'");

                            if (mysqli_num_rows($selectAvaliacoes) <= 0) {
                                printf("<p>O usuario não possui atendimentos</p>");
                            }

                            for ($setAtendimentos = array(); $rowAtendimentos = $selectAvaliacoes->fetch_assoc(); $setAtendimentos[] = $rowAtendimentos['id_atendimento'],  $setAtendimentos[] = $rowAtendimentos['dataatendimento']);

                            for ($i  = 0; $i < mysqli_num_rows($selectAvaliacoes); $i = $i + 2) {
                                printf("<button><a href='fisioView_AtendimentoInterno.php?idCliente=%s&idAtendimento=%s'>%s</a></button>", $id, $setAtendimentos[$i], $setAtendimentos[$i + 1]);
                            }
                            ?>
                        </div>
                    </div>

                    <div class="container_formulario_meio">
                        <div class="formulario_meio"></div>
                    </div>

                    <div class="formulario_direita">

                        <h1>Gráfico de Dor</h1>
                        <?php
                        if (mysqli_num_rows($result) == 0) {
                            printf("Nenhum ponto de dor");
                            $flag = 0;
                        } else {
                            $flag = 1;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $data[] = $row;
                                }
                            }
                        }
                        ?>
                        <canvas id="dorCanva" width="400" height="250"></canvas>
                        <?php
                        if ($flag == 1) {
                            printf("<script>
        const dadosPHP = %s;

        const datas = Array.from(new Set(dadosPHP.map(item => item.data_avaliacao)));
        const local = Array.from(new Set(dadosPHP.map(item => item.dor_local)));
        const intensidade = [];

        for (let i = 0; i < datas.length; i++) {
            intensidade[i] = new Array(local.length).fill(0);
        }

        dadosPHP.forEach(item => {
            const dataIndex = datas.indexOf(item.data_avaliacao);
            const localIndex = local.indexOf(item.dor_local);
            intensidade[dataIndex][localIndex] = item.dor_intensidade;
        });
        
        function generateColor() {
          const letters = '0123456789ABCDEF';
          let color = '#';
          
          for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
          }
          
          return color;
          
        }

        const datasets = local.map((local, index) => {
            var bgCor = ''
            for (let i = 0; i < local.lenght; i++){
                bgCor[i] = generateColor()
            }
            return {
                label: local,
                data: intensidade.map(intensity => intensity[index]),
                backgroundColor: bgCor,
            };
        });

        const ctx = document.getElementById('dorCanva').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: datas,
                datasets: datasets,
            },
            options: {
                responsive: false,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        beginAtZero: true,
                        max: 100,
                    },
                },
            },
        });
    </script>", json_encode($data));
                        }
                        ?>
                        <img src="../../Imagens/musculaturaFront.png" alt="pontosDor1" type="image/webp" style="width: 50%; padding-top: 20px"></img>
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
                    <a href="fisioView_Atendimento.php">
                        <i class='bx bx-clipboard icone'></i>
                        <span class="menu_texto">Atendimento</span>
                    </a>
                </li>

                <li class="nav_link">
                    <a href="fisioView_PacientesBusca.php" class="active">
                        <i class='bx bxs-group icone'></i>
                        <span class="menu_texto">Pacientes</span>
                    </a>
                </li>

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


    <script>
        var tempoAtual = new date();
        var dataAtual = tempoAtual.toLocaleString();


        document.getElementById("dia").innerHTML = dataAtual;
    </script>
    <!-- -------------------------------------- -->

</body>

</html>