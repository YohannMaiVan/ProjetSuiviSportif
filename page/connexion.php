<?php
session_start();
ob_start();
require ('../model/config.php');
require ('../view/connexion.html.php');

if(isset($_POST['formconnexion']))
{
    if(!empty($_POST['mailconnect']) AND !empty($_POST['passwordconnect']))
    {
        $mailconnect = htmlspecialchars($_POST['mailconnect']);
        $passwordconnect = sha1($_POST['passwordconnect']);

        // Je vérifie si L'user existe bien dans la bdd
        $requser = $pdo->prepare("SELECT * FROM users WHERE email =? AND password =?");
        $requser->execute(array($mailconnect, $passwordconnect));
        // Cette fonction va compter le nombre de rangées qui existe ac les infos qu'a saisi l'utilisateur
        $userexist = $requser->rowCount();
        if ($userexist == 1)
        {
          $userinfo = $requser->fetch();
          // Dans $userinfo je fais un fetch pr recevoir les infos de requser
          // Je place ces infos dans des variables de session
          $_SESSION['id'] = $userinfo['id'];
          $_SESSION['name'] = $userinfo['name'];
          $_SESSION['email'] = $userinfo['email'];
          // je fais un header et je lui mets une variable qui va transiter à travers l'url
          // Cela redirige ensuite vers le Profil de l'user
          header("Location: profil.php?id=".$_SESSION['id']);
        }
        else
        {
            $erreur = "Mauvais mail ou mot de passe";
        }

    }
    else
    {
      $erreur = "Tous les champs doivent être remplis afin de se connecter";
    }
}

if(isset ($erreur))
{
  echo $erreur;
}
ob_end_flush();
