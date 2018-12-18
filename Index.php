<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php
echo "<h1> <center> list des controleurs </center> </h1>";
include 'cnx.php';
$sql= $cnx->prepare("select id,nom,prenom from controleur");
$sql->execute();
echo "<table width='80%' cellspacing='5'>";
foreach ($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne) {
echo "<tr>";
echo "<td align='left'>" . $ligne['nom'] . "</td>";
echo "<td align='left'>" . $ligne['prenom'] . "</td>";
echo "<td> <a href='index.php?id=".$ligne['id']."'>tous les clients </a> </td>";
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>