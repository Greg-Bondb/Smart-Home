<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="src/View/style/style.css">
      <link rel="stylesheet" href="src/View/style/home.css">
      <link rel="shortcut icon" type="image/x-icon" href="src/View/images/maison.png" />
      <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
      <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
      <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> -->
      <title>Accueil</title>
      <script src="https://kit.fontawesome.com/157324e58a.js" crossorigin="anonymous"></script>
      <!-- <script src="https://cdn.tailwindcss.com"></script> -->
   </head>
   <body>
      <!-----------------------navbar----------------------->
      <header class="header">
         <nav>
            <div class="header-logo">
               <a href="" class="href-logo">
                  <img src="src/View/images/Casa_Connect.png" alt="">
                  <p>Casa Connect</p>
                  <hr>
               </a>
            </div>
            <div class="burger">
               <span></span>
            </div>
            <div class="header-navbar">
               <ul>
                  <li><a href="home">HOME</a></li>
                  <li><a href="register">REGISTER</a></li>
                  <li><a href="dashboard-capteurs">DASHBOARD</a></li>
                  <li><a href="account">ACCOUNT</a></li>
                  <li><a class="alogout" href="logout"><img class="logout" src="src/View/images/exit-red.png" alt="logout"></a></li>
               </ul>
            </div>
         </nav>
      </header>
      <!-----------------------welcome----------------------->
      <section class="welcome">
        <!-- <div class="h-[500px] w-[1000px] overflow-hidden relative">
            <div class="flex justify-center">
                <div class="absolute flex h-screen justify-left items-center text-white container">
                    <div class="text-[5rem] lg:text-[8.13rem] z-[10] ml-8 lg:ml-20 mt-[-5rem] ">Smart <span class="text-amber-400">H</span>ome</div>
                </div>
                <div class="absolute flex h-screen justify-left items-end p-5 lg:p-0 lg:items-center text-white bottom-24 lg:top-0 lg:ml-20 lg:mt-[5rem] container">
                    <a target="_blank" href="https://www.amazon.fr/OSOYOO-Electronic-Arduino-Wooden-Project/dp/B07DW3GRHM/ref=sr_1_2?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=arduino+wooden&sr=8-2"><div class="z-[10] lg:ml-16 w-60 text-center p-5 rounded-xl bg-slate-900/[0.8] after:content-[''] after:h-[2px] after:absolute after:bottom-[10px] after:m-0 after:left-[40%] after:w-[0%] after:bg-white hover:after:w-[20%] after:transition-all after:duration-700 hover:cursor-pointer hover:scale-110 hover:bg-slate-900/[0.9] transition-all duration-700">Voir nos produits</div></a>
                    <a href="home"><div class="z-[10] ml-6 w-60 text-center p-5 rounded-xl bg-slate-900/[0.8] after:content-[''] after:h-[2px] after:absolute after:bottom-[10px] after:m-0 after:left-[40%] after:w-[0%] after:bg-white hover:after:w-[20%] after:transition-all after:duration-700 hover:cursor-pointer hover:scale-110 hover:bg-slate-900/[0.9] transition-all duration-700">Contactez nous</div></a>
                </div>
            </div>
        </div> -->
        <!-- test temp -->
        <div class="block">
            <div class="block-flex">
                <div class="block-title-container">
                    <div class="block-title">Smart <span class="block-title-amber">H</span>ome</div>
                </div>
                <div class="block-buttons">
                    <a target="_blank" href="https://www.amazon.fr/OSOYOO-Electronic-Arduino-Wooden-Project/dp/B07DW3GRHM/ref=sr_1_2?__mk_fr_FR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=arduino+wooden&sr=8-2"><div class="block-button">Voir nos produits</div></a>
                    <a href="home"><div class="block-button white">Contactez nous</div></a>
                </div>
            </div>
        </div>
        <!-- test temp -->
        <div class="rond">
            <div class="content">
                <div class="square twitch" style="margin-bottom: 50px;">
                    <span class="one" ></span>
                    <span class="two"></span>
                    <span class="three"></span>
                    <div class="circle">
                        <h2 class="DrugRadar">Casa Connect</h2>
                        <p>Gérer la sécurité de votre entreprise à distance, rapidement et facilement.</p>
                    </div>
                </div>
                <a href="{{route('dashboard.index')}}" class="button" target="_parent">
                    <span class="actual-text">&nbsp;Arduino-12S&nbsp;</span>
                    <span class="hover-text" aria-hidden="true">&nbsp;Arduino-12S&nbsp;</span>
                </a>
            </div>
        </div>
      </section>
      <!-----------------------content----------------------->
        <div class="cont">
            <section class="info">
                <img src="src/View/images/P1.png">
                <div class="infoContent">
                    <h2> Votre entreprise à porté de main </h2>
                    <p>Dans le monde actuel, les entreprises doivent être en mesure de s'adapter aux nouvelles technologies pour rester compétitives. Avec l'avènement de l'Internet des objets (IoT), il est maintenant possible de contrôler des dispositifs électroniques à distance à partir d'un simple appareil mobile.<br><br>Notre projet vise à créer une plateforme qui permet de contrôler une carte Arduino à distance, en utilisant des modules électroniques tels que des capteurs, des actionneurs, des relais, des afficheurs et bien d'autres encore. Grâce à notre plateforme, vous pourrez facilement surveiller et contrôler les différents processus de votre entreprise, que ce soit la production, la sécurité, la gestion des stocks ou la surveillance environnementale.</p>
                    <a href="#" class="btn"> Learn More </a>
                </div>
            </section>
            <section class="info temp">
                <div class="infoContent">
                    <h2> Deux équipes, un projet : la clef du succès </h2>
                    <p>Dans notre projet d'entreprise à portée de main, nous avons décidé de diviser les tâches entre deux équipes composées d'étudiants de niveaux différents. L'équipe des bachelors 1 s'est chargée de développer 50% du site web, tandis que l'équipe des bachelors 2 a pris en charge le reste du site web et la gestion de la carte Arduino.<br><br>Cette collaboration inter-niveaux s'est avérée être un choix judicieux, car elle a permis d'optimiser l'utilisation des compétences et des connaissances des étudiants de différents niveaux. Les bachelors 1 ont pu mettre en pratique leurs compétences en développement web pour créer une interface utilisateur intuitive et conviviale, tandis que les bachelors 2 ont pu se concentrer sur les aspects plus techniques de la gestion de la carte Arduino et de ses modules.</p>
                    <a href="#" class="btn"> Learn More </a>
                </div>
                <img src="src/View/images/P2.png">
            </section>
            <section class="info">
                <img src="src/View/images/P3.png">
                <div class="infoContent">
                    <h2> Wooden House Learner Kit </h2>
                    <p>Ce kit comprend tous les composants matériels nécessaires pour contrôler la carte Arduino à distance via Internet, y compris des modules tels que des capteurs de température, d'humidité et de mouvement, ainsi que des actionneurs tels que des servomoteurs et des LED.<br><br>Il nous a permis de construire facilement un prototype de notre système de contrôle à distance, grâce à sa conception modulaire et ses instructions détaillées. En plus de son utilisation dans notre projet, ce kit est également un excellent outil pour l'apprentissage de l'électronique et de la programmation. Il est conçu pour être utilisé aussi bien par des débutants que par des professionnels.</p>
                    <a href="#" class="btn"> Learn More </a>
                </div>
            </section>
        </div>
      <!-----------------------footer-up----------------------->
      <section class="footer-up">

        <div class="supporting">
            <div class="foot-up">
                <div class="col">
                    <img src="https://s3.amazonaws.com/codecademy-content/projects/broadway/design.svg">
                    <h2>Write-up</h2>
                    <p>Nos explications en détails sur le fonctionnement du projet.</p>
                    <a href="document_technique" class="btn-default" target="_blank">Download</a>
                </div>
                <div class="col">
                    <img src="https://s3.amazonaws.com/codecademy-content/projects/broadway/develop.svg">
                    <h2>Github</h2>
                    <p>Vous pourrez touvez ici le code source de chaque page.</p>
                    <a href="#" class="btn-default" target="_blank">View</a>
                </div>
                <div class="col">
                    <img src="https://s3.amazonaws.com/codecademy-content/projects/broadway/deploy.svg">
                    <h2>Arduino</h2>
                    <p>Voici les ressources matérielles proposées par nos partenaires.</p>
                    <a href="https://www.arduino.cc/" class="btn-default" target="_blank">Learn More</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

      </section>
      <!-----------------------footer----------------------->
    <footer>
        <p class="table"></p>
        <div class="dark-container">
            <input type="checkbox" class="checkbox" id="checkbox">
            <label for="checkbox" class="label">
                <i class="fas fa-moon"></i>
                <i class='fas fa-sun'></i>
                <div class='ball'></div>
            </label>
        </div>
        <div>
            <ul class="menu">
                <li><a href="home">Home</a></li>
                <li><a href="register">Register</a></li>
                <li><a href="dashboard-capteurs">Dashboard</a></li>
                <li><a href="account">Account</a></li>
            </ul>
            <div class="footer-copyright">
                <p>Copyright @2023 All Rights Reserved.</p>
            </div>
        </div>
    </footer>
      <!-----------------------script----------------------->
      <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
      <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
      <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
      <script src="src/View/js/main.js"></script>
      <script src="src/View/js/home.js"></script>
   </body>
</html>