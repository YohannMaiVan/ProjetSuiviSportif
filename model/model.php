 <?php
function initDatabase() {
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

function prepareStatement($sql) {
    $pdo_statement = null;

    $pdo = initDatabase();

    if ($pdo)
    try {
      $pdo_statement = $pdo->prepare($sql);
    } catch (PDOException $e) {
      echo 'Connection failed : ' . $e->getMessage();
    }
    return $pdo_statement;
}

class workout {

  public function fetchWorkouts() {

    try {

          $statement = prepareStatement("SELECT * FROM workouts INNER JOIN users WHERE workouts.user_id = users.id");

          $statement->execute();

          $result = $statement->fetchAll();
    } catch (PDOException $e) {

    }
    return $result;
  }

}
