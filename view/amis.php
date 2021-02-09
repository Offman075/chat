<!DOCTYPE html>

<?php $title = 'Amis';

ob_start();
 

while ($donnees = $req->fetch())
    {
        $mess = $add->get_mess2($donnees['id'],$_SESSION['id']);
        $mess = $mess->fetch();
?>

<div>
    <em><a href="index.php?action=affice&id3=<?= $donnees['id']; ?>&id2=<?= $mess['id']; ?>" value=><?= htmlspecialchars($donnees['username']); ?></a></em>
</div>
<?php
    } // Fin de la boucle des billets
$req->closeCursor();


$content = ob_get_clean();
require('template.php'); ?>



