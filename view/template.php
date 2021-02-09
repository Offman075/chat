<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title><?= $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="public/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="public/css/acc1.css">

    
    <script src="public/js/jquery-1.11.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>

</head>
<body>
<div class="login-wrap">
    <div class="login-html">
        <p><a href="index.php?action=ajout_amis">Ajout_amis</a>
        <a href="index.php?action=message">Message<?php
        if($_SESSION['nb_mes'] != 0) { echo "(".$_SESSION['nb_mes'].")";} ?>
            </a> <a href="index.php?action=amis">Amis</a> 
            <a href="index.php?action=deconnect">Deconnecter</a> 
            <a href=""><?= "(".$_SESSION['username'].")"; ?></a></p>
        
        <?= $content ?>

    </div>
</div>
</body>
</html>
