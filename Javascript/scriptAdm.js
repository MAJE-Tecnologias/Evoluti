const body = document.querySelector("body")
const navbar = document.querySelector(".navigation")
menuLateral = body.querySelector(".menuLateral")
toggle = body.querySelector(".toggle")
mudarModo = body.querySelector(".toggle-switch")


const modal = document.querySelector("#modal");
const abrirModal = document.querySelector(".botao-abrir");
const fecharModal = document.querySelector(".botao-fechar");

const modal2 = document.querySelector("#modal2");
const abrirModal2 = document.querySelector(".botao-abrir2");
const fecharModal2 = document.querySelector(".botao-fechar2");


    toggle.addEventListener("click", () =>{
        menuLateral.classList.toggle("fecharMenu");
    });

    mudarModo.addEventListener("click", () =>{
        body.classList.toggle("escuro");
        navbar.classList.toggle("navigation");
        navbar.classList.toggle("escuroNav");
        mudarModo.classList.toggle("active");
        modal.classList.toggle("modalEscuro");
        modal2.classList.toggle("modalEscuro")

        if (mudarModo.classList.contains("active")) {
        
            mudarModo.innerHTML = `                        
            <i class='bx bx-moon icone'></i>
            <span class="menu_texto">Alterar Modo</span>`
    
        } else {
            mudarModo.innerHTML = `
            <i class='bx bx-sun icone'></i>
            <span class="menu_texto">Alterar Modo</span>`
        }
    })
    

    abrirModal.addEventListener('click', () => {
        modal.showModal();
    })

    fecharModal.addEventListener("click", () => {
        modal.close();
      });

      abrirModal2.addEventListener('click', () => {
        modal2.showModal();
    })

    fecharModal2.addEventListener("click", () => {
        modal2.close();
      });