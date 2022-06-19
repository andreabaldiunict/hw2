<!DOCTYPE html>
<html>

<head>
    <script>
        const csrf_token = '<?php echo e(csrf_token()); ?>';
    </script>
    <meta charset="UTF-8">
    <title>Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='<?php echo e(url("https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("css/Store.css")); ?>'>
    <link rel="stylesheet" href='<?php echo e(url("css/StandardStyle.css")); ?>'>
    <script src='<?php echo e(url("js/StandardJs.js")); ?>' defer> </script>
    <script src='<?php echo e(url("js/Store.js")); ?>' defer></script>
</head>

<body>
    <?php echo csrf_field(); ?>
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

    <article>

        <section>
            <div>
                <div id="banner">
                    <h1>Tuffati nella nostra raccolta!</h1>
                </div>
                <div id="responsive_box">
                    <div class="grid-container">
                        <div class="item1">
                            <div class="container">
                                <div class="box">
                                    <h1>Visita la nostra HomePage!</h1>
                                    <a class="view" href='<?php echo e(url("home")); ?>'>Home</a>
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

        <section>
            <form id='cerca' method='GET'>
                <div class="play_book"><img src="../Images/playbook_logo.png"></div>
                <div class="container_1">
                    <div id="input">
                        <input type='text' id='name' class="view" placeholder="Cerca">
                        <button type='submit' id='Login' class="view" onclick="">Search</button>
                    </div>
                </div>
                </div>
            </form>
            <div id="book-list">
            </div>
        </section>

        <section id="box-book">
        </section>

    </article>

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

</html><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/hw2/resources/views/store.blade.php ENDPATH**/ ?>