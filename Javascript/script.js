function mostrarMenu(){
    let menuResponsivo = document.querySelector('.menuResponsivoItens');
    if (menuResponsivo.classList.contains('abrir')) {
        menuResponsivo.classList.remove('abrir'); 
        
    } else {
        menuResponsivo.classList.add('abrir');
    }
}

const body = document.querySelector("body")
const navbar = document.querySelector(".navigation")
menuLateral = body.querySelector(".menuLateral")
toggle = body.querySelector(".toggle")
mudarModo = body.querySelector(".toggle-switch")


    toggle.addEventListener("click", () =>{
        menuLateral.classList.toggle("fecharMenu");
    });

    mudarModo.addEventListener("click", () =>{
        body.classList.toggle("escuro");
        navbar.classList.toggle("navigation");
        navbar.classList.toggle("escuroNav");
        mudarModo.classList.toggle("active");

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




// Não sei fazer isso ainda vvvvv

// function botao_ativado(elemento){
//         $(elemento).removeClass('fa-regular fa-circle');
//         $(elemento).addClass('fa-solid fa-circle');
// }