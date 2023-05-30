function mostrarMenu(){
    let menuResponsivo = document.querySelector('.menuResponsivoItens');
    if (menuResponsivo.classList.contains('abrir')) {
        menuResponsivo.classList.remove('abrir'); 
        
    } else {
        menuResponsivo.classList.add('abrir');
    }
}