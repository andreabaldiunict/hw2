<!DOCTYPE html>
<html>

<head>
    <script>
        const csrf_token = '{{ csrf_token() }}';
    </script>
    <meta charset="UTF-8">
    <title>Preferiti</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='{{url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap")}}'>
    <link rel="stylesheet" href='{{url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")}}'>
    <link rel="stylesheet" href='{{url("css/Preferiti.css")}}'>
    <link rel="stylesheet" href='{{url("css/StandardStyle.css")}}'>
    <script src='{{url("js/StandardJs.js")}}' defer> </script>
    <script src='{{url("js/Preferiti.js")}}' defer></script>
</head>

<body>
    @csrf
        <!--MENÙ READBOOK-->
        <header>
        <nav>
            <div id="menu">
                <a href='{{url("consigliati")}}'>Consigliati</a>
                <a href='{{url("store")}}'>Store</a>
                <a id="menu_logo" href='{{url("home")}}'><img src='{{url("images/logo_min.svg")}}'></a>
                <a id="pref" href='{{url("preferiti")}}'>Preferiti<img src='{{url("images/cuore.svg")}}'></a>
                <a class="view" href='{{url("logout")}}'>Logout</a>
            </div>

            <div class="menu_mobile">
                <a class="menuItem" href='{{url("consigliati")}}'>Consigliati</a>
                <a class="menuItem" href='{{url("store")}}'>Store</a>
                <a class="menuItem" id="pref" href='{{url("preferiti")}}'>Preferiti<img src='{{url("images/cuore.svg")}}'></a>
                <a class="menuItem"  href='{{url("logout")}}'>Logout</a> 
            </div>
            <button class="hamburger">
                <div>
                    <a class="menuItem" id="menu_ext" href='{{url("home")}}'><img src='{{url("images/logo_ext.svg")}}'></a>
                </div>
                <div>
                    <i class="menuIcon material-icons" id="menu_logo" ><img src='{{url("images/menu_open.svg")}}'></i>
                    <i class="closeIcon material-icons" id="menu_logo" ><img src='{{url("images/menu_close.svg")}}'></i>
                </div> 
            </button>
        </nav>
    </header>

    <article>
        <section>
            <div id="banner">
                <h1>Ecco i tuoi preferiti!</h1>
            </div>
            <div id="book-list"></div>
        </section>

        <section>
            <div>
                <div id="responsive_box">
                    <div class="grid-container">
                        <div class="item1">
                            <div class="container">
                                <div class="box">
                                    <h1>Visita la nostra HomePage!</h1>
                                    <a class="view" href='{{url("home")}}'>Home</a>
                                </div>
                                <div class="box"><img src="../Images/logo.svg"></div>
                            </div>
                        </div>
                        <div class="item2">
                            <div class="container">
                                <div class="box">
                                    <h1>A portata di un click </h1>
                                </div>
                                <div class="box"><img src="../Images/response.svg"></div>
                            </div>
                        </div>
                        <div class="item3">
                            <div class="box">
                                <img src="../Images/cuore.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <!--FOOTER-->
    <footer>
        <div class="footer">
            <div class="row">
                <a><i class="fa fa-facebook"></i></a>
                <a><i class="fa fa-instagram"></i></a>
                <a><i class="fa fa-youtube"></i></a>
                <a><i class="fa fa-twitter"></i></a>
            </div>

            <div class="row">ReadBook Copyright © 2022 ReadBook - All rights reserved || Designed By: Andrea Baldi 
            </div>
        </div>
    </footer>
</body>
</html>