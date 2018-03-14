<?php
require_once "includes/contentArray.php";
include "includes/header.php";
/**
 * @ref http://php.net/manual/fr/function.http-response-code.php
 */
// gestion de la page par defaut (pas de param page= dans l'url
// gestion de la page appelee (param page=)
// gestion de l'affichage de la page par defaut si la page appelee n'existe pas (avec le status 404 http)
define('APP_DEFAULT_PAGE', $page = $content[key($content)]);
// si le PATH_INFO contient une valeur, crée une variable $page avec le contenu de la PATH_INFO sans le "/"
if(!empty($content[substr($_SERVER["PATH_INFO"],1)])) {
    $page = $content[substr($_SERVER["PATH_INFO"], 1)];
}
// si PATH_INFO vide ou inconnu, vas sur la page par défaut
else{
    $page = APP_DEFAULT_PAGE;
}
if(empty ($page)){
    // renvoi du code http 404 si page demande inexistante
    http_response_code(404);
}
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
