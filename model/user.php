<?php

function coDatabase() {
	try {


	  require 'config.php';

	  $pdo = new PDO(
	    "mysql:dbname=outil_suivi;host=localhost;charset=utf8", 'root', 'simplonco'
	  );

	} catch (PDOException $e) {


	  echo 'Connection failed : ' . $e->getMessage();

	  $pdo = null;
	}

	return $pdo;
}

function createStatement($sql) {
    $pdo_statement = null;

    $pdo = coDatabase();

    if ($pdo)
    try {
      $pdo_statement = $pdo->prepare($sql);
    } catch (PDOException $e) {
      echo 'Connection failed : ' . $e->getMessage();
    }
    return $pdo_statement;
}
// WHERE id="'.$workouts['user_id'].'"'

class user {

    public function getUser()
    {
      try {

            $statement = createStatement('SELECT * FROM workouts INNER JOIN users WHERE workouts.user_id = users.id');

            $statement->execute();

            $result_user = $statement->fetchAll();
      } catch (PDOException $e) {

      }
      return $result_user;
    }
  }
