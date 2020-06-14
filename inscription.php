<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="keywords" LANG="fr" content="html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- mettre a l'echelle pour le telephone -->
  <link rel="stylesheet" href="style_hp.css">
  <title>Inscription - Potter</title>
</head>
<body class=login>
  <?php
  require('config.php');
  if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
    // récupérer le nom d'utilisateur
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    // récupérer l'email
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    // récupérer le mot de passe
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "INSERT into `users` (username, email, type, password)
          VALUES ('$username', '$email', 'user', '$password')";
    $res = mysqli_query($conn, $query);
      if($res){
         echo "<div class='sucess'>
               <h3>Vous êtes inscrit avec succès.</h3>
               <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
         </div>";
      }
  }else{
  ?>

<header>
<div id=menu>
  <ul>
    <li><a href="accueil.html">Accueil</a>
  <li><a href="#home">Fleury et bott</a>
  <ul>
    <li><a href="#potion">Potion</a></li>
    <li><a href="sort.html">Sortilège</a></li>
    <li><a href="#quidditch">Quidditch</a></li>
  </ul>
  </li>
  <li><a href="yourturn.html">À vous de jouer</a></li>
  <li><a href="#who">Qui sommes nous ?</a></li>
</ul>
</div>
</header>
<main class=center>
  <img src="logo_glasse.png" width=200px>

  <h1> Inscrit toi <br> <br> seulement si tu n'est pas un Moldus ! </h1><br>

  <form action="" method="POST">

    <div>
    <div>
               <span><b>Pseudo </b></span><br>
                <input class=connect type="text" placeholder="" name="username" id=username required></div>
                <span><b>Adresse mail </b></span><br>
                <input class=connect type="text" placeholder="" id=mail name="email" required>
                </div>
                <div>
                <span><b>Mot de passe </b></span><br>
                <input class=connect type="password" name="password" required>
                </div>
                <div>

                <div><button type="submit" id='submit' onclick="return verif_champ()" class=envoie value='INSCRIPTION'>
                  INSCRIPTION</button>


                   </div>
                   <p>Déjà inscrit?
                    <a href="login.php">Connectez-vous ici</a></p>
</div>
</form>

<script>
function verif_mail(mail)
{ // ici on verifie que notre email suit bien la reggex
  var myReggex =  /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  return myReggex.test(mail);
}
function verif_champ()
{
  var username = document.getElementById("username").value;
  var mail = document.getElementById("mail").value;
  if (username == "" || verif_mail(mail) == false)
  {
    alert("Un champ n'est pas remplie ou mal remplie");
    return false;
  }
  return Ajouter(); // on ajoute la ligne uniquement si les infos sont vérifié
}
</script>

<?php } ?>
</body>
</html>
