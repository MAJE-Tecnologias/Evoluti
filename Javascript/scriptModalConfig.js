const modo = document.querySelector(".toggle-switch")
const modalConfig = document.querySelector("#modalConfig");
const abrirModalConfig = document.querySelector(".botao-abrirConfig");
const fecharModalConfig = document.querySelector(".botao-fecharConfig");

abrirModalConfig.addEventListener('click', () => {
    modalConfig.showModal();
})

fecharModalConfig.addEventListener("click", () => {
    modalConfig.close();
  });

modo.addEventListener("click", () =>{
    modalConfig.classList.toggle("modalEscuro");

    
})