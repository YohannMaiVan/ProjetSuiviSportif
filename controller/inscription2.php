<?php
try {

  $pdo = new PDO(
    "mysql:dbname=outil_suivi;host=localhost;charset=utf8", 'root', 'simplonco');

} catch (PDOException $e) {


  echo 'Connection failed : ' . $e->getMessage();

  $pdo = null;
}
require ('../view/inscription.html.php');

if (isset($_POST['form_inscription']))
{
    if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['password2']))
    {
      $name = htmlspecialchars($_POST['name']);
      $mail = htmlspecialchars($_POST['mail']);
      $password = sha1($_POST['password']);
      $password2 = sha1($_POST['password2']);

      $pseudolength = strlen($name);
      if ($pseudolength <= 255)
      {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
            if ($password==$password2)
            {
                $insertuser = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
                $insertuser->execute(array($name, $mail, $password));
                $erreur = "Votre compte a bien été crée";

            }
            else
            {
              $erreur = "Vos mots de passe ne sont pas identiques";
            }
        }
        else
        {
          $erreur = "Votre adresse mail n'est pas valide!";
        }
      }
      else
      {
          $erreur = "Votre nom ne doit pas dépasser les 255 caractères";
      }
    }

    else
    {
      $erreur = "Tous les champs doivent être remplis";
    }
}

if(isset ($erreur))
{
  echo $erreur;
}
