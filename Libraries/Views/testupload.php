<?php
// on vérifie si un fichier a été envoyé
if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
    // on a reçu l'image
    // var_dump($_FILES);

    //  on procède au vérification
    // on vérifie toujours l'extention ET le type Mime
    $allowed = [
        "jpg" => "image/jpeg",
        "jpeg" => "image/jpeg",
        "png" => "image/png",
    ];

    $filename = $_FILES["image"]["name"];
    $filetype = $_FILES["image"]["type"];
    $filesize = $_FILES["image"]["size"];

    $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    // On vérifie l'absence de l'éxtension dans les clés de $allowed
    if(!array_key_exists($extension, $allowed) || !in_array($filetype, $allowed)){
        // soit l'extension soit le type est incorrect
        echo "format de fichier incorrect";
    }

    // ici le type est correct
    // on limita a 1 mo
    if ($filesize > 1024 * 1024){
        echo "fichier trop lourd";
    }

    // grâce au fichier htaccess on a pas accés au dossier upload via l'url
    // On génère un nom unique
    $newname = md5(uniqid());
    // on génère le chemin complet
    $newfilename = __DIR__."/uploads/$newname.$extension";

    // on deplace le fichier en le rennomant
    if(!move_uploaded_file($_FILES["image"]["tmp_name"], $newfilename)){
        echo "l'upload a échoué";
    }

    // on interdit l'éxécution du fichier
    chmod($newfilename, 0644);

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Toujour mettre l'enctype pour un ty FILE !!!!!   -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fichier">Fichier</label>
        <input type="file" name="image" id="fichier">

        <button type="submit">Envoyer</button>
    </form>
</body>
</html>