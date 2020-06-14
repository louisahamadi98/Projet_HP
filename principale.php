<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" LANG="fr" content="html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mettre a l'echelle pour le telephone -->
  <link rel="stylesheet" href="style_hp.css">
  <title>Bienvenue dans le chemin de traverse</title>
</head>
<body onload="hide()" >
  <header>
    <section id=banner_connect class="inner">
      <div class="connexion">
        <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>
      </div>
      <div>
        <img src="logo4.png" width=90px >
        <?php
        session_start();
        if(isset($_GET['deconnexion']))
        {
          if($_GET['deconnexion']==true)
          {
            session_unset();
            header("location:login.php");
          }
        }
        else if($_SESSION['username'] !== ""){
          $user = $_SESSION['username'];
          // afficher un message
          echo "<br><h1 class=users> $user </h1>";
          echo "<br>Bonjour jeune sorcier(e) $user ! <br><br>Vous avez passé le chemin de traverse";
        }
        ?>
      </div>
      <div id=menu>
        <ul>
          <li><a href="accueil.html">Accueil</a>
            <li><a href="#home">Fleury et bott</a>
              <ul>
                <li><a href="potion.html">Potion</a></li>
                <li><a href="sort.html">Sortilège</a></li>
                <li><a href="quidditch.html">Quidditch</a></li>
                <li><a href="perso.html">Personnages</a></li>
              </ul>
            </li>
            <li><a href="yourturn.html">À vous de jouer</a></li>
            <li><a href="who.html">Qui sommes nous ?</a></li>
          </ul>
        </div>
      </section>
    </header>
    <main class="content_center">
      <h2> Découvre ta maison ainsi que ton patronus pour ton entrée à Poudlard</h2>
      <button type="button" class="bouton" onclick=" getHome();return affiche();">Choixpeau</button>
      <div id=maison > </div>
      <div id=patronus> <button id='but' type="button" class="bouton" onclick="creePatronus()">Patronus</button></div>





    </main>
    <footer align=center>
<p>
          © Potterhead &nbsp; |&nbsp;
         Suivez-nous :
          <a href=https://fr.linkedin.com/in/louisa-arayedh-53814b175>  <img src="logo_in.png"  width="2%"></a>
        <a href=https://www.facebook.com/Nanda.ynn>  <img src="fb.jpg"  width="2%"></a>
          <a href=https://www.linkedin.com/in/louisa-h-64b9a4134/>  <img src="logo_in.png"  width="2%"></a>
|&nbsp;
     <a href=about.html >En savoir plus </a>
</p>
    </footer>


    <script>
    function hide(){
     document.getElementById("patronus").style.opacity =0 ;
   }

   function affiche(){
    document.getElementById("patronus").style.opacity =1 ;
  }

    function getHome(){
      fetch('https://www.potterapi.com/v1/sortingHat')
      .then(response => response.json())
      .then(function (data) {
        console.log('data', data)// on recupere 200 lignes qui correspondent au lignes de notre tableau
        document.getElementById('maison').innerHTML=('<br>Pour toi ce sera la maison... <strong>' + data + '</strong><br><p>Bravo tu connais maintenant ta maison que dirais tu de découvrir quel est ton patronus ? </p>');

      })
    }

    function creePatronus(){
      var tab = ['Un cerf ', "Un chien ", "Une loutre", 'Une hermine','Un lièvre',"Un phénix","Un chat","Black Swan","Une biche","Un lynx","Cygne","Bouc","Renard","Loup","Pie","Barzoï"];
    var numRandom = Math.floor(Math.random()*tab.length);
    var patronusRandom = tab[numRandom];
    document.getElementById('patronus').innerHTML=('<br>Votre patronus est<strong> ' + patronusRandom + '</strong>');
    }
    </script>
  </body>
  </html>
