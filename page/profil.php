<?php
session_start();

require __DIR__ .'/../model/user.php';

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
  $userinfo = user::profil_user();
}
require ('../view/profil.html.php');
?>
