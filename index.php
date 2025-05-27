<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/HomePage.css?v=<?php echo filemtime('css/HomePage.css'); ?>" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title> Nico Digital Studio - Votre Référence en Solutions Digitales </title>
    <meta name="description"
        content="Nicolas Sarter - Etudiant en Communication/Création digitale, passionné par le dev web" />
    <meta name="keywords" content="Nicolas Sarter, Communication, Création digitale, dev web, projets" />
    <meta name="author" content="Nicolas Sarter" />
</head>


<body>
    <div class="scrolling-text">
        <span>NEW ! Le site est désormais optimisé pour une meilleure expérience utilisateur sur mobile.</span>
    </div>

    <ul class="nav-menu">
        <button class="nav-Togle-btn" onclick="toggleNav()">☰</button>
        <div class="navbar-image">
            <img src="./logoNDS.png" alt="" />
        </div>
        <div class="nav-content" aria-labelledby="Barre de navigation">
            <li>
                <a class="active" href="https://nicodigitalsstudio.com/"> Accueil</a>
            </li>
            <li>
                <a href="https://webportrait.nicodigitalsstudio.com/"> Mon Web Portrait</a>
            </li>
            <li>
                <a href="https://weather-app.nicodigitalsstudio.com/"> Mon site Météo</a>
            </li>
            <li>
                <a href="https://games.nicodigitalsstudio.com/"> Mes jeux</a>
            </li>
            <li>
                <a href="https://podcasts.lesactusdenico.info"> Mon projet Podcast</a>
            </li>
            <li>
                <a href="https://lesactusdenico.info">
                    Les Actus de Nico <span id="nav-badge" class="badge">New</span>
                </a>
            </li>
            <li>
                <a href="contact.html"> Contact</a>
            </li>


        </div>
        <div class="Restricted">
            <input id="input-restricted" type="text" placeholder="Mot de passe" /><br />
            <a href="RestrictedAccess.html" style="text-decoration: none">
                <button id="go-to-restrcted" disabled>Connectez vous</button>
            </a>
        </div>
    </ul>


    <div class="homepage-logo">
        <img id="logo" src="./logoNDS.png" alt="" />
    </div>



    <h1 class="main-title">Nico Digitals Studio</h1>

    <p class="secondary-title">Futur studio de création/cumunication diagitale </p>

    <section class="sec-faq" id="no0">
        <div class="content-container">
            <h1>Qui suis-je ?</h1>
            <p>
                ♿️ Je suis Nicolas Sarter, étudiant en Information et Communication à l'Université de Lorraine. Passionné par
                le développement web et la création digitale, je m'efforce de créer des projets innovants et utiles.
                Mon objectif est de fonder un studio de développement web indépendant pour offrir des solutions digitales
                aux entreprises et aux particuliers.
        </div>
        <button id="scrollIntoView"
            onclick="document.getElementById('projets-section').scrollIntoView({ behavior: 'smooth' });">
            Découvrir mes projets
        </button>
    </section>

    <section class="sec-faq" id="no1">
        <div class="content-container">
            <h1>Quel est mon but ?</h1>
            <p>
                Mon but est de créer un studio de développement web indépendant, où je pourrai concevoir des sites web et
                des applications sur mesure pour répondre aux besoins spécifiques de mes clients. Je souhaite également
                partager mes connaissances et mon expertise à travers des projets open source et des tutoriels en ligne.
            </p>
        </div>
    </section>

    <section class="sec-faq" id="no2">
        <h1>Quel est mon parcours ?</h1>
        <p>Je suis actuellement étudiant en L1 information comunication au <a
                href="https://maps.app.goo.gl/chPauQmu6zW7ck116">Campus Lettres et Sciences Humaines de Nancy -
                Université de Lorraine</a> </p>
    </section>

    <section class="sec-faq" id="no3">
        <div class="content-container">
            <h1>A propos de moi</h1>
            <p>
                Je suis aussi un autodidacte, j'ai appris à coder certains langages en
                regardant des vidéos sur internet. Merci FreeCodeCamp J'ai aussi
                appris à utiliser des logiciels de montage vidéo et de création
                d'images.
            </p>
        </div>
    </section>

    <section class="sec-faq" id="no4">
        <div class="content-container">
            <h1>Me soutenir, c'est important</h1>
            <p>
                Si vous souhaitez me soutenir, vous pouvez le faire en cliquant sur
                les boutons ci-dessous. Vous pouvez aussi me contacter pour me
                proposer des projets ou des collaborations.
            </p>
        </div>

        <!-- Ajout d'un bouton pour faire défiler la page jusqu'à l'élément avec l'ID "donane" -->
        <button id="scrollIntoView"
            onclick="document.getElementById('donate-section').scrollIntoView({ behavior: 'smooth' });">
            Soutenir mon travail
        </button>
    </section>

    <section id="projets-section">
        <h1 class="main-title">Mes projets Web</h1>

        <div class="btn-grid" id="projets">
            <!-- Step 1 & 2: Wrap the button and add a badge -->
            <div class="button-container">
                <a href="https://weather-app.nicodigitalsstudio.com/" style="text-decoration: none">
                    <button id="new-btn">Joue au PetitBac</button>
                    <span class="badge">New</span>
                    <!-- Badge text -->
                </a>
            </div>

            <a href="https://weather-app.nicodigitalsstudio.com/" style="text-decoration: none">
                <button class="">Mon site météo</button>
            </a>



            <a href="https://games.nicodigitalsstudio.com/" style="text-decoration: none">
                <button class="">Mes jeux</button>
            </a>

            <a href="https://webportrait.nicodigitalsstudio.com/" style="text-decoration: none">
                <button class="">Découvre mon web portrait</button>
            </a>
        </div>
    </section>

    <h1 class="main-title">Mes travaux dans le domaine de l'IC</h1>

    <div class="btn-grid" id="projets">
        <a href="https://podcasts.lesactusdenico.info" style="text-decoration: none">
            <button class="">Mon projet podcast</button>
        </a>
    </div>

       <h1 class="main-title">Je travaille pour</h1>

    <div class="btn-grid" id="donate">
        <a href="https://lesactusdenico.info" style="text-decoration: none">
            <button id="lesactusdenico" class="lesactusdenico-button">
                <img id="lesactusdenico-logo" class="company-logo" src="img/Les Actus de nico logo.png"
                    alt="Les Actus de Nico Logo" />
                <span id="span-lesactusdenico" class="donate-span">Clique Ici pour découvrir le site</span>
            </button>
        </a>

        <a href="https://babylon-destruct.website/" style="text-decoration: none">
            <button id="babylon" class="babylon-button">
                <img id="babylon-logo" class="company-logo" src="./img/babylon.png" alt="Babylon Logo" />
                <span id="span-babylon" class="donate-span">Clique Ici pour découvrir le site</span>
            </button>
        </a>

    </div>

    <section id="donate-section">
        <h1 class="main-title">Me soutenir</h1>

        <div class="btn-grid" id="donate">
            <a href="https://hostinger.fr?REFERRALCODE=1NICOLAS267" style="text-decoration: none">
                <button id="hostinger" class="hostinger-button">
                    <img id="hostinger-logo" class="company-logo" src="./img/hostinger-logo.svg" alt="Hostinger Logo" />
                    <span id="span-hostinger" class="donate-span">Clique Ici pour recevoir 20% de réduction</span>
                </button>
            </a>

            <a href="https://www.ebuyclub.com/inscription?parrain=sarternicolas" style="text-decoration: none">
                <button id="ebuyclub" class="ebuyclub-button">
                    <img id="ebuyclub-logo" class="company-logo" src="./img/ebuycub_logo.svg" alt="Ebuyclub Logo" />
                    <span id="span-ebuyclub" class="donate-span">Clique Ici pour recevoir 5€</span>
                </button>
            </a>

            <a href="joinhoney.com/ref/a0faysg" style="text-decoration: none">
                <button id="honey" class="honey-button">
                    <img id="honey-logo" class="company-logo" src="./img/honey-logo.svg" alt="Honey Logo" />
                    <span id="span-honey" class="donate-span">Clique Ici pour recevoir 5€</span>
                </button>
            </a>

            <a href="https://www.moovance.fr/" style="text-decoration: none">
                <button id="moovance" class="moovance-button">
                    <img id="moovance-logo" class="company-logo" src="./img/logo-moovance.png" alt="Moovance Logo" />
                    <span id="span-moovance" class="donate-span">Utilise le code sarte#17605 Pour gagner 6 mooves</span>
                </button>
            </a>

            <a href="https://dictanote.co/voicein/install/?r=646920" style="text-decoration: none">
                <button id="dictanote" class="dictanote-button">
                    <img id="dictanote-logo" class="company-logo" src="./img/icon-voicein144.png"
                        alt="Dictanote Logo" />
                    <span id="span-dictanote" class="donate-span">Clique ici pour améliorer ta productivité</span>
                </button>
            </a>

            <a href="https://fr.tipeee.com/" style="text-decoration: none">
                <button id="tipeee" class="tipeee-button">
                    <img id="tipeee-logo" class="company-logo" src="./img/tipeee-logo-white.svg" alt="Tipeee Logo" />
                    <span id="span-tipeee" class="donate-span">Clique Ici pour me soutenir</span>
                </button>
            </a>
        </div>
    </section>
 

    <section class="sec-faq" id="no6">
        <h1 class="main-title" id="sc-title">Suivez moi sur :</h1>
        <div class="social-media">
            <a href="https://bento.me/nicolassarter" class="fab fa-bento">
                <img src="./img/bento me icon.png" alt="" width="20px" height="20px" />
            </a>
            <a href="mailto:contact@nicodigitalsstudio.com" class="fab fa-rocketchat"></a>
            <a href="https://linkedin.com/nsarter/" class="fab fa-linkedin"></a>
            <a href="https://www.instagram.com/lesactusdenico" class="fab fa-instagram"></a>
            <a href="https://github.com/sarterni" class="fab fa-github"></a>
            <a href="https://piaille.fr/@sarter_nicolas" class="fab fa-mastodon"></a>
         
        </div>
    </section>

    <footer>
        <p>© 2025 Nico Digitals Studio</p>
        <div class="links">
            <a href="https://nicodigitalsstudio.com/">Accueil |</a>
            <a href="https://webportrait.nicodigitalsstudio.com/">Mon Web Portrait |</a>
            <a href="https://weather-app.nicodigitalsstudio.com/">Mon site Météo |</a>
            <a href="https://games.nicodigitalsstudio.com/">Mes jeux |</a>
            <a href="https://podcasts.lesactusdenico.info">Mon projet Podcast |</a>
            <a href="https://lesactusdenico.info">Les Actus de Nico |</a>
            <a href="contact.html">Contact</a>
        </div>
    </footer>

    <script src="./js/script.js"></script>
</body>

</html>