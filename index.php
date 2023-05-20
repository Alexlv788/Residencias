
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/CSS/login.css">
        <title>Document</title>
    </head>
    <body>
        <div class="main">
            <div class="itlp-image">
                <img src="/SOURCES/IMG/itlp.png" alt="">
            </div>
            <form action="/PHP/login.php" method="post" >
                <div class="datos">
                    <label for="email">Correo</label>
                    <input type="email" name="correo" id="email" required>
                </div>
                <div class="datos" id="passContainer">
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" id="pass" required>
                    <label for="passControl" class="show-icon" id="hide"><img src="/SOURCES/icons/icons8-hide-16.png" alt=""></label>
                    <label for="passControl" class="hide-icon" id="show"><img src="/SOURCES/icons/icons8-eye-16.png" alt=""></label>
                    <input type="checkbox" name="" id="passControl">
                </div>

                <input type="submit" value="Iniciar Sesion">

                <!-- <div style = "background-color: #E76161;
                              width: 80%;
                              height: 4rem;
                              margin: 15% auto 0;
                              text-align: center;
                              border-radius: 8px;
                              padding: 2%;">
                    <p style="color: white; font-size: 1.3rem;">Asegurese de que el correo y la contraseña sean los correctos</p>
                </div> -->
            </form>
        </div>
        <script src="/JS/login.js"></script>
        <?php
            
        ?>
    </body>
</html>