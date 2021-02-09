<!DOCTYPE html>

<?php $title = 'Envoi message';
ini_set("display_errors", 1);
error_reporting(E_ALL);

ob_start();
echo $_SESSION['username_user2'];
?>
<br>


<form action="index.php?action=go" method="post">
    <input type="text" name="message1" id="message" />
    <input type="submit" value="Envoyer" />
</form>


<?php 
$content = ob_get_clean();
require('template.php'); 
?>
