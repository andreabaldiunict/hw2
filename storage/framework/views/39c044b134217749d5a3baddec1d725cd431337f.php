<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("css/StandardStyle.css")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("css/Login.css")); ?>'>
    <script src='<?php echo e(url("js/StandardJs.js")); ?>' defer> </script>
    <script src='<?php echo e(url("js/Login.js")); ?>' defer></script>
</head>

<body>

    <section class="login_form">
        <div>
            <img src='<?php echo e(url("images/logo.svg")); ?>' alt="">
        </div>
        <div id = 'credenziali'>
            <div id="formLogin">
                <form name="loginForm" method="POST" action="/login">
                <?php echo csrf_field(); ?>
                    <div class="inputBox">
                        <input type='text' placeholder = 'Username' name='username' class="textBox" autocomplete="on">
                        <p id='segnalazione' class='erroreU hidden'>"Inserisci l'username"</p>
                    </div>

                    <div class="inputBox">
                        <input type='password' placeholder = 'Passowrd' name='password' class="textBox" autocomplete="on">
                        <p id='segnpass' class='erroreP hidden'>Inserisci la password</p>
                    </div>

                    <div class="submit">
                        <input type="submit" name='access' value="Accedi" id="Login" class="view">
                    </div>
                    
                    <div id="containerShortcut">
                        <p>Non sei Registrato? <a href='<?php echo e(url("signup")); ?>'>Registrati </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer>
        <div class="footer">
            <div class="row">
                <a href='<?php echo e(url("#https://it-it.facebook.com/groups/523172937735959/")); ?>'><i class="fa fa-facebook"></i></a>
                <a href='<?php echo e(url("#https://www.instagram.com/ilpassaparoladeilibri/")); ?>'><i class="fa fa-instagram"></i></a>
                <a href='<?php echo e(url("#https://www.youtube.com/channel/UCVIFYM2KzpTu_40p9lIZ_UQ")); ?>'><i class="fa fa-youtube"></i></a>
                <a href='<?php echo e(url("#https://twitter.com/_un_libro_")); ?>'><i class="fa fa-twitter"></i></a>
            </div>
    
            <div class="row">ReadBook Copyright © 2022 ReadBook - All rights reserved || Designed By: Andrea Baldi 
            </div>
        </div>
    </footer>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/login.blade.php ENDPATH**/ ?>