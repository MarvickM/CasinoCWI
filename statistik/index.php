<?php include '../template/head.php'; ?>
<?php include '../template/navigation.php'; ?>

<?php
$db = mysqli_connect("localhost", "root", "", "Kasse");
if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}


$ergebnis = mysqli_query($db, "SELECT ID, Vorname, Nachname, Geld FROM `Kasse`;");

while($zeile = mysqli_fetch_object($ergebnis))
{
  echo "<h1>$zeile->Vorname</h1>";
  echo "<br />";
}
?>

<?php include '../template/footer.php'; ?>