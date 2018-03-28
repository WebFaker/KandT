<?php
require_once "includes/contentArray.php";
/**
 * @ref http://php.net/manual/fr/function.http-response-code.php
 */
// gestion de la page par defaut (pas de param page= dans l'url
// gestion de la page appelee (param page=)
// gestion de l'affichage de la page par defaut si la page appelee n'existe pas (avec le status 404 http)
define('APP_DEFAULT_PAGE', 'el-miedo-de-los-teletubbies');
// la page par defaut n'existe pas, horreur, malheur
if (!isset($content[APP_DEFAULT_PAGE])) {
    die('omfg');
}

include "includes/header.php"; ?>

<?php

if(isset($_GET["id"])){
    $id = $_GET["id"];
}

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
                    WHERE id=$id");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?=$row['h1']?></h1>
            <p><?=$row['p']?></p>
            <span class="label <?=$row['spanclass']?>"><?=$row['spantext']?></span>
        </div>
        <img class="img-thumbnail" alt="<?=$row['imgalt']?>" src="img/<?=$row['imgsrc']?>" data-holder-rendered="true">
    </div>
<?php
include "includes/footer.php";
?>
