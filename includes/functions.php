<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/02/2018
 * Time: 12:42
 */
/**
 * generates nav LI element
 * @param string $page page name with .php at the end
 * @param string $linkText text that goes in the link (d'uhhhh)
 */
function li($page, $linkText)
{
    $active = "";
    if($page === basename($_SERVER['PHP_SELF'])){
        $active = ' class="active"';
    }
?>
    <li<?=$active?>><a href="<?=$page?>"><?=$linkText?></a></li>
<?php
}
