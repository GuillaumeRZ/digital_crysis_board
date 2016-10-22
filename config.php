<?php include 'header.php'; ?>

<h1>Configurations - Digital Crysis</h1>
<p><i>La configuration est automatique, merci de ne rien toucher.</i></p>
<p><i>Une seule visite sur cette page est nécessaire.</i></p>

<?php
  /* Connect the Database */
  $user = 'digitalcrysis';
  $pass = '';

  try {
      $bdd = new PDO('mysql:host=localhost;dbname=digitalcrysis', $user, $pass);
      echo "Database connected. <br>";

      /* Creating table called "Teams" if not already created */
      $sql = "CREATE TABLE if not exists Teams (
        teamname VARCHAR(30) NOT NULL,
        points VARCHAR(30) NOT NULL
      )";
      $bdd->exec($sql);
      echo "Table 'Teams' in database created. <br>";

  } catch (PDOException $e) {
      echo "Contactez guillaume.remy-zephir@etu-webschoolfactory.fr <br>";
      print "Erreur de connexion à la base de données: " . $e->getMessage();
  }
?>

<a href="addTeam.php">Ajoutez une équipe</a>

<?php
  $bdd = null;
  include 'footer.php';
?>
