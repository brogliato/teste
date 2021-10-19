<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Document title -->
    <title><?php echo $nome_header ?></title>

    <!-- Stylesheets & Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- <link href="css/fonts.css" rel="stylesheet"> -->
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <nav class='header-nav'>
                <!-- <div id="header-toggle" class="button"></div> -->
                <ul class="header-menu">
                    <li class="header-menu__item">
                        <a href='#' class="header-menu__link btn--1" title="">
                            <img class="header-icon" src="images/icones/editar.png" alt="">
                            Seja um franqueado
                        </a>
                    </li>
                    <li class="header-menu__item">
                        <a href='#' class="header-menu__link btn--2" title="">
                            <img class="header-icon" src="images/icones/seja_consultor.png" alt="">
                            Seja um consultor(a)</a>
                    </li>
                    <li class="header-menu__item">
                        <a href='#' class="header-menu__link btn--3" title="">
                            Quero Comprar
                        </a>
                    </li>
                </ul>
                <div class="header-right">
                    <a href="#" class="header-btn">
                        <img class="header-icon" src="images/icones/area_restrita.png" alt="">
                        área restrita
                    </a>
                </div>
                <span class="toggleMobile"></span>
            </nav>
            <div class="fancyMobile"></div>
        </div>
    </header>