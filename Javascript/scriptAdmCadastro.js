const botaoFisio = document.getElementById('botaoFisio');
const divAdicional = document.getElementById('adicional');
const divBotaoAdm = document.getElementById('botaoAtivoAdm');
const divBotaoFisio = document.getElementById('botaoAtivoFisio');
const divBotaoEstagi = document.getElementById('botaoAtivoEstagi');
const flag = document.getElementById('div_flag');

function buttonAdministrador() {


    divBotaoAdm.classList.add('ativo');
    divBotaoFisio.classList.remove('ativo');
    divBotaoEstagi.classList.remove('ativo');

    // Mudança de 
    divAdicional.innerHTML = "";

    flag.innerHTML=`<input type="number" name="flag" value="0" id="flag" style="display: none;">`;

}

function buttonFisioterapeuta() {

    divBotaoAdm.classList.remove('ativo');
    divBotaoFisio.classList.add('ativo');
    divBotaoEstagi.classList.remove('ativo');

    divAdicional.innerHTML = ` 
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
            </div>`;
            flag.innerHTML=`<input type="number" name="flag" value="1" id="flag" style="display: none;">`;

}

function buttonEstagiario() {

    divBotaoAdm.classList.remove('ativo');
    divBotaoFisio.classList.remove('ativo');
    divBotaoEstagi.classList.add('ativo');

    divAdicional.innerHTML = ` 
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
            </div>`;

            flag.innerHTML=`<input type="number" name="flag" value="2" id="flag" style="display: none;">`;

}