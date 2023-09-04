const botaoFisio = document.getElementById('botaoFisio');
const divPrincipal = document.getElementById('containerPrincipal');

function buttonAdministrador(){


    // Mudança de 
    divPrincipal.innerHTML = ` 
    
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
                        <input type="email" name="email" id="cadastroEmail" placeholder="Digite o e-mail">
                    </div>
                    <div class="campos">
                        <label class="labelForms" for="cadastroNomeUser">Nome de usuário</label>
                        <input type="text" name="nomeUser" id="cadastroNomeUser" placeholder="Crie um nome de usuário">
                    </div>

                </div>
                <div class="linha2">
                    <div class="campos">
                        <label class="labelForms" for="cadastroTelefoneAdmin">Telefone</label>
                        <input type="text" name="telefone" id="cadastroTelefoneAdmin" placeholder="(00) 0000-0000">
                    </div>
                    <div class="campos">
                        <label class="labelForms" for="cadastroSenhaAdmin">Senha</label>
                        <input type="password" name="senha" id="cadastroSenhaAdmin" placeholder="Crie uma senha">
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
                        <input type="text" name="rua" id="cadastroRua" placeholder="Digite a rua">
                    </div>
                    <div class="campos">
                        <label class="labelForms" for="cadastroCEP">CEP</label>
                        <input type="text" name="cep" id="cadastroCEP" placeholder="Digite o CEP">
                    </div>

                </div>
                <div class="linha2_semMargem">
                    <div class="campos">
                        <label class="labelForms" for="cadastroNum">Número</label>
                        <input type="number" name="numero" id="cadastroNum" placeholder="Digite o número da residência">
                    </div>
                    <div class="campos">
                        <label class="labelForms" for="cadastroComplemento">Complemento</label>
                        <input type="text" name="complemento" id="cadastroComplemento" placeholder="Digite o complemento">
                    </div>
                    <div class="campos">
                        <label class="labelForms" for="cadastroBairro">Bairro</label>
                        <input type="text" name="bairro" id="cadastroBairro" placeholder="Digite o bairro">
                    </div>
                </div>
                <div class="linha3">
                    <div class="campos">
                        <label class="labelForms" for="cadastroCidade">Cidade</label>
                        <input type="text" name="cidade" id="cadastroCidade" placeholder="Digite a cidade">
                    </div>
                </div>
                <input type="number" name="flag" value="0" style="display: none;">
                <div class="container_btn_cadastro">
                    <div class="linha4">
                        <input type="submit" class="btn_cadastrar" value="Cadastrar"></input>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
    `;

}

function buttonFisioterapeuta(){
    
    divPrincipal.innerHTML = ` <div class="container_view">

    <div class="container_conteudo">
        <div class="grid_escolherForm">
            <a id="botaoAdm" href="#" onclick="buttonAdministrador();return false;">
                <div class="grid1 tipos">Administrador</div>
            </a>
            <a  id="botaoFisio" href="#" onclick="buttonFisioterapeuta();return false;">
                <div class="grid2 tipos ativo">Fisioterapeuta</div>
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

            <div class="titulo1"><label class="labelTitulos">Registro profissional</label></div>
            <div class="linhas">
                <div class="linha2">
                    <div class="campos">
                        <label class="labelForms" for="cadastroCrefito_Fisio">CREFITO</label>
                        <input type="text" name="crefito" id="cadastroCrefito_Fisio" placeholder="12345678">
                    </div>
                    <div class="campos">
                    <label class="labelForms" for="dtEmissao_Fisio">Data de emissão</label>
                    <input type="date" name="dtEmissao" id="dtEmissao_Fisio">
                </div>
                    <div class="campos">
                        <label class="labelForms" style="display: flex;" for="cadastroEspecialidades_Fisio">Especialidades <i class='bx bx-plus' style="font-size: 20px"></i></label>
                        <input type="text" name="especialidades" id="cadastroEspecialidades_Fisio" placeholder="Pesquise sua especialidade">
                        
                        
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
                <input type="number" name="flag" value="1" style="display: none;">
                <div class="container_btn_cadastro">
                    <div class="linha4">
                        <input type="submit" class="btn_cadastrar" value="Cadastrar"></input>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>`;

}

function buttonEstagiario(){
    
    divPrincipal.innerHTML = ` 
    <div class="container_view">

    <div class="container_conteudo">
        <div class="grid_escolherForm">
            <a id="botaoAdm" href="#" onclick="buttonAdministrador();return false;">
                <div class="grid1 tipos">Administrador</div>
            </a>
            <a  id="botaoFisio" href="#" onclick="buttonFisioterapeuta();return false;">
                <div class="grid2 tipos">Fisioterapeuta</div>
            </a>
            <a id="botaoEstag" href="#" onclick="buttonEstagiario();return false;">
                <div class="grid3 tipos ativo">Estagiário</div>
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

            <div class="titulo1"><label class="labelTitulos">Registro profissional</label></div>
            <div class="linhas">
                <div class="linha2">
                    <div class="campos">
                        <label class="labelForms" for="cadastroInstituicao_Estag">Instituição</label>
                        <input type="text" name="instituicao" id="cadastroInstituicao_Estag" placeholder="12345678">
                    </div>
                    <div class="campos">
                    <label class="labelForms" for="dtInicioContrato_Estag">Início do contrato</label>
                    <input type="date" name="dtInicioContrato" id="dtInicioContrato_Estag">
                </div>
                    <div class="campos">
                    <label class="labelForms" for="dtFimContrato_Estag">Fim do contrato</label>
                    <input type="date" name="dtFimContrato" id="dtFimContrato_Estag">
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
                <input type="number" name="flag" value="2" style="display: none;">
                <div class="container_btn_cadastro">
                    <div class="linha4">
                        <input type="submit" class="btn_cadastrar" value="Cadastrar"></input>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>`;

}