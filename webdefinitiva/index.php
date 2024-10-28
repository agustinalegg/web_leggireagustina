<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webdefinitiva/css/style.css">
    <title>Login</title>
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
    <div class="info">
    <div class="login-container">
        <h2>Bienvenidos</h2>
        <form action="../webdefinitiva/sobre mi/index.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="nombre y apellido">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required placeholder="contraseña">
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>

    <title>Animación de Estrella</title>
  <style>
    canvas {
      background-color: hsl(214, 68%, 35%);
      display: block;
      margin: 0 auto;
      border: 1px solid #000000;
    }
  </style>
</head>
  <canvas id="canvas" width="450" height="200"></canvas>
  <script src="./js/estrella.js"></script>
</body>
</html>