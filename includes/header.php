<?php require_once "functions.php"?>
<?php require_once "./includes/connexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>

<?php
$stmt = $conn->prepare(
        "SELECT 
                    id, 
                    title, 
                    h1, 
                    p, 
                    spanclass, 
                    spantext, 
                    imgalt, 
                    imgsrc, 
                    navtitle, 
                    slug 
                    FROM KandT
                    ");

$stmt->execute()
?>

<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
                <li>
                    <a href="index.php?id=<?= $row["id"]?>">
                        <p><?= $row["title"]?></p>
                    </a>
                </li>
                <?php endwhile;?>
            </ul>
        </div>
    </div>
</nav>