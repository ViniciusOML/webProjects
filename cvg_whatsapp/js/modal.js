// Get the element with id="startSlide" and click on it - 
//assim esse sempre aparecerá primeiro
document.getElementById("startSlide").click();

// Get the modal
var modal = document.getElementById("primeiro");
var modal2 = document.getElementById("segundo");
var modal3 = document.getElementById("terceiro");
var modal4 = document.getElementById("quarto");
var scroll = document.getElementsByTagName("body");


// Get the button that opens the modal
var btn = document.getElementById("myBtn1");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var fecharPrimeiro = document.getElementsByClassName("closeP")[0];
var fecharSegundo = document.getElementsByClassName("closeS")[0];
var fecharTerceiro = document.getElementsByClassName("closeT")[0];
var fecharQuarto = document.getElementsByClassName("closeQ")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
    scroll.style.overflow = "hidden";


}

btn2.onclick = function() {
    modal2.style.display = "block";

}

btn3.onclick = function() {
    modal3.style.display = "block";
}

btn4.onclick = function() {
    modal4.style.display = "block";
}

// Escondendo barra de rolagem


// When the user clicks on <span> (x), close the modal
fecharPrimeiro.onclick = function() {
    modal.style.display = "none";
}

fecharSegundo.onclick = function() {
    modal2.style.display = "none";
}

fecharTerceiro.onclick = function() {
    modal3.style.display = "none";
}

fecharQuarto.onclick = function() {
    modal4.style.display = "none";
}