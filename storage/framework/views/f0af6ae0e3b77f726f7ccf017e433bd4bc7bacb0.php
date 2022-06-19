<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("css/Home.css")); ?>'>
    <script src='<?php echo e(url("js/StandardJs.js")); ?>' defer> </script>
    <script src='<?php echo e(url("js/Home.js")); ?>' defer></script>
</head>

<body>
    
    <!--MENÙ READBOOK-->
    <header>
        <nav>
            <div id="menu">
                <a href='<?php echo e(url("consigliati")); ?>'>Consigliati</a>
                <a href='<?php echo e(url("store")); ?>'>Store</a>
                <a id="menu_logo" href='<?php echo e(url("home")); ?>'><img src='<?php echo e(url("images/logo_min.svg")); ?>'></a>
                <a id="pref" href='<?php echo e(url("preferiti")); ?>'>Preferiti<img src='<?php echo e(url("images/cuore.svg")); ?>'></a>
                <a class="view" href='<?php echo e(url("logout")); ?>'>Logout</a>
            </div>

            <div class="menu_mobile">
                <a class="menuItem" href='<?php echo e(url("consigliati")); ?>'>Consigliati</a>
                <a class="menuItem" href='<?php echo e(url("store")); ?>'>Store</a>
                <a class="menuItem" id="pref" href='<?php echo e(url("preferiti")); ?>'>Preferiti<img src='<?php echo e(url("images/cuore.svg")); ?>'></a>
                <a class="menuItem"  href='<?php echo e(url("logout")); ?>'>Logout</a> 
            </div>
            <button class="hamburger">
                <div>
                    <a class="menuItem" id="menu_ext" href='<?php echo e(url("home")); ?>'><img src='<?php echo e(url("images/logo_ext.svg")); ?>'></a>
                </div>
                <div>
                    <i class="menuIcon material-icons" id="menu_logo" ><img src='<?php echo e(url("images/menu_open.svg")); ?>'></i>
                    <i class="closeIcon material-icons" id="menu_logo" ><img src='<?php echo e(url("images/menu_close.svg")); ?>'></i>
                </div> 
            </button>
        </nav>
    </header>

    <!--SECTION N. 1° FORMATA DA UNO SLIDESHOW (3 PAGINE SCORREVOLI)-->
    <section>

        <!--PAGINA N. 1°-->
        <div class="slide" id="s1">
            <div class="container">
                <div class="box">
                    <h1>Scopri la collezione di libri piu diffusa al mondo.</h1>
                    <a class="view" href='<?php echo e(url("store")); ?>'>Store</a>
                </div>
                <div class="box">
                    <img src='<?php echo e(url("images/logo.svg")); ?>'>
                </div>
            </div>
        </div>

        <!--PAGINA N. 2°-->
        <div class="slide" id="s2">
            <div class="container">
                <div class="box">
                    <h1>20%</h1>
                </div>
                <div class="box">
                    <h2>Iscriviti e ottieni uno sconto del 20% sul tuo primo ordine!</h2>
                    <a class="view" href='<?php echo e(url("store")); ?>'>Store</a>
                </div>
            </div>
        </div>

        <!--PAGINA N. 3°-->
        <div class="slide" id="s3">
            <div class="container">
                <div class="box">
                    <img src='<?php echo e(url("images/slide_3.svg")); ?>'>
                </div>
                <div class="box">
                    <h1>Lasciati trasportare dalla lettura e scopri nuovi mondi.</h1>
                    <a class="view" href='<?php echo e(url("store")); ?>'>Store</a>
                </div>
            </div>
        </div>

        <!--FRECCE AVANTI E INDIETRO-->
        <a id="prev">&#10094;</a>
        <a id="next">&#10095;</a>
        <!--INDICATORE DELLA SLIDE CORRENTE-->
        <div class="cube-container">
            <span data-index="0" class="cube"></span>
            <span data-index="1" class="cube"></span>
            <span data-index="2" class="cube"></span>
            <div class="progress_bar"></div>
        </div>
    </section>

    <!--SECTION N. 2° DESIGN AUTO-RESPONSIVE (PAROLE IN SCORRIMENTO)-->
    <section>
        <div class="img_libri"></div>
        <div class="left_scroll">
            <span class="pantone_1">Historical</span> Autors <span class="pantone_1">Inspiration</span> Horror <span class="pantone_1">Words</span> Historical <span class="pantone_1">Autors</span> Inspiration Horror Words
        </div>
        <div class="right_scroll">
            Reading <span class="pantone_2">Fantasy</span> Writer <span class="pantone_1">Paper</span> Poet <span class="pantone_2">Storyteller</span> Reading Fantasy <span class="pantone_2">Writer</span> Paper Poet Storyteller
        </div>
        <div class="img_libri"></div>
    </section>

    <!--SECTION N. 3° DESIGN CITAZIONE ISPIRAZIONE-->
    <section>
        <div class="container">
            <div class="box_left">
                <div id="box_11"></div>
                <div id="box_12"></div>
                <div id="box_21"></div>
                <div id="box_22"></div>
            </div>
            <div class="box_right">
                <h1>Lasciati ispirare da una citazione.</h1>
                <button class="view" id="search_1">Vai</button>
                <form class="apy_quotable">
                    <div class="quotable_container">
                        <img src='<?php echo e(url("images/virgolette_sin.png")); ?>' class="img_apy_quotable">
                        <div id="container_1"></div>
                        <img src='<?php echo e(url("images/virgolette_des.png")); ?>' class="img_apy_quotable">
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

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/home.blade.php ENDPATH**/ ?>