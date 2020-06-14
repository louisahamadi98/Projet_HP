<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" LANG="fr" content="html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mettre a l'echelle pour le telephone -->
  <link rel="stylesheet" href="style_hp.css">
  <title>Connexion - Potter</title>
</head>
<body class=login>
<header>
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
</header>
<main class=center>
  <img src="key.png" width=50px>

  <h1> Connecte toi <br> <br> avec tes clés magiques </h1><br>

  <form action="verification.php" method="POST">

    <div>
    <div>
    <span><b>Pseudo</b></span><br>
                <input class=connect type="text" placeholder="" name="username" required></div>
                <div>
                <span><b>Mot de passe</b></span><br>
                <input class=connect type="password" placeholder="" name="password" required>
                </div>
                <div>
                   <input type="submit" id='submit' value='LOGIN' class=envoie>

                  <p>Tu as reçu ta lettre récemment? <a href="inscription.php">Crée ton compte !</a></p>


                  <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                   </div>
</div>
</form>
<footer align=center>
<p>
      © Potterhead &nbsp; |&nbsp;
     Suivez-nous :
    <a href=instagram.fr>  <img src="insta_logo.jpg"  width="2%"></a>
<a href=facebook.fr>  <img src="fb.jpg"  width="2%"></a>
|&nbsp;
 <a href=about.html >En savoir plus </a>
</p>
</footer>

</html>






</body>
