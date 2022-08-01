
<?php
$bdd = new PDO("mysql:host=localhost;dbname=happydays;charset=utf8",'root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = $bdd->prepare("SELECT email FROM users");
$sql->execute();
$emails = $sql->fetchAll();

echo json_encode($emails);
?>