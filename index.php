        <?php
            $title = 'Accueil';
            $pageCss = '<link rel="stylesheet" href="public/style/css/home.css">';
            require('app/header.php');
        ?>
        <main>
            <section id="bigone" class="verticalalign">
                <div class="verticalalign--middle">
                    <div class="bigone-content">
                        <div class="bigone-content-txt">
                            <h1>L'ACTUALITÉ DE <br>L'ART ET DE L'IMAGE</h1>
                            <p class="bigone-content-txt-p">Pixelcreation est un magazine en ligne destiné aux professionnels et passionnés d'arts visuels, de graphisme ...</p>
                            <a href="#" class="button" title="Qui sommes-nous">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="events">
                <div class="events-content">
                    <h2>PROCHAINS ÉVÉNEMENTS</h2>
                    <div class="events-content-blocks">
                        <a href="#" title="Mans'Art">
                            <div class="events-content-blocks-block events-content-blocks-block-left verticalalign">
                                <div class="events-content-blocks-block-date verticalalign">
                                    <div class="verticalalign--middle">
                                        <span class="events-content-blocks-block-date-txt">18/01</span>
                                    </div>
                                </div>
                                <div class="verticalalign--middle">
                                    <h3 class="events-content-blocks-block-title">MANS’ART</h3>
                                </div>
                            </div>
                        </a>
                        <a href="#" title="JPO 2020">
                            <div class="events-content-blocks-block events-content-blocks-block-middle verticalalign">
                                <div class="events-content-blocks-block-date verticalalign">
                                    <div class="verticalalign--middle">
                                        <span class="events-content-blocks-block-date-txt">23/01</span>
                                    </div>
                                </div>
                                <div class="verticalalign--middle">
                                    <h3 class="events-content-blocks-block-title">JPO 2020</h3>
                                </div>
                            </div>
                        </a>
                        <a href="#" title="Un dimanche à la galerie">
                            <div class="events-content-blocks-block events-content-blocks-block-right verticalalign">
                                <div class="events-content-blocks-block-date verticalalign">
                                    <div class="verticalalign--middle">
                                        <span class="events-content-blocks-block-date-txt">31/01</span>
                                    </div>
                                </div>
                                <div class="verticalalign--middle">
                                    <h3 class="events-content-blocks-block-title">UN DIMANCHE À <br>LA GALERIE</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="#" class="button button--center" title="Événements">Voir plus</a>
                </div>
            </section>
            <section id="news">
                <hr>
                <div class="news-content">
                <a  class="news-content-link-1" href="#" title="Senza Titolo">
                    <div class="news-content-link-box news-content-link-box-1 verticalalign">
                        <div class="verticalalign--middle">
                            <h3 class="news-content-link-box-title">SENZA TITOLO</h3>
                        </div>
                    </div>
                </a>
                <a  class="news-content-link-2" href="#" title="Inspiration street art">
                    <div class="news-content-link-box news-content-link-box-2 verticalalign">
                        <div class="verticalalign--middle">
                            <h3 class="news-content-link-box-title">INSPIRATION<br> STREET ART</h3>
                        </div>
                    </div>
                </a>
                <a  class="news-content-link-3" href="#" title="Mexico squeletos">
                    <div class="news-content-link-box news-content-link-box-3 verticalalign">
                        <div class="verticalalign--middle">
                            <h3 class="news-content-link-box-title">MEXICO SQUELETOS</h3>
                        </div>
                    </div>
                </a>
                <a href="#" class="news-content-link-4" title="Robert Delauney">
                    <div class="news-content-link-box news-content-link-box-4 verticalalign">
                        <div class="verticalalign--middle">
                            <h3 class="news-content-link-box-title">ROBERT DELAUNEY</h3>
                        </div>
                    </div>
                </a>
                </div>
                <hr>
            </section>
            <section id="profiloftheweek">
                <div class="profiloftheweek-content">
                    <h2>PORTRAIT DE LA SEMAINE</h2>
                    <div class="profiloftheweek-content-box">
                        <img class="profiloftheweek-content-box-image" src="public/images/profilofweek-image.jpg" alt="Photo de Constance Guisset">
                        <div class="profiloftheweek-content-box-right">
                            <h3 class="profiloftheweek-content-box-right-title">CONSTANCE GUISSET</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis ... 
                            </p>
                            <a href="/pixelcreation/new.php" class="button button--mdcenter" title="Portrait de la semaine">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="newsletter">
                <div class="newsletter-content">
                    <h2>NEWSLETTER</h2>
                    <form class="newsletter-content-form" action="">
                        <input class="newsletter-content-form-inputxt" type="text" placeholder="Jeandupon@outlook.com">
                            <a href="#" class="button button--center" title="Envoyer">Envoyer</a>
                    </form>
                </div>
            </section>
        </main>
        <?php
            require('app/footer.php');
        ?>