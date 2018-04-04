<?php

require __DIR__ .'/model/workout.php';

$result = workout::fetchWorkouts();
/*
$fetchWorkouts = new workout();

$result = $fetchWorkouts->fetchWorkouts();
/*
workout::fetchWorkouts();*/
/*$get_Users = new user();
$result_user = $get_Users->getUser();*/
require __DIR__ .'/view/index.html.php';
