document.addEventListener("DOMContentLoaded", function(){

    const formulario = document.getElementById("formUsuario");

    if(formulario){
        formulario.addEventListener("submit", function(e){

            let nombre = document.getElementById("nombre").value.trim();
            let apellido = document.getElementById("apellido").value.trim();
            let email = document.getElementById("email").value.trim();
            let genero = document.getElementById("genero").value;

            let expresion = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

            if(nombre === "" || apellido === "" || email === ""){
                alert("Nombre, Apellido y Email son obligatorios");
                e.preventDefault();
                return;
            }

            if(!email.match(expresion)){
                alert("Correo electrónico no válido");
                e.preventDefault();
                return;
            }

            if(genero === ""){
                alert("Seleccione un género");
                e.preventDefault();
                return;
            }

        });
    }

});