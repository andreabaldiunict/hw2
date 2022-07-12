<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='{{url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap")}}'>
    <link rel="stylesheet" href='{{url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}'>
    <link rel="stylesheet" href='{{url("css/StandardStyle.css")}}'>
    <link rel="stylesheet" href='{{url("css/Login.css")}}'>
    <script src='{{url("js/StandardJs.js")}}' defer> </script>
    <script src='{{url("js/Login.js")}}' defer></script>
</head>

<body>

    <section class="login_form">
        <div>
            <img src='{{url("images/logo.svg")}}' alt="">
        </div>
        <div id = 'credenziali'>
            <div id="formLogin">
                <form name="loginForm" method="POST" action="/login">
                @csrf

                    <div class="inputBox">
                        <input type='text' placeholder = 'Username' name='username' class="textBox" autocomplete="on">   
                    </div>

                    <div class="inputBox">
                        <input type='password' placeholder = 'Password' name='password' class="textBox" autocomplete="on">
                    </div>

                    <div class="submit">
                        <input type="submit" name='access' value="Accedi" id="Login" class="view">
                    </div>
                    
                    <div id="containerShortcut">
                        <p>Non sei Registrato? <a href='{{url("signup")}}'>Registrati </a>
                        </p>
                    </div>
                    <span class='hidden'>Inserisci tutti i campi</span>
                    @if(isset($error))
                         <p class='error'>{{ $error }}</p>
                    @endif
                </form>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer>
        <div class="footer">
            <div class="row">
                <a href='{{url("#https://it-it.facebook.com/groups/523172937735959/")}}'><i class="fa fa-facebook"></i></a>
                <a href='{{url("#https://www.instagram.com/ilpassaparoladeilibri/")}}'><i class="fa fa-instagram"></i></a>
                <a href='{{url("#https://www.youtube.com/channel/UCVIFYM2KzpTu_40p9lIZ_UQ")}}'><i class="fa fa-youtube"></i></a>
                <a href='{{url("#https://twitter.com/_un_libro_")}}'><i class="fa fa-twitter"></i></a>
            </div>
    
            <div class="row">ReadBook Copyright © 2022 ReadBook - All rights reserved || Designed By: Andrea Baldi 
            </div>
        </div>
    </footer>
</body>

</html>
