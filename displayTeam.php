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

    /* Display every data in "Teams" table */
    $sql = "SELECT teamname, points FROM Teams";
    try {
      $stmt = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
      $stmt->execute();
      while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $data = "TeamName: ". $row[0] . " Points: " . $row[1] . "<br>";
        print $data;
      }
      $stmt = null;
    }
    catch (PDOException $e) {
      print $e->getMessage();
    }
    
  $bdd = null;
  include 'footer.php';
?>
