<?php
include ("./validar_registro.php");
if (isset($_POST['register'])){
   {
       $name = trim($_POST ["nombre"]);
       $email = trim($_POST ["email"]);
       $contraseña = trim($_POST ["contraseña"]);
       $confirmar_contraseña = trim($_POST ["confirmar_contraseña"]);
$datab = "webdefinitiva";

$consulta= "INSERT INTO formulario(nombre,email,contraseña,confirmar_contraseña) VALUES ('$name','$email','$contraseña','$confirmar_contraseña')";
$resultado = mysqli_query($conex, $consulta);
if ($resultado) {

    ?>
    <h3 class="ok">¡Te registraste exitosamente!</h3>
    <?php
}else{
    ?>
    <h3 class="bad">No fue posible registrarte</h3>

    <?php
}
 } 
}
