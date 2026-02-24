<?php
require __DIR__ . '/includes/funciones.php';

if($_POST){
    insertar_usuario($_POST);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Agregar Usuario</title>
<link rel="stylesheet" href="build/css/styles.css">
</head>
<body>

<nav>
<a href="index.php">Inicio</a>
</nav>

<div class="container">

<form method="POST" id="formUsuario">
    <input name="nombre" placeholder="Nombre" required>
    <input name="apellido" placeholder="Apellido" required>
    <input name="email" placeholder="Email" required>
    <input name="telefono" placeholder="Teléfono">
    <input name="direccion" placeholder="Dirección">
    <input name="ciudad" placeholder="Ciudad">
    <input name="pais" placeholder="País">
    <input type="date" name="fecha_nacimiento">
    
    <select name="genero">
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>

    <button type="submit">Guardar</button>
</form>

</div>

<script>
document.getElementById("formUsuario").addEventListener("submit", function(e){

    let nombre = document.querySelector("[name='nombre']").value.trim();
    let apellido = document.querySelector("[name='apellido']").value.trim();
    let email = document.querySelector("[name='email']").value.trim();

    if(nombre.length < 3){
        alert("El nombre debe tener al menos 3 caracteres");
        e.preventDefault();
        return;
    }

    if(apellido.length < 3){
        alert("El apellido debe tener al menos 3 caracteres");
        e.preventDefault();
        return;
    }

    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!emailRegex.test(email)){
        alert("Ingrese un email válido");
        e.preventDefault();
        return;
    }

});
</script>

</body>
</html>