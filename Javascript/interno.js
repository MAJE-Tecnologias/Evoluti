function ava(){
    const Ava = document.getElementById('ava');
    const Evo = document.getElementById('evo');
    const flag = document.getElementById('flag');

    Ava.classList.add('selecionado')
    Evo.classList.remove('selecionado')

    flag.value = 0;
}

function evo(){
    const Ava = document.getElementById('ava');
    const Evo = document.getElementById('evo');
    const flag = document.getElementById('flag');

    Ava.classList.remove('selecionado')
    Evo.classList.add('selecionado')

    flag.value = 1;
}