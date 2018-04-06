 <?php
 class workout {
public static function initDatabase() {
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
public static function prepareStatement($sql) {
    $pdo_statement = null;
    $pdo = self::initDatabase();
    if ($pdo)
    try {
      $pdo_statement = $pdo->prepare($sql);
    } catch (PDOException $e) {
      echo 'Connection failed : ' . $e->getMessage();
    }
    return $pdo_statement;
}

public static function fetchWorkouts() {
    try {
          $statement = self::prepareStatement("SELECT * FROM workouts INNER JOIN users WHERE workouts.user_id = users.id ORDER BY workouts.id DESC");
          $statement->execute();
          $result = $statement->fetchAll();
    } catch (PDOException $e) {
    }
    return $result;
  }

public static function createWorkout() {
    try {
      $get_user = $_SESSION['id'];
      $my_workout_title = htmlspecialchars($_POST['my_workout_title']);
      $my_workout_content = htmlspecialchars($_POST['my_workout_content']);

        $pdo_statement = self::prepareStatement('INSERT INTO workouts (title, content, created_at, user_id)
        VALUES (:title, :content, NOW(), :user_id)');

            $pdo_statement->bindParam(':title', $my_workout_title) &&
            $pdo_statement->bindParam(':content', $my_workout_content) &&
            $pdo_statement->bindParam(':user_id', $get_user) &&
            $pdo_statement->execute();
      //on passe nos paramètres dans un tableau
    } catch (PDOException $e) { $e->getMessage();
    }
    return $pdo_statement;

}

}
