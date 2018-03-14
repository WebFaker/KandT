<?php require_once "functions.php"?>
<?php require_once "contentArray.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                // pour chaque partie du contentArray dans $content avec une key, met les dans une variable $headerContent
                ?>
                <?php foreach ($content as $key => $headerContent):
                    // crée une li avec comme url la $key et comme nom le title de $headerContent
                    echo li($key, $headerContent['title']);
                endforeach ?>


            </ul>
        </div>
    </div>
</nav>
