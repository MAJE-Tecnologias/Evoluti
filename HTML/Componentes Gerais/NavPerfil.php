<nav class="navigation">
        <?php
        printf('    <div class="foto_perfil_usuario">
<img src="https://picsum.photos/150" alt="foto_perfil">
<div class="nome_perfil_usuario">
    <p id="Nome">%s</p>
    <p id="Funcao">%s</p>
</div>
</div>', $nomeArray['nome'], $prof)

        ?>

    </nav>


    <dialog class="modalConfig" id="modalConfig">
            <div class="containerModalConfig">
            <div class="titulo">
            <i class='bx bx-cog icone icone'></i>
            <h2>Configurações</h2>
            </div>
            
            <button class="btn_Logoff">Deslogar <i class='bx bx-log-out'></i></button>

            <div class="teste">

            <div class="botaoFecharConfig">
            <button class="botao-fecharConfig">Voltar</button>
            </div>
            </div>
            </div>



            </div>
        </dialog>