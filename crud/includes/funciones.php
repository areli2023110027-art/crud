<?php

/*
* Funcion de Obtener Usuarios
*/
function obtener_usuarios() {
    require 'database.php';
    $sql = "SELECT * FROM usuarios;";
    return mysqli_query($db, $sql);
}

/*
* Funcion de Insertar Usuario
*/
function insertar_usuario($datos) {
    require 'database.php';

    $sql = "INSERT INTO usuarios(nombre, apellido, email, telefono, direccion, ciudad, pais, fecha_nacimiento, genero)
            VALUES
            ('$datos[nombre]',
             '$datos[apellido]',
             '$datos[email]',
             '$datos[telefono]',
             '$datos[direccion]',
             '$datos[ciudad]',
             '$datos[pais]',
             '$datos[fecha_nacimiento]',
             '$datos[genero]');";

    mysqli_query($db, $sql);
}

/*
* Funcion de Editar Usuario
*/
function editar_usuario($datos) {
    require 'database.php';

    $id = intval($datos['id']);

    $sql = "UPDATE usuarios SET
            nombre='$datos[nombre]',
            apellido='$datos[apellido]',
            email='$datos[email]',
            telefono='$datos[telefono]',
            direccion='$datos[direccion]',
            ciudad='$datos[ciudad]',
            pais='$datos[pais]',
            fecha_nacimiento='$datos[fecha_nacimiento]',
            genero='$datos[genero]'
            WHERE id=$id;";

    mysqli_query($db, $sql);
}

/*
* Funcion de Eliminar Usuario
*/
function eliminar_usuario($id) {
    require 'database.php';

    $id = intval($id);
    $sql = "DELETE FROM usuarios WHERE id = $id;";
    mysqli_query($db, $sql);
}