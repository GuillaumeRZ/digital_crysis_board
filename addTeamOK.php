<?php include 'header.php'; ?>

<h1>Liste des équipes - Digital Crysis</h1>

<?php
  /* Connect the Database */
  $user = 'digitalcrysis';
  $pass = '';
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=digitalcrysis', $user, $pass);
  } catch (PDOException $e) {
    print "Erreur de connexion à la base de données: " . $e->getMessage();
    die;
  }

  /* If submit button is pressed on addTeam.php page, add in db */
  if(isset($_POST['submit'])){
    $teamname = $_POST['teamname'];
    $teamname = mysql_real_escape_string($teamname);
    $points = $_POST['points'];
    $points = mysql_real_escape_string($points);

    /* We compare if the teamname already exists */
    $sql = "SELECT teamname FROM Teams";
    try {
      $stmt = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
      $stmt->execute();
      while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        /* Define if it's already added or not */
        if($teamname != $row[0]){
          $sql = "INSERT INTO Teams (teamname, points)
                 VALUES('$teamname', '$points')";
          $bdd->exec($sql);
          echo "La team " .$teamname. " a bien été ajouté ! <br>";
          break;
        }else{
          echo "La team " .$teamname. " existe déjà et n'a donc pas été ajouté <br>";
        }
      }
      $stmt = null;
    }catch (PDOException $e) {
      print $e->getMessage();
    }
  }
?>

<a href="displayTeam.php">Voir la liste</a>

<?php
  $bdd = null;
  include 'footer.php';
?>
