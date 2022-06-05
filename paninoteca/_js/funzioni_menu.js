const divp = document.getElementById("pagina_benvenuto");
const divpanini = document.getElementById("panini");
const divbevande = document.getElementById("bevande");
const divpiadine = document.getElementById("piadine");
const divdolci = document.getElementById("dolci");


function bevande() {
    divp.style.display = "none";
    divpanini.style.display = "none";
    divbevande.style.display = "block";
    divpiadine.style.display = "none";
    divdolci.style.display = "none";
}

function piadine() {
    divp.style.display = "none";
    divpanini.style.display = "none";
    divbevande.style.display = "none";
    divpiadine.style.display = "block";
    divdolci.style.display = "none";
}

function dolci() {
    divp.style.display = "none";
    divpanini.style.display = "none";
    divbevande.style.display = "none";
    divpiadine.style.display = "none";
    divdolci.style.display = "block";
}

function panini() {
    divp.style.display = "none";
    divpanini.style.display = "block";
    divbevande.style.display = "none";
    divpiadine.style.display = "none";
    divdolci.style.display = "none";
}