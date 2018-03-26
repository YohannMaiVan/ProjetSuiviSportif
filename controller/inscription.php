<?php
require "../model/config.php";

if (isset($_POST["inscription"])) {

//Si l'user a cliqué sur le bouton inscription: on tente la connexion BDD
      try {


  	  $pdo = new PDO(
  	    "mysql:dbname=$dbname;host=$host;charset=utf8", $user, $password
  	  );
  	} catch (PDOException $e) {
  	  echo 'erreur : ' . $e->getMessage();

  	  $pdo = null;
  	}

//On tente ensuite de créer l'User dans la Table suite à son submit Inscription

      try {

        $sql="INSERT into USERS (name, mail, password) VALUES (:name, :mail, :password)";
        //Associer les champs du bouton inscription à notre requete SQL pr rentrer les champs dans la BDD
        $email = $_post["email"];
        $password = $_post["password"];

        $pdo->exec($sql);
        $statement = $pdo->prepare($sql);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':mail', $mail);
        $statement->bindParam(':password', $password);
        $statement->execute();
      } catch (PDOException $e) {
        echo 'pb.' . $e->getMessage();
      }


}
