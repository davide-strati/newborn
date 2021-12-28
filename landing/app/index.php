<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="newborn photography, foto neonati, servizi fotografici neonati, foto gravidanza, foto mamme, foto genitori, foto bambini, foto professionali in studio">
    <meta
        desription="Foto professionali di neonati, genitori e bambini a Bologna, Barbara Lei è specializzata nella realizzazione di fotografie di neonati e della loro famiglia, ralizzate in studio">
    <meta property="image" content="">
    <meta property="og:locale" content="it_IT">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Foto professionali di neonati e famiglia a Bologna">
    <meta property="og:description"
        content="Realizzazione di servizi fotografici per neonati e per i loro genitori, in studio, a Bologna e provincia.">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="Foto professionali di neonati e famiglia a Bologna">
    <meta property="twitter:description" content="Foto newborn e di bambini a Bologna">
    <title>NEW BORN BOLOGNA</title>
    <!-- Custom styles for this template with bootstrap css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/custom.css">
</head>

<?php
    require 'inc/functions.php';
?>

<body>
    <header class="fixed-top text-white">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <img src="images/barbara-lei-logo.svg" class="d-inline-block align-top img-fluid w-75"
                        alt="Il logo di Barbara Lei, fotografa" width="30" height="30">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerMenu" aria-controls="navbarTogglerMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerMenu">
                    <ul class="navbar-nav flex-row flex-wrap text-white">
                        <li class="nav-item px-2"><a href="#servizi" class="nav-link"
                                alt="Servizi fotografici per neonati, gravidanza e bambini 0-12">Servizi</a></li>
                        <li class="nav-item px-2"><a href="#intro" class="nav-link"
                                alt="La mia esperienza nel campo della fotografia">Chi sono</a></li>
                        <li class="nav-item px-2"><a href="#portfolio" class="nav-link"
                                alt="Il mio portfolio dedicato alle foto newborn, alle mamme incinta ed ai bambini">Portfolio</a>
                        </li>
                        <li class="nav-item px-2"><a href="#contatti" class="nav-link"
                                alt="Contattami per un preventivo per un servizio fotografico dedicato">Contatti</a>
                        </li>
                        <li class="nav-item px-2"><a href="#stampa" class="nav-link"
                                alt="Soluzioni per album fotografici o stampe di alta qualità, per conservare un ricordo o regalarlo a qualcuno">Stampe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- MAIN SLIDER  -->
        <section id="sectionMainSlider" class="section-slider">
            <div id="myCarousel" class="carousel carousel--main slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                    <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <picture>
                            <source srcset="images/photo/slider/main/gravidanza/sm-gravidanza.jpg"
                                media="(max-width: 570px)" class="d-block w-100">
                            <source srcset="images/photo/slider/main/gravidanza/md-gravidanza.jpg"
                                media="(max-width: 768px)" class="d-block w-100">
                            <source srcset="images/photo/slider/main/gravidanza/lg-gravidanza.jpg"
                                media="(max-width: 1200px)" class="d-block w-100">
                            <source srcset="images/photo/slider/main/gravidanza/xxl-gravidanza.jpg"
                                media="(max-width: 1440px)" class="d-block w-100">
                            <source srcset="images/photo/slider/main/gravidanza/xxxxl-gravidanza.jpg"
                                media="(min-width: 1441px)" class="d-block w-100">
                            <img src="images/photo/slider/main/gravidanza/xxxxl-gravidanza.jpg" alt=""
                                class="d-block w-100">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source srcset="images/photo/slider/main/neonati/sm-newborn.jpg" media="(max-width: 570px)"
                                class="d-block w-100">
                            <source srcset="images/photo/slider/main/neonati/md-newborn.jpg" media="(max-width: 768px)"
                                class="d-block w-100">
                            <source srcset="images/photo/slider/main/neonati/lg-newborn.jpg" media="(max-width: 1200px)"
                                class="d-block w-100">
                            <source srcset="images/photo/slider/main/neonati/xxl-newborn.jpg"
                                media="(max-width: 1440px)" class="d-block w-100">
                            <source srcset="images/photo/slider/main/neonati/xxxxl-newborn.jpg"
                                media="(min-width: 1441px)" class="d-block w-100">
                            <img src="images/photo/slider/main/neonati/xxxxl-newborn.jpg" alt="" class="d-block w-100">
                        </picture>
                    </div>
                    <div class="carousel-item">
                        <picture>
                            <source srcset="images/photo/slider/main/bambini/sm-kids.jpg" media="(max-width: 570px)"
                                class="d-block w-100">
                            <source srcset="images/photo/slider/main/bambini/md-kids.jpg" media="(max-width: 768px)"
                                class="d-block w-100">
                            <source srcset="images/photo/slider/main/bambini/lg-kids.jpg" media="(max-width: 1200px)"
                                class="d-block w-100">
                            <source srcset="images/photo/slider/main/bambini/xxl-kids.jpg" media="(max-width: 1440px)"
                                class="d-block w-100">
                            <source srcset="images/photo/slider/main/bambini/xxxxl-kids.jpg" media="(min-width: 1441px)"
                                class="d-block w-100">
                            <img src="images/photo/slider/main/bambini/slide.jpg" alt="" class="d-block w-100">
                        </picture>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </section>
        <!-- SECTION SERVICES -->
        <section id="sectionServizi" class="section-services">
            <a class="anchor" id="servizi"></a>
            <div class="container-fluid p-5">
                <div class="row section-title pt-3 pb-5">
                    <h1 class="text-center">SERVIZI FOTOGRAFICI</h1>
                </div>
                <div class="row text-center">
                    <div class="col-lg-4">
                        <img src="images/caps/cap-g.svg" class="py-4 img--service" alt="">
                        <h2>GRAVIDANZA</h2>
                        <p>La gravidanza è un periodo unico e meraviglioso nella vita di una donna. Immortalare la
                            bellezza di quei momenti, rendendo protagonista la dolcezza delle espressioni ricche di una
                            luce unica, e le forme sinuose del corpo di una donna in attesa di una nuova vita, è
                            qualcosa di davvero magico.<br>La sessione di scatti è consigliabile <strong>tra la
                                ventiseiesima e la
                                trentaseiesima settimana</strong> di gravidanza.</p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="images/caps/cap-n.svg" class="py-4 img--service" alt="">
                        <h2>NEONATI</h2>
                        <p>Quando nasce una nuova vita si è travolti da un vortice di emozioni. Catturare immagini dei
                            primi giorni di vita significa dare vita a ricordi indelebili e ricchi di gioia, che
                            resteranno per sempre nelle vostre vite. Gli scatti si faranno <strong>dal 5° al 14° giorno
                                di vita del neonato</strong>, rispettando i suoi tempi,
                            all'interno di uno spazio confortevole e pulito.<br>Chiama ora per prenotare la tua
                            sessione, o
                            fai un regalo speciale a qualcuno che ami!</p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img src="images/caps/cap-b.svg" class="py-4 img--service" alt="">
                        <h2>BAMBINI</h2>
                        <p>I vostri bambini crescono così in fretta, ed è così bello immortalare questi loro
                            cambiamenti, creare ricordi che saranno una ricchezza per tutta la famiglia.<br>Per
                            <strong>festeggiare
                                un compleanno, o in qualsiasi momento della loro crescita</strong>, si possono fare dei
                            bei ritratti,
                            giocando con loro, per catturare lo stupore e la meraviglia nei loro sorrisi.
                        </p>
                    </div><!-- /.col-lg-4 -->
                </div>
                <div class="text-center mt-5 pt-3">
                    <a href="#sectionContatti" class="btn btn--cta text-center">PRENOTA IL TUO SERVIZIO</a>
                </div>
            </div>
        </section>
        <hr class="featurette-divider">
        <!-- INTRO SUB-SERCTION -->
        <section id="sectionIntro" class="section-intro">
            <a class="anchor" id="intro"></a>
            <div class="container py-5">
                <div class="row featurette py-5">
                    <div class="col-12 col-lg-7">
                        <p class="lead">La fotografia è la mia grande passione, e in tutti questi anni ho raggiunto
                            competenze in tanti ambiti diversi. Dalla fotografia di moda, sia con modelle che accessori
                            in still life, dai gioielli al design, dal food ai matrimoni, alle foto industriali, di
                            architettura e di interni. Ora mi sto dedicando soprattutto ai ritratti, e i miei soggetti
                            preferiti sono le donne in gravidanza e i bambini, con la loro purezza e magia.</p>
                        <p>Dietro a una fotografia, oltre all'attrezzatura, ai software e alle luci, c'è un fotografo
                            con la sua personale sensibilità, la sua visione creativa, la sua passione, e tutto il suo
                            vissuto e la sua formazione. </p>

                            <p>Il mio stile racchiude tutto questo, e il mio grande amore per la fotografia e per i
                            bambini.</p>

                            <p>Prendo pochi appuntamenti al mese per prepararli al meglio: l'allestimento dello studio
                            fotografico, la scelta delle pose e dei vestiti, il foto-ritocco delle immagini sono il
                            frutto di un lavoro che mi piace sviluppare assieme al cliente, per rendere questi momenti
                            unici.</p>

                            <p>Se hai bisogno di altre informazioni sui pacchetti e sui loro prezzi, o vuoi prenotare o
                            regalare un servizio fotografico, chiamami ed iniziamo a studiare assieme che veste dare a
                            questi ricordi davvero speciali.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PHOTO TABS -->
        <section id="photo-grid" class="photo-grid py-5 bg--dark">
            <a class="anchor" id="portfolio"></a>
            <h3 class="fs-1 text-center">PORTFOLIO</h3>
            <ul class="nav nav-pills justify-content-center my-5" id="portfolioTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="gravidanza-tab" data-bs-toggle="tab"
                        data-bs-target="#gravidanza" type="button" role="tab" aria-controls="gravidanza"
                        aria-selected="false">Gravidanza</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="neonati-tab" data-bs-toggle="tab" data-bs-target="#neonati"
                        type="button" role="tab" aria-controls="neonati" aria-selected="true">Neonati</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="bambini-tab" data-bs-toggle="tab" data-bs-target="#bambini"
                        type="button" role="tab" aria-controls="bambini" aria-selected="false">Bambini</button>
                </li>
            </ul>
            <div class="tab-content" id="portfolioTabContent">
                <div class="tab-pane fade show active" id="gravidanza" role="tabpanel" aria-labelledby="gravidanza-tab">
                    <?php 
                        $dir = 'images/photo/masonry/gravidanza/thumbnails';
                        $tipologia= 'Gravidanza';
                        include('inc/portfolio.php'); 
                    ?>
                </div>
                <div class="tab-pane fade" id="neonati" role="tabpanel" aria-labelledby="neonati-tab">
                    <?php 
                        $dir = 'images/photo/masonry/newborn/thumbnails';
                        $tipologia= 'Neonati';
                        include('inc/portfolio.php'); 
                    ?>
                </div>

                <div class="tab-pane fade" id="bambini" role="tabpanel" aria-labelledby="bambini-tab">
                    <?php 
                        $dir = 'images/photo/masonry/kids/thumbnails';
                        $tipologia= 'Bambini';
                        include('inc/portfolio.php'); 
                    ?>
                </div>
            </div>
        </section>


        <!-- CONTACT FORM -->
        <section id="sectionContatti" class="section-contatti">
            <a class="anchor" id="contatti"></a>
            <h3 class="fs-1 text-center py-5">CONTATTAMI</h3>
            <form action="" id="formContatti" class="bb-form form--contatti">
                <div class="container">
                    <div class="row mb-5 justify-content-between">
                        <!-- nome + mail -->
                        <div class="col-12 col-lg-6 d-flex flex-column justify-content-between">
                            <div class="form-item mb-5">
                                <label for="inputName" class="form-label d-none">Nome</label>
                                <input type="text" id="inputName" class="form-input input--base"
                                    placeholder="Inserisci il tuo nome" required>
                            </div>
                            <div class="form-item">
                                <label for="inputMail" class="form-label d-none">Mail</label>
                                <input type="email" id="inputMail" class="form-input input--base"
                                    placeholder="Inserisci la tua mail" required>
                            </div>
                        </div>
                        <!-- Text Area -->
                        <div class="col-12 col-lg-6 col-5 d-flex flex-column justify-content-between">
                            <div class="form-item item--textarea">
                                <label for="areaMessagge" class="form-label d-none"></label>
                                <textarea name="areaMessage" id="areaMessage" class="form-textarea"
                                    placeholder="Scrivimi, sono in ascolto"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-start justify-content-between">
                        <!-- Select -->
                        <div class="col-12 col-lg-6">
                            <div class="form-item">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Seleziona un servizio</option>
                                    <option value="1">Gravidanza</option>
                                    <option value="2">Neonato</option>
                                    <option value="3">Compleanno</option>
                                    <option value="4">Altro (descrivi nel messaggio)</option>
                                </select>
                            </div>
                        </div>
                        <!-- Checkbox + Btn -->
                        <div class="col-12 col-lg-5">
                            <div class="form-item item--checkbox d-flex align-items-center">
                                <input class="form-check-input mr-2" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ho letto e accettato la <a href="#"
                                        alt="Un link alla pagina dedicata alla privacy policy" target="_self">privay
                                        policy</a>.
                                </label>
                            </div>
                            <div class="form-submit text-end mt-5">
                                <button type="submit" class="btn btn-primary">Invia</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <!-- SEZIONE CAROSELLO -->
        <section id="sectionGadget" class="section-carousel">
            <a class="anchor" id="stampa"></a>
            <div id="carouselGadget" class="carousel slide carousel--gadget" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Album fotografico -->
                    <div class="carousel-item album active">
                        <picture>
                            <source srcset="images/photo/bottom-slider/album-fotografico-mobile.jpg"
                                media="(max-width: 767px)" class="d-block w-100">
                            <img src="images/photo/bottom-slider/album-fotografico.jpg" loading="lazy"
                                class="d-block w-100" alt="...">
                        </picture>
                        <div class="carousel-caption">
                            <div class="caption__block">
                                <img src="images/photo/bottom-slider/cuore.png" alt="" class="d-block caption__image">
                                <h4 class="caption__title">I RICORDI SONO IMPORTANTI</h4>
                                <p class="caption__text">CONSERVALI CON CURA <span>CON UN ALBUM FOTOGRAFICO</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- Album fotografico -->
                    <div class="carousel-item album">
                        <picture>
                            <source srcset="images/photo/bottom-slider/stampe-fotografiche-mobile.jpg"
                                media="(max-width: 767px)" class="d-block w-100">
                            <img src="images/photo/bottom-slider/stampe-fotografiche.jpg" loading="lazy"
                                class="d-block w-100" alt="...">
                        </picture>
                        <div class="carousel-caption">
                            <div class="caption__block">
                                <img src="images/photo/bottom-slider/cuore.png" alt="" class="d-block caption__image">
                                <h4 class="caption__title">STAMPE FINE ART</h4>
                                <p class="caption__text">STAMPE SU TELA O CARTA FINE ART</p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGadget"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGadget"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- PALETTE -->
        <div class="conatiner palette__container d-none">
            <div class="row">
                <div class="col-1 color-primary-1">primary-1</div>
                <div class="col-1 color-primary-2">primary-2</div>
                <div class="col-1 color-primary-3">primary-3</div>
                <div class="col-1 color-primary-4">primary-4</div>
                <div class="col-1 color-primary-5">primary-5</div>
                <div class="col-1 color-primary-6">primary-6</div>
                <div class="col-1 color-primary-7">primary-7</div>
                <div class="col-1 color-primary-8">primary-8</div>
                <div class="col-1 color-primary-9">primary-9</div>
                <div class="col-1 color-primary-10">PRIMARY</div>
                <div class="col-1 color-primary-11"></div>
                <div class="col-1 color-primary-12"></div>
            </div>
            <div class="row">
                <div class="col-1 color-gray-1">gray-1</div>
                <div class="col-1 color-gray-2">gray-2</div>
                <div class="col-1 color-gray-3">gray-3</div>
                <div class="col-1 color-gray-4">gray-4</div>
                <div class="col-1 color-gray-5">gray-5</div>
                <div class="col-1 color-gray-6">gray-6</div>
                <div class="col-1 color-gray-7">gray-7</div>
                <div class="col-1 color-gray-8">gray-8</div>
                <div class="col-1 color-gray-9">gray-9</div>
                <div class="col-1 color-gray-10">gray</div>
                <div class="col-1 color-gray-11"></div>
                <div class="col-1 color-gray-12"></div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="container">

            <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

        <!-- MODALS -->
        <!-- Modal Gravidanza -->
        <div class="modal modal--gravidanza fade" id="modalGravidanza" tabindex="-1"
            aria-labelledby="modalGravidanzaLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Carousel markup: https://getbootstrap.com/docs/5/components/carousel/ -->
                        <div id="carouselGravidanza" class="carousel slide carousel--portfolio" data-bs-ride="carousel"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <?php echo createModalGallery('images/photo/masonry/gravidanza'); ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselGravidanza"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselGravidanza"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Neonati -->
        <div class="modal modal--neonati fade" id="modalNeonati" tabindex="-1" aria-labelledby="modalNeonatiLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Carousel markup: https://getbootstrap.com/docs/5/components/carousel/ -->
                        <div id="carouselNeonati" class="carousel slide carousel--portfolio" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php echo createModalGallery('images/photo/masonry/newborn'); ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselNeonati"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselNeonati"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Bambini -->
        <div class="modal modal--kids fade" id="modalBambini" tabindex="-1" aria-labelledby="modalBambiniLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Carousel markup: https://getbootstrap.com/docs/5/components/carousel/ -->
                        <div id="carouselBambini" class="carousel slide carousel--portfolio" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php echo createModalGallery('images/photo/masonry/kids'); ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBambini"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselBambini"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PHP LOOP -->

    </main>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>