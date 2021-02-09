<!DOCTYPE html>

<?php $title = 'Ajout amis'; ?>

<?php ob_start(); ?>
 
    <?php
        while ($donnees = $req->fetch())
        {
            //$checkamis=$add->check_amis();
            //$checkamis=$checkamis->fetch();
            $vari="ajouter";
            /*if($donnees['id'] == $checkamis['id_user2']){ $vari="annuler" ; }
            else{ $vari="ajouter";}*/
    ?>
    <div>
        <em><a href=""><?= htmlspecialchars($donnees['username']); ?></a></em>
        <form action="index.php?action=ajouter&id4=<?= $donnees['id'] ;?>" method="POST">
            <input type="submit" name="ajouter" value="<?= $vari; ?>">
        </form>
    </div>
    <br>
    <?php
        } // Fin de la boucle des billets
        $req->closeCursor();
    ?>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>



