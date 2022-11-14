<?php session_start(); ?>
<html>
<?php include_once 'component/head.php' ?>
<body>
    <?php include_once 'component/header.php' ?>
    <aside>
        <?php
            $page = ($_GET['page']) ?? null;

            /*if ($page === null) {
                include_once 'home.php';
            } elseif ($page == 'about') {
                include_once 'about.php';
            } elseif ($page == 'products') {
                include_once 'products.php';
            } else {
                include_once '404.php';
            }*/

            switch ($page) {
                case null:
                    include_once 'home.php';
                    break;
                case 'about':
                    include_once 'about.php';
                    break;
                case 'products':
                    include_once 'products.php';
                    break;
                default:
                    include_once '404.php';
            }
        ?>
    </aside>
    <?php include_once 'component/footer.php' ?>
</body>
</html>

<?php

/*
 * Susikurti papildoma puslapis : calculator.php, ji prisideti, kad butu galima pasiekti per query paramas'a $page
 * Sukurkite form, kuri turetu 2 input laukus su kintamuju pavadinimas $a ir $b
 * Po submito, turi suskaiciuoti siu skaiciu suma ir isvesti i puslapi.
 *
 * Extra: skaiciavimo logika padarykite per funkcija.
 */