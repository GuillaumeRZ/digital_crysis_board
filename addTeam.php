<?php include 'header.php'; ?>

<h1>Ajout d'une équipe - Digital Crysis</h1>

<form name='addTeam' method='post' action='addTeamOK.php'>
  <input name="teamname" type="text" placeholder="Nom de l'équipe"/>
  <input name="points" type="text" value="50"/>
  <input name="submit" type="submit" value="Ajouter cette équipe"/>
</form>

<?php
  $bdd = null;
  include 'footer.php';
?>
