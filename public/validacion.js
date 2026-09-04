const formulario = document.getElementById("formulario");
const inputNombre = document.getElementById("nombre");
const mensajeSalida= document.getElementById("mensaje-salida");
formulario.addEventListener("submit",function(e){
     if(inputNombre.value.trim()===""){
        e.preventDefault();
        mensajeSalida.textContent ="Ingrese nombre de la materia";
        mensajeSalida.style.color = "red";
    }
});