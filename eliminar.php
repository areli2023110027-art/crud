<?php
require __DIR__ . '/includes/funciones.php';

if($_POST){
    eliminar_usuario($_POST['id']);
    header("Location: index.php");
    exit;
}
?>