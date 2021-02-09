<?php 
ini_set("display_errors", 1);
error_reporting(E_ALL);
session_start();

header("Location: ../index.php?action=ajout_amis");
/*
foreach($_SESSION['done'] as $array)
{
?>
<div>
     <em><a href=""><?= htmlspecialchars($array["username"]); ?></a></em>
</div>
<?php
};
*/
//var_dump($_SESSION['done']);
