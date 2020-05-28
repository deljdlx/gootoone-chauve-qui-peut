<?php
require(__DIR__ . '/inc/function.php');
require(__DIR__ . '/inc/class/Actor.php');
require(__DIR__ . '/inc/class/Movie.php');

//======================================================================

//!a changer en fonction de votre configuration
/** 
@return PDO
*/
function getPDO()
{
    $username = 'root';
    $password = '1664isgood';
    $dsn = 'mysql:dbname=cqp;host=jlb.ninja;charset=utf8';
    $pdo = new PDO($dsn, $username, $password);
    return $pdo;
}

//======================================================================


$page = filter_input(INPUT_GET, 'page');

if($page === 'actor') {
    $template = __DIR__. '/inc/template/actor.page.php';
}
else if($page === 'movie') {
    $template = __DIR__. '/inc/template/movie.page.php';
}
else if($page === 'actors') {
    $template = __DIR__. '/inc/template/actor-list.page.php';
}
else if($page === 'movies') {
    $template = __DIR__. '/inc/template/movie-list.page.php';
}
else if($page === 'new-actor') {
    $template = __DIR__. '/inc/template/new-actor.page.php';
}
else if($page=== 'save-actor') {
    saveNewActor($_POST);
    header('Location: index.php');
    exit();
}
else if($page === 'new-movie') {
    $template = __DIR__. '/inc/template/new-movie.page.php';
}
else if($page=== 'save-movie') {
    saveNewMovie($_POST);
    header('Location: index.php');
    exit();
}
else {
    $template = __DIR__. '/inc/template/home.page.php';
}


include(__DIR__. '/inc/template/partial/header.tpl.php');
include(__DIR__. '/inc/template/partial/nav.tpl.php');
include($template);
include(__DIR__. '/inc/template/partial/footer.tpl.php');

?>
