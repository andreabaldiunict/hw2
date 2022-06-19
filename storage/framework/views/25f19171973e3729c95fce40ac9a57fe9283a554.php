<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Registrazione</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("css/StandardStyle.css")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("css/Signup.css")); ?>'>
    <script src='<?php echo e(url("js/StandardJs.js")); ?>' defer> </script>
    <script src='<?php echo e(url("js/Signup.js")); ?>' defer></script>
</head>

<body>

    <section class="signup_form">
        <div>
            <img src='<?php echo e(url("images/logo.svg")); ?>' alt="">
        </div>
        <div id='credenziali'>
            <div id="formLogin">
                <form name="Form" method="POST" action="/register">
                <?php echo csrf_field(); ?>

                    <div class="username" id="inputBox">
                        <div><input type='text' name='username' placeholder='username' class="textBox" autocomplete="on"></div>
                        <span>Username non disponibile.</span>
                    </div>

                    <div class="nome" id="inputBox">
                        <div><input type='text' name='nome' placeholder='nome' class="textBox" autocomplete="on"></div>
                        <span>Nome non valido.</span>
                    </div>

                    <div class="cognome" id="inputBox">
                        <div><input type='text' name='cognome' placeholder='cognome' class="textBox" autocomplete="on"></div>
                        <span>Cognome non valido.</span>
                    </div>

                    <div class="email" id="inputBox">
                        <div><input type='text' name='email' placeholder='email' class="textBox" autocomplete="on"></div>
                        <span>E-mail non valida.</span>
                    </div>

                    <div class="password" id="inputBox">
                        <div><input type='password' name='password' placeholder='password' class="textBox" autocomplete="on"></div>
                        <span>Inserisci una password di almeno 8 caratteri.</span>
                    </div>

                    <div class="conferma_password" id="inputBox">
                        <div><input type='password' name='conferma_password' placeholder='conferma password' class="textBox" autocomplete="on"></div>
                        <span>Le password non coincidono.</span>
                    </div>

                    <div class="allow" id="inputBox">
                        <input type='checkbox' id='verifica' name='allow' value="1">
                        <label for='allow'>Acconsento al trattamento dei dati personali.</label>
                    </div>

                    <div class="submit" id="inputBox">
                        <input type='submit' id="submit" value="Registrati" class="view">
                    </div>
                </form>

                <div id="containerShortcut">
                    <p>Sei già registrato? Effetua la <a href= "login">Login</a>
                    </p>
                </div>

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
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw3/resources/views/register.blade.php ENDPATH**/ ?>