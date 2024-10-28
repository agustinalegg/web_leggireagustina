<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Bienvenidos a mi Página Web</title>
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
    </html>
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
                </head>
            <body class="indebody">
        <div class="container">
            <div class="profile-img">
                <img src="https://pbs.twimg.com/media/F4vD_YUWIAAG1cp.jpg:large" alt="Profile Picture">
            </div>
            <div class="info">
                <h1>Agustina Leggire </h1>
                <h2>Desarrolladora Web </h2>
                <p> Edad: 20 años</p>
                <p> Cumpleaños: 6 de julio</p>
                <p>Dirección: Calle Snoopy 342, Villa Lago</p>
            </div>
            <div class="about">
                <h2>Sobre mi</h2>
                <p>Apasionada diseñadora web y gráfica en su segundo año de carrera. Dispuesta a dar lo mejor y contribuir a la enseñanza de dichas cualidades relacionadas a la tecnología.</p>
            </div>
            <div class="education">
                <h2>Educación</h2>
                <p>Estudiante de la Universidad de Belgrano. </p>
            </div>
            <div class="experience">
                <h2>Experiencia</h2>
                <p>Desarrolladora Web en la compania YZ - 2018-2020</p>
                <p>Diseñadora Gráfica en la compania Pindy - 2021 - Presente</p>
                <p>Responsibilidades:</p>
                <ul>
                    <li>Desarrollo y Mantenimiento de las webs de la compania.</li>
                    <li>Trabajo en equipo con otros diseñadores gráficos para mantener y embellecer la apariencia de la marca</li>
     
                </ul>
            </div>
        </div>
    </html>
