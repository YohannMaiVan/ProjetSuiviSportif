<?php

require ('model/config.php');
require "model/model.php";
require "model/user.php";

$fetchWorkouts = new workout();

$result = $fetchWorkouts->fetchWorkouts();
var_dump($result);
/*$get_Users = new user();
$result_user = $get_Users->getUser();*/
require "view/index.html.php";

?>
