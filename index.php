<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Bienvenue sur mon site, je suis Développeur Web junior PHP/JS/SQL basé en région parisienne.">
    <meta property="og:url" content="https://quentinlagadou.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Quentin Lagadou - Développeur Web junior">
    <meta property="og:image" content="https://quentinlagadou.com/assets/og_image.png">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon.png">
    <title>Quentin Lagadou - Développeur Web junior</title>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-primary mb-3" id="main-navbar">
        <a href="#top" class="navbar-brand text-info">Quentin Lagadou</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-liens">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-stretch" id="navbar-liens">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#projets">projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#competences">compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#apropos">à propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container bg-white col-md-6 py-3" style="margin-top: 80px">

        <header class="d-flex justify-content-between flex-wrap ancre" id="top">
            <img src="assets/me.png" alt="Quentin Lagadou" class="mx-auto img-thumbnail rounded-circle" height="200"
                width="200">
            <div class="mx-auto text-center align-self-center">
                <h1 class="text-info mb-0">Quentin Lagadou</h1>
                <h2 class="mb-0" style="font-size: 2rem">Développeur Web Junior</h2>
                <h3 style="font-size: 1.5rem">PHP/JS/SQL - Symfony 4</h3>
                <span><a href="https://github.com/Ultrajet"><img src="assets/github.png" height="25" class="pr-2"></a><a
                        href="https://www.linkedin.com/in/quentin-lagadou/"><img src="assets/linkedin.png"
                            height="25"></a></span>
            </div>
        </header>
        <hr class="my-5">
        <main>
            <div id="projets" class="ancre">

                <div class="bg-primary mb-4 d-flex align-items-center" style="height:64px;border-radius: 10px">
                    <h3 class="mb-0 ml-2 text-light">
                        projets open-source
                    </h3>
                </div>

                <section>

                    <h4 class="text-center"><img src="assets/walk&meet.png" height="30"> <em>Walk &
                            Meet</em></h4>
                    <p class="text-justify description">Companion app pour les jeux à réalité augmentée (type
                        Pokémon Go). Les utilisateurs peuvent se géolocaliser afin
                        de rencontrer des personnes dans leurs environs et jouer
                        avec eux. Ils disposent d'une messagerie instantanée afin de
                        communiquer. Projet de soutenance pour le titre
                        professionnel Développeur web et web mobile.</p>
                    <a href="https://github.com/Ultrajet/projetgo">
                        <div class="d-flex justify-content-center align-items-center flex-wrap">
                            <img src="assets/git_repo.png" height="30" class="pr-1">
                            https://github.com/Ultrajet/projetgo
                        </div>
                    </a>

                    <button type="button" class="d-block mx-auto btn btn-info mb-4" data-toggle="modal"
                        data-target="#screensWalk">
                        Screenshots
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="screensWalk" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Screenshots</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselWalk" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="assets/w&m1.png" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/w&m2.png" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/w&m3.png" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselWalk" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselWalk" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-justify"><em>Équipe : deux développeurs (front + full-stack), un web designer et un
                            chef de
                            projet<br>
                            #socialnetwork #symfony #php #mysql #javascript #jquery #ajax #bootstrap #leaflet
                            #mapbox #openstreetmap #mobilefirst</em></p>

                </section>
                <hr>
                <section>
                    <h4 class="text-center"><img src="assets/geekation.png" height="40"> <em>Geek'ation</em></h4>
                    <p class="text-justify description">Application web pour une boutique de location de matériel
                        gaming (console, jeux et accessoires). Le site permet une
                        gestion des stocks, commandes et utilisateurs pour les
                        administrateurs. Les utilisateurs peuvent louer pour autant
                        de temps qu’ils veulent, à partir de 24 heures. Projet de
                        soutenance pour Webforce3.</p>
                    <a href="https://github.com/Ultrajet/Geekation">
                        <div class="d-flex justify-content-center align-items-center flex-wrap">
                            <img src="assets/git_repo.png" height="30" class="pr-1">
                            https://github.com/Ultrajet/Geekation
                        </div>
                    </a>

                    <button type="button" class="d-block mx-auto btn btn-info mb-4" data-toggle="modal"
                        data-target="#screensGeek">
                        Screenshots
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="screensGeek" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Screenshots</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div id="carouselGeek" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="assets/geek1.png" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/geek2.png" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="assets/geek3.png" alt="Third slide">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselGeek" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselGeek" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-justify"><em>Équipe : quatre développeurs, deux front et deux back<br>
                            #ecommerce #symfony #php #mysql #javascript #jquery #ajax #bootstrap
                            #giantbomb #responsivedesign</em></p>
                </section>
                <hr>
                <section>
                    <h4 class="text-center"><img src="assets/genealogie.png" height="40"> <em>We'R Généalogie <small>(en
                                cours)</small></em></h4>
                    <p class="text-justify description">Site web servant d'outil pour générer des arbres
                        généalogiques dynamiques. L'affichage gère pour le moment
                        deux générations, parmi lesquelles le visiteur peut naviguer
                        en un clic. L'utilisateur pourra renseigner sa propre famille en
                        base de données, puis obtenir un rendu visuel propre,
                        entièrement responsive et exportable. Ce site, développé en
                        duo, sert d'expérimentation, entre autre pour savoir jusqu'où
                        il est possible de coder en PHP procédural avant de migrer
                        sur un framework MVC type Symfony.</p>
                    <a href="https://github.com/bldlr/Genealogie">
                        <div class="d-flex justify-content-center align-items-center flex-wrap mb-4">
                            <img src="assets/git_repo.png" height="30" class="pr-1">
                            https://github.com/bldlr/Genealogie
                        </div>
                    </a>

                    <p class="text-justify"><em>Équipe : deux développeurs full-stack<br>
                            #plaisir #php #mysql #javascript #jquery #ajax #bootstrap #symfony
                            #responsivedesign</em></p>
                </section>
            </div>
            <hr class="my-5">
            <div id="competences" class="ancre">
                <div class="bg-primary mb-4 d-flex align-items-center" style="height:64px;border-radius: 10px">
                    <h3 class="mb-0 ml-2 text-light">mes compétences techniques</h3>
                </div>
                <p>
                    <span class="titre">langages :</span><br>
                    HTML, CSS, Javascript + jQuery, PHP, SQL
                </p>
                <p class="text-right">
                    <span class="titre">librairies/frameworks :</span><br>
                    Bootstrap, Wordpress, Symfony
                </p>
                <p>
                    <span class="titre">outils :</span><br>
                    Visual Studio Code, XAMPP, Git + GitHub, Trello, Slack,
                    Figma
                </p>
                <p class="text-right" style="font-size: initial">
                    <span class="titre">ce que j'apprends / ce que j'aimerais apprendre bientôt :</span><br>
                    NodeJS, React, Java (J2E), Python, Docker, Kubernetes
                </p>
            </div>
            <hr class="my-5">
            <div id="apropos" class="ancre">
                <section>
                    <div class="bg-primary mb-4 d-flex align-items-center" style="height:64px;border-radius: 10px">
                        <h3 class="mb-0 ml-2 text-light">à propos de moi</h3>
                    </div>
                    <p class="text-danger text-justify">Je suis diplômé depuis novembre 2019 d'un titre professionnel
                        niveau III
                        Développeur web / web mobile, qui fait suite à une formation intensive de
                        600 heures chez Webforce3.</p>

                    <button type="button" class="d-block mx-auto btn btn-info mb-2" data-toggle="modal"
                        data-target="#modalApropos">En savoir plus</button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalApropos" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">un peu plus sur moi</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-justify">Mon aventure de développeur commence au début de mon
                                        adolescence, en faisant mes armes sur feu Le Site du Zéro où j'ai approché le
                                        HTML/CSS d'époque, ainsi que le PHP procédural. J'ai immédiatement accroché au
                                        dialogue avec la machine informatique et j'ai découvert un terrain de jeu infini
                                        dont les seules limites sont mon imagination.<br>
                                        <br>
                                        Plusieurs mods de jeux et expérimentations de musique électronique plus tard,
                                        j'ai rejoint Webforce3 en 2019 pour me former professionnellement au métier de
                                        Développeur Web. Ici j'ai rencontré des professeurs qui m'ont permis d'asseoir
                                        mes connaissances, ainsi que de partager ma passion avec des développeurs en
                                        herbe dont certains sont devenus par la suite des amis. Depuis, je monte en
                                        expérience en poursuivant des projets en équipe, où je peux mettre au service du
                                        collectif mon esprit hybride technologique-artistique.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-center">Mon CV : <a href="assets/cv.pdf" target="_blank"><img src="assets/pdf.png"
                                height="40"></a></p>
                </section>
            </div>
            <hr class="my-5">
            <div id="contact" class="ancre">
                <div class="bg-primary mb-4 d-flex align-items-center" style="height:64px;border-radius: 10px">
                    <h3 class="mb-0 ml-2 text-light">contact</h3>
                </div>
                <p class="text-justify">
                    Vous souhaitez en savoir plus sur mes compétences ou les projets que j'ai
                    menés? Vous avez une place pour moi dans votre équipe? Vous voulez
                    parler musique ou jeux vidéos?<br>
                    N'hésitez pas à envoyer un message, je vous réponds au plus vite.
                </p>
                <form action="" method="post">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="nom">nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">mail</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Votre adresse mail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">message</label>
                        <textarea class="form-control" name="message" id="message" rows="10"
                            style="color:inherit"></textarea>
                    </div>
                    <button type="submit" class="d-block mx-auto btn btn-primary">Envoyer</button>
                </form>
            </div>
        </main>

    </div>

    <footer class="bg-primary p-3 mt-3">
        <p class="text-light text-center m-0" style="font-size:12px">© <?= date('Y'); ?> - fait avec ️❤ par Quentin
            Lagadou</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="js/navbar.js"></script>
    <script src="js/form.js"></script>

</body>

</html>