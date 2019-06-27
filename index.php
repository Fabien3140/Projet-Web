<?php
$bdd = new PDO('mysql:host=localhost;dbname=database.sql;charset=utf8', 'root', '');
session_start();
$dbparams = parse_ini_file('db.ini');
ini_set('error_reporting', E_ALL);
ini_set('Display_errors' , TRUE);
$pdo = new PDO($dbparams['url'], $dbparams['user'], $dbparams['pass']);

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mon portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Mon portfolio - Fabien Cervantes" />
    <meta name="description" content="Portfolio de Fabien Cervantes. Vous trouverez ici les informations sur mon profil et mon parcours. Pour faire plus ample connaissance, veuillez me contacter à l'aide du formulaire.">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles/main.css" />
    <style>
        .content{
            background: green;
        }
    </style>
</head>
<header>
    <h1>Fabien Cervantes B1 Informatique</h1>
</header>
<body>
    <nav class="navbar navbar-default header">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="./index.html">Curriculum Vitae</a>
        </div>
      </div>
    </nav>

    <ul class="nav nav-tabs">
        <li><a class="js-scrollTo" href="#coordonnées">Coordonnées</a></li>
        <li><a class="js-scrollTo" href="#container1"><em>Expériences</em></a></li>
        <li><a class="js-scrollTo" href="#container2"><em>Formations</em>></a></li>
        <li><a class="js-scrollTo" href="#container3"><em>Projets</em>></a></li>
        <li><a class="js-scrollTo" href="#competences"><em>Compétences</em></a></li>
        <li><a class="js-scrollTo" href="#voyages">Voyages</a></li>
    </ul>
    <main>
        <h1>Fabien CERVANTES - <em>Bachelor</em> 1 <em>Informatique</em></h1>
        <div class="row">
            <section id="container1" class="col-sm-6">
                <h3>Expérience</h3>
                <ul>
                    <li>Eboueur, Métropole Aubagne, 13400 - <strong> Juillet 2017 & 2018</strong></li>
                    <li>Service Civique, Collège Lakanal, Aubagne 13400 - <strong>Oct 2017 - Juil 2018</strong></li>
                    <li>Animateur en centre aéré, Roquevaire, 13360 - <strong>Janvier à Mars 2018</strong></li>
                    <li>Animateur en colonie de vacances, Djuringa Junior - <strong>Août 2017</strong> </li>
                </ul>
            </section>
            <section id="container2" class="col-sm-6">
                <h3>Formations</h3>
                <ul>
                    <li>Bachelor 1 Informatique, <em>Ynov Campus</em>, <em>Aix en Provence</em> - <strong>2018/2019</strong></li>
                    <li>Formation PSC1 - <strong>Avril 2018</strong></li>
                    <li>Terminale scientifique, Lycée Joliot Curie, Aubagne, 13400 - <strong>2016/2017</strong></li>
                </ul>
            </section>
        </div>
        <section id="container3">
            <h3 id="projets">Projets</h3>
            <div class="row">
                <div id= 'Coloc' class="col-sm-3">&nbsp;</div>
                <div id="left" class="col-sm-2">
                    <input type="button" value="Space HackAdemy" onClick="javascript:document.location.href='tp.html'" class="bouton1" />
                </div>
                <div id="center" class="col-sm-2">
                    <input type="button" value="Plante connectée" onClick="javascript:document.location.href='tp.html'" class="bouton1" />
                </div>
                <div id="right" class="col-sm-2">
                    <input type="button" value="Inventaire +" onClick="javascript:document.location.href='tp.html'" class="bouton1" />
                </div>
                <div class="col-sm-3">&nbsp;</div>
            </div>
        </section>
        <section id="competences">
            <h3>Compétences</h3>
        </section>
        <div class="container">
            <h3>Langues</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Langue</th>
                        <th>Niveau</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Anglais</td>
                        <td>
                            <div class="progress">
                              <div class="progress-bar progress-bar-striped active" role="progressbar"
                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                Intermédiaire - 60%
                              </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Espagnol</td>
                        <td>
                            <div class="progress">
                              <div class="progress-bar progress-bar-striped active" role="progressbar"
                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                Intermédiaire - 60%
                              </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <article id="voyages">
            <h3>Voyages</h3>
            <ul class="container-fluid">
                <li>Edimburgh, Ecosse - <strong>Mars 2018</strong> </li>
                <li>Barcelone, Espagne - <strong>Août 2016/2017, Octobre 2017</strong></li>
                <li>Londres, Angleterre - <strong> Février 2013/2017/2019</strong></li>
            </ul>
        </article>
        <section id="coordonnées">
            <div class="container">
              <h3>Coordonnées</h3>
              <form action="/action_page.php" class="col-sm-6">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="message">Message:</label>
                  <textarea class="form-control" id="message" placeholder="Enter password" name="message">
                  </textarea>
                </div>
                <button type="submit" class="btn btn-default">Envoyer</button>
              </form>
              <div class="col-sm-6">
                <img src="logo_ynov_campus_rvb_blanc.png" alt="Logo Ynov campus, avec un grand Y">
                <p>Cervantes <br> Fabien <br> 07.86.00.00.00 <br> 8C rue Achille Empéraire <br>13090 Aix en Provence <br>fabien.cervantes.1@gmail.com</p>
                <a href="https://www.linkedin.com/in/fabien-cervantes-965343171/">Linkedin</a>
              </div>
            </div>
        </section>
    </main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 750; // Durée de l'animation (en ms)
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>

</body>
<footer>
    <a href= "">Pages de Mentions Légales et Respect de la vie Privée </a>
</footer>
</html>

?>
