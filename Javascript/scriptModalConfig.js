const modalConfig = document.querySelector("#modalConfig");
const abrirModalConfig = document.querySelector(".botao-abrirConfig");
const fecharModalConfig = document.querySelector(".botao-fecharConfig");

abrirModalConfig.addEventListener('click', () => {
    modalConfig.showModal();
})

fecharModalConfig.addEventListener("click", () => {
    modalConfig.close();
  });