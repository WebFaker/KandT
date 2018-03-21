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
$pageKey = $_GET['page'] ?? APP_DEFAULT_PAGE;
if (!isset($content[$_GET['page']])) {
    // recuperation de la page par defaut
    $page = &$content[APP_DEFAULT_PAGE];
} else {
    // recuperation de la page demandee
    $page = &$content[$pageKey] ?? null;
}
if(null === $page){
    // renvoi du code http 404 si page demande inexistante
    http_response_code(404);
}
include "includes/header.php";
?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?=$page['h1']?></h1>
            <p><?=$page['p']?></p>
            <span class="label <?=$page['span-class']?>"><?=$page['span-text']?></span>
        </div>
        <img class="img-thumbnail" alt="<?=$page['img-alt']?>" src="img/<?=$page['img-src']?>" data-holder-rendered="true">
    </div>
<?php
include "includes/footer.php";
?>
