<?php
include 'MySQL/conecta.php';
?>
<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Imagens/Icon.png">


<link rel="stylesheet" href="CSS/modalConfigStyle.css">
    <link rel="stylesheet" href="/CSS/style.css">
    <!-- -------------------------------------- -->

    <!-- ÍCONES -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- -------------------------------------------------------------------------------------------------------- -->

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="/Javascript/script.js"></script>
    <!-- -------------------------------------- -->

    <title>Evoluti</title>
</head>

<body>
    <header>
        <nav class="navigation">
            <a href="#home" class="logo" id="logo" alt="Logotipo"><img src="/Imagens/Logo.jpeg"
                    class="logotipo"></img></a>
            <ul class="navDesktop">
                <li class="nav-item"><a href="#home">Início</a></li>
                <li class="nav-item"><a href="#servicos">Serviços</a></li>
                <li class="nav-item"><a href="#Login">Nosso propósito</a></li>
                <li class="nav-item"><a href="#Sobre">Quem somos?</a></li>

            </ul>
            <a href="HTML/login.php" class="nav-btn">Entrar</a>
            <div class="menuResponsivoIcone">
                <button onclick="mostrarMenu()"><i class="fa fa-bars"></i></button>
            </div>

            <div class="menuResponsivoItens">
                <ul class="navMobile">
                    <li class="nav-item2"><a href="#home">Início</a></li>
                    <li class="nav-item2"><a href="#servicos">Serviços</a></li>
                    <li class="nav-item2"><a href="#Login">Nosso propósito</a></li>
                    <li class="nav-item2"><a href="#Sobre">Quem somos?</a></li>
                </ul>
            </div>

        </nav>



    </header>
    <main>

        <!-- Home -->

        <section class="home" id="home">
            <div class="home_container1">
            <div class="home-text">
                <h4 class="text-h4">Seu software de Evolução Fisioterapêutica</h4>
                <h1 class="text-h1">Reinventando o cuidado, uma vida de cada vez.</h1>
                <p>Analise o progresso dos seus pacientes mergulhando em gráficos e dados que revelam insights
                    valiosos.
                </p>
                <a href="HTML/login.php" class="home-btn">Começar</a>
            </div>
            </div>
            <div class="teste">
            <img src="/Imagens/Família.png" alt="fisio" class="home-img">
            </div>
            <div class="home-img-container">

            </div>
        </section>

        <!-- Nossas Soluções -->

        <section class="servicos" id="servicos">
        <div class="servicos_wrapper">
            <h1 class="serv-titulo"><b>Serviços</b> que oferecem o melhor <b>ecossistema</b> para seu dia-a-dia</h1>
            <h2 class="barrinha" id="barrinha_serv"></h2>

        <div class="servicos_teste">
            <div class="servicos_conteudo">
                <div class="slides">
                    <div id="itens">
                    <img id="slide1" src="/Imagens/Serviços/Card_Img.png" alt="carousel1" class="img_slide first">
                    <img id="slide2" src="/Imagens/Serviços/Card_Img2.png" alt="carousel1" class="img_slide">
                    <img id="slide3" src="/Imagens/Serviços/Card_Img3.png" alt="carousel1" class="img_slide">
                    </div>
                </div>
                <div class="botoes_slides">

                    <div class="servicos_text">
                        <h1><input type="radio" class="botao_slide" id="radio1" name="grupoRadio1" value="1" checked="checked"></input></i> Prontuário eletrônico
                        </h1>
                        <p>Nosso software de evolução fisioterapêutica prioriza a organização e o acesso rápido às informações clínicas. 
                            Os prontuários eletrônicos fornecem uma solução digital e segura para armazenar e gerenciar todas as informações 
                            essenciais do paciente.</p>
                    </div>

                    <div class="servicos_text">
                        <h1><input type="radio" class="botao_slide" id="radio2" name="grupoRadio1" value="2"></input></i> Marcação de pontos de
                            dor
                        </h1>
                        <p>Nossa plataforma oferece uma ferramenta de marcação de pontos de dor, permitindo que os fisioterapeutas registrem 
                            com precisão a localização e a intensidade da dor dos pacientes.</p>
                    </div>

                    <div class="servicos_text">
                        <h1><input type="radio" class="botao_slide" id="radio3" name="grupoRadio1" value="3"></input></i> Documentação</h1>
                        <p>O software de evolução fisioterapêutica simplifica a documentação clínica. Os fisioterapeutas podem registrar o 
                            progresso do paciente, anotar observações importantes, detalhar os exercícios recomendados e acompanhar as respostas 
                            aos tratamentos.</p>
                    </div>

                    <div class="servicos_text">
                        <h1><input type="radio" class="botao_slide" id="radio4" name="grupoRadio1" value="4"></input></i> Relatórios</h1>
                        <p>Nossos relatórios são projetados para serem claros e informativos, contribuindo para uma melhor tomada de decisões clínicas 
                            e uma experiência mais envolvente para os pacientes.</p>
                    </div>

                </div>
            </div>


        </div>
        <div class="texto_mobile">
        <h1 class="h1_texto_mobile">Prontuário eletrônico</h1>
        <p class="p_texto_mobile">Nosso software de evolução fisioterapêutica prioriza a organização e o acesso rápido às informações clínicas. 
                            </p>
        </div>
        <div class="botoes_slides2">
                    <div class="servicos_text">
                        <h1><input type="radio" class="botao_slide" id="radio1" name="grupoRadio2" value="1"></input></i></h1>
                    </div>
                    <div class="servicos_text">
                        <h1><input type="radio" class="botao_slide" id="radio2" name="grupoRadio2" value="2"></input></i></h1>
                    </div>
                    <div class="servicos_text">
                        <h1><input type="radio" class="botao_slide" id="radio3" name="grupoRadio2" value="3"></input></i></h1>
                    </div>
                    <div class="servicos_text">
                        <h1><input type="radio" class="botao_slide" id="radio4" name="grupoRadio2" value="4"></input></i></h1>
                    </div>
            </div>
    </div>

        </section>

        <!-- Login -->

        <section class="Login" id="Login">
            <!-- <img src="/Imagens/Hexagonos/home-1.png" class="login-img"> -->
            <div class="login-text">

                <h1 class="login-titulo">Possibilitando você a guiar o paciente à plenitude de uma vida <span
                        style="color: #D7D588">sem limitações.</span></h1>
            </div>

        </section>

        <!-- Propósito -->

        <section class="proposito" id="proposito">
            <div class="proposito_container">

                <div class="bloco">
                    <div class="triangulo_branco"></div>

                    <div class="proposito_container_blocos">
                    <div class="bloco_principal_container_0">
                        <div class="bloco_principal_container">
                            <p class="proposito_titulo">Muito além da fisioterapia...</p>
                            <p class="proposito_titulo2" id="animacao">a autonomia</p>
                            <p class="bloco_principal_text">O que torna o Evoluti único é a fusão 
                                perfeita entre a experiência clínica e a tecnologia avançada. Com ele, 
                                oferecemos a você a capacidade de controlar a reabilitação de seus pacientes, 
                                tornando o processo mais prático e adaptado às suas necessidades individuais. 
                                Tudo isso, a qualquer momento e em qualquer lugar, proporcionando maior 
                                flexibilidade e conveniência.</p>
                            <img src="/Imagens/LogoBranco.png" alt="LogoBranco" class="LogoBranco_Proposito">
                        </div>
                    </div>


                        <div class="bloco_1_container">
                            <div class="bloco1" id="bloco_esquerda">
                                <div class="bloco_interno_container">
                                    <div class="bloco_interno" id="bloco_interno_1">
                                        <p class="bloco_interno_text">Prontuário eletrônico em acordo com as
                                            recomendações da
                                            legislação e resolução <b>414/2012 do COFFITO</b>.
                                        </p>
                                    </div>
                                    <div class="bloco_interno" id="bloco_interno_2">
                                        <p class="bloco_interno_text">Oferecemos um suporte técnico contínuo e
                                            eficiente
                                            disponível
                                            via telefone e WhatsApp, para garantir uma experiência tranquila e
                                            resolver
                                            rapidamente
                                            quaisquer dúvidas ou problemas.
                                        </p>
                                    </div>
                                    <div class="bloco_interno" id="bloco_interno_3">
                                        <p class="bloco_interno_text">Nosso software é desenvolvido com total
                                            compromisso em relação
                                            à proteção de dados. Seguimos rigorosamente as <b>normas da LGPD</b>
                                            para
                                            garantir a privacidade
                                            e a segurança das informações dos nossos usuários.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bloco1" id="bloco_direita">
                            <div class="bloco_interno_container">
                                    <img src="/Imagens/corredor.png" alt="corredor" class="img_corredor">
                                </div>
                            </div>

                        </div>

                            
                        </div>


                </div>

            </div>

        </section>
        <!-- <div><img src="/Imagens/Teste.png" class="separacao" style="width: 100%;"></img></div> -->

        <!-- Quem somos? -->

        <section class="QuemSomos" id="Sobre">

            <div class="center-screen">

                <div class="colunas_container_QS">

                        <div class="coluna_mobile">
                            <h1>MAJE Tecnologias</h1>
                            <p>Nosso compromisso com a excelência clínica é inabalável. Trabalhamos em estreita colaboração 
                                com fisioterapeutas e profissionais de saúde para garantir que nossos métodos e recursos sejam 
                                baseados nas melhores práticas da área. </p>
                        </div>

                    <div class="coluna1">
                        <img src="/Imagens/QuemSomos/Juliana.png" alt="backgroundCard2" class="card2">
                        <div class="textoCard2">
                            <h1>Juliana Araujo</h1>
                            <p>- Gerente de Projetos</p>
                            <p>- Product Owner</p>
                            <p>- Designer</p>
                            <a href="https://www.linkedin.com/in/carolina-pavan-570a0a215/"><i class="fa fa-linkedin"
                                    id="icones"></i></a>
                            <a href="https://github.com/RenatoAC2004"><i class="fa fa-github" id="icones"></i></a>
                            <a href="l1nk.dev/linkedinlucas"><i class="fa fa-instagram" id="icones"></i></a>
                        </div>
                    </div>
                    <div class="coluna2">
                        <img src="/Imagens/QuemSomos/Morgueto.png" alt="backgroundCard3" class="card3">
                        <div class="textoCard3">
                            <h1>Lucas Morgueto</h1>
                            <p>- Analista de Qualidade</p>
                            <a href="https://www.linkedin.com/in/carolina-pavan-570a0a215/"><i class="fa fa-linkedin"
                                    id="icones"></i></a>
                            <a href="https://github.com/RenatoAC2004"><i class="fa fa-github" id="icones"></i></a>
                            <a href="l1nk.dev/linkedinlucas"><i class="fa fa-instagram" id="icones"></i></a>
                        </div>
                    </div>

                    <div class="coluna3">
                        <div class="quemS-text ">
                            <div>
                            <h1>MAJE Tecnologias</h1>
                            <p>Nosso compromisso com a excelência clínica é inabalável. Trabalhamos em estreita colaboração 
                                com fisioterapeutas e profissionais de saúde para garantir que nossos métodos e recursos sejam 
                                baseados nas melhores práticas da área. </p>
                            </div>
                        </div>
                    </div>

                    <div class="coluna4">

                        <img src="/Imagens/QuemSomos/Renato.png" alt="backgroundCard4" class="card4">
                        <div class="textoCard4">
                            <h1>Renato Carvalho</h1>
                            <p>- Programador Front-End</p>
                            <p>- Designer</p>
                            <a href="https://www.linkedin.com/in/carolina-pavan-570a0a215/"><i class="fa fa-linkedin"
                                    id="icones"></i></a>
                            <a href="https://github.com/RenatoAC2004"><i class="fa fa-github" id="icones"></i></a>
                            <a href="l1nk.dev/linkedinlucas"><i class="fa fa-instagram" id="icones"></i></a>
                        </div>

                    </div>

                    <div class="coluna5">
                        <img src="/Imagens/QuemSomos/Pielich.png" alt="backgroundCard1" class="card1">
                        <div class="textoCard1">
                            <h1>Eduardo Pielich</h1>
                            <p>- Programador Back-End</p>
                            <a href="https://www.linkedin.com/in/carolina-pavan-570a0a215/"><i class="fa fa-linkedin"
                                    id="icones"></i></a>
                            <a href="https://github.com/RenatoAC2004"><i class="fa fa-github" id="icones"></i></a>
                            <a href="l1nk.dev/linkedinlucas"><i class="fa fa-instagram" id="icones"></i></a>
                        </div>
                    </div>

                    <div class="coluna6">
                        <img src="/Imagens/QuemSomos/Bruno.png" alt="backgroundCard4" class="card4">
                        <div class="textoCard4">
                            <h1>Bruno Carvalho</h1>
                            <p>- Especialista em Banco de Dados</p>
                            <a href="https://www.linkedin.com/in/carolina-pavan-570a0a215/"><i class="fa fa-linkedin"
                                    id="icones"></i></a>
                            <a href="https://github.com/RenatoAC2004"><i class="fa fa-github" id="icones"></i></a>
                            <a href="l1nk.dev/linkedinlucas"><i class="fa fa-instagram" id="icones"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <div class="rodape"></div>

    </main>
    <footer class="rodape2">
        <div class="rodape2_conteudo">
            <p class="logo_rodape" alt="Logotipo"><img src="/Imagens/Logo.jpeg" class="logotipo_rodape"></img></p>
            <div class="listas_rodape">
                <ul class="texto_rodape">
                    <h1>
                        <li>Explorar</li>
                    </h1>
                    <li><a href="#home">Início</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#Login">Nosso propósito</a></li>
                    <li><a href="#Sobre">Quem somos</a></li>
                </ul>
                <ul class="texto_rodape">
                    <h1>
                        <li>Termos</li>
                    </h1>
                    <li><a href="">Legais</a></li>
                    <li><a href="">Privacidade</a></li>
                </ul>
                <ul class="texto_rodape">
                    <h1>
                        <li>Contato</li>
                    </h1>
                    <li><a href=""><i class="fa-solid fa-envelope"></i> projeto.integrador6@gmail.com</a></li>
                    <li><a href=""><i class="fa-solid fa-phone"></i> (11) 95280-4623</a></li>
                </ul>
            </div>
        </div>

        <h2 class="barrinha_rodape"></h2>
        <p class="logo_rodape2" alt="Logotipo"><img src="/Imagens/Logo.jpeg" class="logotipo_rodape2"></img></p>
        <h2 class="barrinha_rodape2"></h2>

        <div class="redes_rodape">
            <h2 class="redes_text"><a href=""><i class="fa fa-twitter" id="iconesRodape"></i></a><a href=""><i
                        class="fa fa-linkedin" id="iconesRodape"></i></a><a href=""><i class="fa fa-instagram"
                        id="iconesRodape"></i></a></h2>
        </div>

        <div class="trademark_rodape">
            <p>© 2023 Evoluti. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>

</html>