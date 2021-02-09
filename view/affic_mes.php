<?php $title = 'Amis';

ob_start();
 

while ($donnees = $req->fetch())
    {
        $user2 = $add->table($donnees['id_user1']);
        $user2 = $user2->fetch();
?>

<div>
    <a href="" value=><?= htmlspecialchars($user2['username']); ?></a>
    <p><?= htmlspecialchars($donnees['content']); ?></p>
</div>
<?php
    } // Fin de la boucle des billets
$req->closeCursor();
?>
<form action="index.php?action=go" method="post">
    <input type="text" name="message1" id="message" />
    <input type="submit" value="Envoyer" />
</form>


<?php
$content = ob_get_clean();
require('template.php'); ?>