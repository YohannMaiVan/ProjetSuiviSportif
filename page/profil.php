<?php
session_start();

require ('../model/config.php');

if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['id']);
    $requser = $pdo->prepare('SELECT * FROM users where id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
}
require ('../view/profil.html.php');
?>
