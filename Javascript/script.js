function mostrarMenu(){
    let menuResponsivo = document.querySelector('.menuResponsivoItens');
    if (menuResponsivo.classList.contains('abrir')) {
        menuResponsivo.classList.remove('abrir'); 
        
    } else {
        menuResponsivo.classList.add('abrir');
    }
}


// Não sei fazer isso ainda vvvvv

// function botao_ativado(elemento){
//         $(elemento).removeClass('fa-regular fa-circle');
//         $(elemento).addClass('fa-solid fa-circle');
// }