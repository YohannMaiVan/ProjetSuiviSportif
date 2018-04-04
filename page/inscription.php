<?php
require __DIR__ .'/../model/user.php';

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
              user::insert_user($name, $mail, $password);
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

require ('../view/inscription.html.php');
