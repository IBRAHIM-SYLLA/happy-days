<?php
require_once '../Controllers/admin.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <?php foreach($allEvents as $allEvent): ?>
        <tr>
            <td class="id-row"><?= $allEvent['id']; ?></td>
            <td class="fn-row"><?= $allEvent['name']; ?></td>
            <td class="ln-row"><?= $allEvent['date']; ?></td>
            <td class="link-row"><a href="lireEvent.php?id=<?= $allEvent['id']?>"><button type="submit">Lire</button></a></td>
            <td class="link-row"><a href="modifierEvent.php?id=<?= $allEvent['id']?>"><button type="submit">Modfier</button></a></td>
            <td class="link-row"><a href="deleteEvent.php?id=<?= $allEvent['id']?>"><button type="submit">Supprimer</button></a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>