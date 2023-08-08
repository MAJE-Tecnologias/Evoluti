const body = document.querySelector("body"),
menuLateral = body.querySelector(".menuLateral"),
toggle = body.querySelector(".toggle");

    toggle.addEventListener("click", () =>{
        menuLateral.classList.toggle("fecharMenu");
    });