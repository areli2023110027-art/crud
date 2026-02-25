<?php
require __DIR__ . '/includes/funciones.php';

if(isset($_GET['id'])){
    $usuario = obtener_usuario($_GET['id']);
}

if($_POST){
    editar_usuario($_POST);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Editar Usuario</title>
<link rel="stylesheet" href="build/css/styles.css">
</head>
<body>

<nav>
<a href="index.php">Inicio</a>
</nav>

<div class="container">

<?php if(isset($usuario)): ?>
<form method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

    <input name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
    <input name="apellido" value="<?php echo $usuario['apellido']; ?>" required>
    <input name="email" value="<?php echo $usuario['email']; ?>" required>
    <input name="telefono" value="<?php echo $usuario['telefono']; ?>">
    <input name="direccion" value="<?php echo $usuario['direccion']; ?>">
    <input name="ciudad" value="<?php echo $usuario['ciudad']; ?>">
    <input name="pais" value="<?php echo $usuario['pais']; ?>">
    <input type="date" name="fecha_nacimiento" value="<?php echo $usuario['fecha_nacimiento']; ?>">

    <select name="genero">
        <option value="Masculino" <?php if($usuario['genero']=="Masculino") echo "selected"; ?>>Masculino</option>
        <option value="Femenino" <?php if($usuario['genero']=="Femenino") echo "selected"; ?>>Femenino</option>
    </select>

    <button type="submit">Actualizar</button>
</form>
<?php endif; ?>

</div>

</body>
</html>