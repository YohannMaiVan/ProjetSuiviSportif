<?php
class user {

public static function coDatabase() {
	try {


	  require __DIR__ .'/config.php';

	  $pdo = new PDO(
	    "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
	  );

	} catch (PDOException $e) {


	  echo 'Connection failed : ' . $e->getMessage();

	  $pdo = null;
	}

	return $pdo;
}

public static function createStatement($sql) {
    $pdo_statement = null;

    $pdo = self::coDatabase();

    if ($pdo)
    try {
      $pdo_statement = $pdo->prepare($sql);
    } catch (PDOException $e) {
      echo 'Connection failed : ' . $e->getMessage();
    }
    return $pdo_statement;
}
// WHERE id="'.$workouts['user_id'].'"'

		public static function insert_user($name, $mail, $password)
		{
			  try {
			$pdo_statement = self::createStatement('INSERT INTO users (name, email, password) VALUES (:name, :mail, :password)');

			$pdo_statement->bindparam(':name', $name) &&
			$pdo_statement->bindparam(':mail', $mail) &&
			$pdo_statement->bindparam(':password', $password) &&
			$pdo_statement->execute();
		} catch (PDOException $e) {
		}

		return $pdo_statement;
		}
  }
