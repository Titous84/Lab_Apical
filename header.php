<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Contenu de la formation sur Apical."/>
    <meta name="author" content="Nathan Reyes : tit-kaze.ca">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <?php wp_head(); ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script defer src="js/last-formation.js"></script>
    <script defer src="js/scroll.js"></script>
</head>

<body id="messtyles">

<header>
    <div class="aucunepubauto">
        <div class="logo fix-menu" id="zoneentete">
            <div class="container">
                <div class="avant"></div>
                <div class="apres">
                    <div id="menuicones" class="porteuroffset fix-menu" data-verticaloffset="47"
                         data-horizontaloffset="0">
                        <a href="http://apical.xyz"><img src="https://apical.xyz/medias/commun/Accueil-MenuSecondaire.svg"
                                                   alt="Accueil" title="Accueil"/></a>
                        <a href="#" class="ouvrirpopupchristiane ouvrirpopuprecherche"
                           data-target="#popuprecherche"><img
                                    src="https://apical.xyz/medias/commun/Rechercher-MenuSecondaire.svg" alt="Recherche"
                                    title="Rechercher"/></a>
                        <a href="#" class="ouvrirpopupchristiane ouvrirpopupauthentification"
                           data-target="#popupauthentification"><img
                                    src="https://apical.xyz/medias/commun/LoginFait-MenuSecondaire.svg"
                                    alt="Authentification" title="Créé en lot Créé en lot"/>
                        </a>
                    </div>
                </div>
                <div class="centre">
                    <a href="/formations/page-formation.php"><img src="https://apical.xyz/medias/fr/LogoApical-blanc.svg"
                                                      alt="Apical, ma plateforme d'apprentissage"/></a>
                </div>
            </div>
        </div>
        <nav class="navbar" id="mainNav">
            <div class="container-navbar">
                <ul>
                    <li class="nav-item px-lg-4 dropdown">
                        <a href="https://apical.xyz/formations"
                           class="dropdown-toggle nav-link text-uppercase text-expanded "
                           data-toggle=&quot;dropdown&quot; data-target=&quot;#&quot; aria-haspopup=&quot;true&quot;
                           aria-expanded=&quot;false&quot;>FORMATIONS </a>
                        <div class="dropdown-menu">

                            <h6 class="dropdown-header consulterecemment">Dernières formations consultées</h6>

                            <a class="dropdown-item consulterecemment"
                               href="https://apical.xyz/formations/php">PUB010&nbsp;: PHP</a>
                            <a class="dropdown-item consulterecemment"
                               href="https://apical.xyz/formations/wordpress">PUB020&nbsp;: WordPress</a>
                            <a class="dropdown-item consulterecemment"
                               href="https://apical.xyz/formations/developpement_web_1">420-2A4-VI&nbsp;:
                                Développement Web 1 (PHP)</a>
                            <br>
                            <div class="dropdown-divider consulterecemment"></div>
                            <a class="dropdown-item consulterecemment reinitialiserCookiesMenuFormations" href="#"
                               title="Vide la liste des dernières formations consultées sans affecter vos droits.">Réinitialiser
                                la liste</a>
                            <div class="dropdown-divider consulterecemment"></div>
                            <br>
                            <a class="dropdown-item "
                               href="https://apical.xyz/formations">Toutes mes
                                formations</a>
                        </div>
                    </li>
                    <li class="nav-item px-lg-4 dropdown">
                        <a href="https://apical.xyz/questionnaires"
                           class="dropdown-toggle nav-link text-uppercase text-expanded" data-toggle="dropdown"
                           data-target="#" aria-haspopup="true" aria-expanded="false">
                            QUESTIONNAIRES /<br/>EVALUATIONS
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="https://apical.xyz/questionnaires">Questionnaires</a>
                            <a class="dropdown-item" href="https://apical.xyz/resultatsevaluations">Résultats
                                d'évaluations</a>
                        </div>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a href="https://apical.xyz/avenir"
                           class="nav-link text-uppercase text-expanded ">TRAVAUX </a>
                    </li>


                    <li class="nav-item px-lg-4">

                        <a href="https://apical.xyz/articles"
                           class="nav-link text-uppercase text-expanded ">BLOGUE </a>
                    </li>


                    <li class="nav-item px-lg-4 dropdown">
                        <a href="https://apical.xyz/pages/formulairebcrypt"
                           class="dropdown-toggle nav-link text-uppercase text-expanded  "
                           data-toggle="dropdown" data-target="#" aria-haspopup="true"
                           aria-expanded="false">OUTILS </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item "
                               href="https://apical.xyz/pages/formulairebcrypt">Hachage scrypt </a>
                            <a class="dropdown-item "
                               href="https://apical.xyz/pages/aleatoire">Générateur aléatoire </a>
                            <a class="dropdown-item "
                               href="https://apical.xyz/pages/fontAwesome">Icônes Font Awesome </a>
                        </div>
                    </li>


                    <li class="nav-item px-lg-4 ">
                        <a href="https://apical.xyz/usagers/473/modification"
                           class=" nav-link text-uppercase text-expanded  "
                        >MON PROFIL </a>
                    </li>


                    <li class="nav-item px-lg-4 dropdown">
                        <a href="https://apical.xyz/contact"
                           class="dropdown-toggle nav-link text-uppercase text-expanded "
                           data-toggle="dropdown" data-target="#" aria-haspopup="true"
                           aria-expanded="false">AIDE </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item "
                               href="https://apical.xyz/contact">Contact </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item "
                               href="https://apical.xyz/apropos">À
                                propos </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </div>
    </div>
</header>


