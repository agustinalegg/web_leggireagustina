<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Mis Hobbies</title>
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

        <section class="gallery-container">
            <div class="gallery-grid">
                <div class="gallery-item"><img src="../imagenes/foto 1.jpg" alt="Image 1"></div>
                <div class="gallery-item"><img src="../imagenes/foto 2.jpg" alt="Image 2"></div>
                <div class="gallery-item"><img src="../imagenes/foto 3.jpg" alt="Image 3"></div>
                <div class="gallery-item"><img src="../imagenes/foto 4.jpg" alt="Image 4"></div>
                <div class="gallery-item"><img src="../imagenes/foto 5.jpg" alt="Image 5"></div>
                <div class="gallery-item"><img src="../imagenes/foto 6.jpg" alt="Image 6"></div>
            </div>
        </section>
        
</body>
</html>