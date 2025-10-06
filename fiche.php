<?php
$modele = strtolower(str_replace(' ', '', $_GET['modele'] ?? ''));

$data = json_decode(file_get_contents('../data/donnees.json'), true);

if(!isset($data[$modele])) {
    die("Modèle introuvable !");
}

$voiture = $data[$modele];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $voiture['nom']; ?> - TorqueZone</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <a href="../index.html"><h1>TorqueZone</h1></a>
    <div id="section">
      <a href="../others/comparer.html">Comparer</a>
      <a href="../others/par-annee.html">Par années</a>
      <a href="../others/profil.html">Profile</a>
      <a href="../others/donate.html">Faire un don</a>
    </div>

    <?php
    foreach($voiture['chapitres'] as $titre => $contenu) {
        echo "<h2>$titre</h2>";
        echo "<p>$contenu</p>";
    }
    ?>

    <footer>
        <br>© Arthur Jourdain Minoche<br>Tous droits réservés<br><br>
    </footer>
</body>
</html>
