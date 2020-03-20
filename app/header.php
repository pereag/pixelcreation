<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pixelcreation est un magazine en ligne destiné aux professionnels et
                                         passionnés d’arts visuels et de graphisme. Ce site n’est pas le véritable
                                          site de Pixellisation. Il a été désigné et intégré par Valentin Perello, développeur et designer web.">
        <link rel="shortcut icon" href="public/images/favicon.png" type="image/png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="public/style/css/base.css">
        <?= $pageCss; ?>
        <title>Pixelcreation | <?= $title ?></title>
    </head>
        <body>
            <header>
                <div class="header-top verticalalign">
                    <div class="verticalalign--middle">
                        <div class="header-top-content">
                            <a href="/pixelcreation" title="Accueil"><img class="logo" src="public/images/logo.png" alt="logo de Pixelcreation"><img class="logo-mobile" src="public/images/logo-mobile.png" alt="logo de Pixelcreation"></a>
                            <form action="" class="header-top-content-form">
                                <span class="header-top-content-form-span">
                                    <a href="#" title="Newsletter">NEWSLETTER</a>
                                </span>
                                <input class="header-top-content-form-inputtext" type="text" placeholder="Recherche">
                                <img id="searchButton" class="header-top-content-form-mobilesearch" src="public/images/search.png" alt="Icone loupe">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-bottom verticalalign">
                    <div class="verticalalign--middle">
                        <div class="header-bottom-content">
                            <nav class="header-bottom-content-menu">
                                <ul class="header-bottom-content-menu-list">
                                    <li class="header-bottom-content-menu-list-item"><a href="#" title="Événements">ÉVÉNEMENTS</a></li>
                                    <li class="header-bottom-content-menu-list-item"><a href="#" title="Actualités">ACTUALITÉS</a></li>
                                    <li class="header-bottom-content-menu-list-item"><a href="#" title="Portraits">PORTRAITS</a></li>
                                    <li class="header-bottom-content-menu-list-item"><a href="#" title="Formations">FORMATIONS</a></li>
                                </ul>
                                <img id="button-mobileMenu" class="header-bottom-content-menu-mobile" src="public/images/mobile-menu.png" alt="Icone de menu mobile">
                            </nav>
                        </div>
                    </div>
                </div>
                <nav id="mobile-menu" class="mobile-menu__desalow">
                    <table >
                        <tbody>
                            <tr class="mobile-menu-table-tr">
                                <a class="mobile-menu-link"href="#">ÉVÉNEMENTS</a>
                            </tr class="mobile-menu-table-tr">
                            <tr class="mobile-menu-table-tr">
                                <a class="mobile-menu-link" href="#">ACTUALITÉS</a>
                            </tr>
                            <tr class="mobile-menu-table-tr">
                                <a class="mobile-menu-link" href="#"> PORTRAITS </a>
                            </tr>
                            <tr class="mobile-menu-table-tr">
                                <a class="mobile-menu-link" href="#">FORMATIONS</a>
                            </tr>
                        </tbody>
                    </table>
                </nav>
            </header>
            <section id="searchmobile" class="searchmobile__desable">
                <img id="buttonCross" class="searchmobile-cross" src="public/images/close.png" alt="Croix">
                <div class=" searchmobile-content verticalalign">
                    <div class="verticalalign--middle">
                        <form action="" class="searchmobile-content-form">
                            <input class="searchmobile-content-form-inputtext" type="text" placeholder="Recherche">
                            <button class="button button--center">Rechercher</button>
                        </form>
                    </div>
                </div>
            </section>