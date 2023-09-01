<?php
session_start();
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
    <link rel="stylesheet" href="/CSS/adminCadastroStyle.css">
    <!-- -------------------------------------- -->


    <!-- ÍCONES -->


    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- -------------------------------------------------------------------------------------------------------- -->

    <title>Evoluti</title>
</head>

<body>

    <nav class="navigation" style="position: fixed; z-index: 1;">


    </nav>

    <div id="containerPrincipal" class="container_cadastroUser">
        <div class="container_view">

            <div class="container_conteudo">
                <div class="grid_escolherForm">
                    <a id="botaoAdm" href="#" onclick="buttonAdministrador();return false;">
                        <div class="grid1 tipos ativo">Administrador</div>
                    </a>
                    <a  id="botaoFisio" href="#" onclick="buttonFisioterapeuta();return false;">
                        <div class="grid2 tipos">Fisioterapeuta</div>
                    </a>
                    <a id="botaoEstag" href="#" onclick="buttonEstagiario();return false;">
                        <div class="grid3 tipos">Estagiário</div>
                    </a>
                </div>
            </div>

            <div class="container_form">

                <div class="container_foto_forms">
                    <div class="foto_forms"></div>
                </div>
                <form action="" method="POST">
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
                        <div class="linha1">

                            <div class="campos">
                                <label class="labelForms" for="cadastroEmail">E-mail</label>
                                <input type="email" id="cadastroEmail" placeholder="Digite o e-mail">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroNomeUser">Nome de usuário</label>
                                <input type="text" id="cadastroNomeUser" placeholder="Crie um nome de usuário">
                            </div>

                        </div>
                        <div class="linha2">
                            <div class="campos">
                                <label class="labelForms" for="cadastroCPF">Telefone</label>
                                <input type="text" id="cadastroCPF" placeholder="(00) 0000-0000">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroRG">Senha</label>
                                <input type="password" id="cadastroRG" placeholder="Crie uma senha">
                            </div>
                        </div>

                        <div class="barrinha">

                        </div>
                    </div>

                    <div class="titulo1"><label class="labelTitulos">Endereço</label></div>
                    <div class="linhas">
                        <div class="linha1">

                            <div class="campos">
                                <label class="labelForms" for="cadastroRua">Rua</label>
                                <input type="text" id="cadastroRua" placeholder="Digite a rua">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroCEP">CEP</label>
                                <input type="text" id="cadastroCEP" placeholder="Digite o CEP">
                            </div>

                        </div>
                        <div class="linha2_semMargem">
                            <div class="campos">
                                <label class="labelForms" for="cadastroNum">Número</label>
                                <input type="number" id="cadastroNum" placeholder="Digite o número da residência">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroComplemento">Complemento</label>
                                <input type="text" id="cadastroComplemento" placeholder="Digite o complemento">
                            </div>
                            <div class="campos">
                                <label class="labelForms" for="cadastroBairro">Bairro</label>
                                <input type="text" id="cadastroBairro" placeholder="Digite o bairro">
                            </div>
                        </div>
                        <div class="linha3">
                            <div class="campos">
                                <label class="labelForms" for="cadastroCidade">Cidade</label>
                                <input type="text" id="cadastroCidade" placeholder="Digite a cidade">
                            </div>
                        </div>
                        <div class="container_btn_cadastro">
                            <div class="linha4">
                                <input type="submit" class="btn_cadastrar" value="Cadastrar"></input>
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
                        <a href="#" class="active">
                            <i class='bx bxs-plus-circle icone'></i>
                            <span class="menu_texto">Cadastros</span>
                        </a>
                    </li>

                    <li class="nav_link">
                        <a href="adminView_Pacientes.html">
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
                        <a href="adminView_Usuarios.html">
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
    <!-- <script src="/Javascript/scriptAdmCadastro.js"></script> -->
    <!-- -------------------------------------- -->

</body>

</html>

<?php
include '../../MySql/conecta.php';

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$genero = $_POST['genero'];

$rua = $_POST['rua'];
$numer = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];




?>