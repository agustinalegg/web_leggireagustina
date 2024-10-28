<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <script>
    $(function() {
        var pull = $('#pull');
        menu = $('nav ul');
        menuHeight = menu.height();

        $(pull).on('click', function(e) {
            e.preventDefault();
            menu.slideToggle();
        });
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
    </script>
</head>
<body>
    <header>
        <nav class="indenav">
            <div class="logo">
                <a href="../index.php"><img src="../imagenes/logo.jpg" width="100px"></a>
            </div>
                    <ul>
                        <li><a href="../index.php">INICIO</a></li>
                        <li><a href="../sobre mi/index.php">CV</a></li>
                        <li><a href="../galería/index.php">HOBBIES</a></li>
                        <li><a href="../contacto/index.php">CONTACTO</a></li><br clear="all"/>
                    </ul>
                    <a id="pull" href="#"></a>
        </nav>
</header>

    <div class="form-container">
        <h2>Registro</h2>
        <form action="../contacto/index.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre">

            <label for="email">Correo electrónico:</label>
            <input type="email" name="email">

            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña">

            <label for="confirmar_contraseña">Confirmar Contraseña:</label>
            <input type="password" name="confirmar_contraseña">

            <input type="submit" name="register">
        <input type="reset">

            <?php
    include ("./procesar_registro.php");
    ?>
        </form>
    </div>
</body>
</html>

</body>
</html>