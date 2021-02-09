<!DOCTYPE html>
<?php
$title = 'Message';


ob_start();
    while ($donnees = $req->fetch())
    {
        if($donnees['id_user2'] == $_SESSION['id'])
        {
            $user2 = $add->table($donnees['id_user1']);
        }
        else{
            $user2 = $add->table($donnees['id_user2']);
        }
        $user2 = $user2->fetch();
        $last_message = $add->list_mes($donnees['id_last_mes']);
        $last_message = $last_message->fetch();

        $check2 = $add->check_new_mes1($_SESSION['id'],$last_message['id_disc']);
        $check2 = $check2->fetch();
?>


<div>
    <em><a href="index.php?action=affice&id3=<?= $user2['id']; ?>&id2=<?= $last_message['id_disc'];?>" value=>
    <?= htmlspecialchars($user2['username']); ?></a>
    <?php if($check2['nb_mes'] != 0) { echo "(".$check2['nb_mes'].")";} ?></em>
    <p><?= htmlspecialchars($last_message['content']); ?></p>
</div>
<?php
    } // Fin de la boucle des billets
    $req->closeCursor();



$content = ob_get_clean();

require('template.php'); ?>

