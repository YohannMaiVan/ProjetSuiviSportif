<?php

require __DIR__ .'/model/workout.php';

$result = workout::fetchWorkouts();

require __DIR__ .'/view/index.html.php';
