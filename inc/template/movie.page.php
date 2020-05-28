<?php
$id = filter_input(INPUT_GET, 'id');
$movie = getMovieById($id);
$actor = $movie->getActor();

$time = strtotime($movie->date);
$date = getMonthFr(date('m', $time)). ' ' .date('Y', $time);

//!petit code pour afficher le second mot du titre en jaune
$words = explode(" ", $movie->title);
if(count($words) > 1) {
    $words[1] = '<span>' . $words[1] . '</span>';
    $title = implode(" ", $words);
}
else {
    $title = $movie->title;
}
?>

<section class="movie-picture ftco-section ftco-hireme img" style="background-image: url(<?=$movie->picture?>)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">

            <h2><?=$title?></h2>

            </div>
        </div>
    </div>
</section>



<section class="movie-values ftco-section ftco-no-pt ftco-no-pb ftco-counter img mt-5">
    <div class="container">

        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
            <h1 class="big big-2"><?=$movie->title?></h1>
            <h2 class="mb-4">Fiche technique</h2>

            </div>
        </div>


        <div class="row d-md-flex align-items-center">
            <?php
            if($movie->budget) {
                require(__DIR__.'/partial/movie/budget.tpl.php');
            }
            if($movie->recette) {
                require(__DIR__.'/partial/movie/recette.tpl.php');
            }
            if($movie->budget && $movie->recette) {
                require(__DIR__.'/partial/movie/rentability.tpl.php');
            }
            ?>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">

            <div class="col-md-6">
                <div class="resume-wrap ftco-animate">
                    <span class="date">Date de sortie</span>
                    <h2><?=$date?></h2>
                    <p class="mt-4"><?=$movie->getDescription()?></p>
                </div>
            </div>

            <div class="col-md-6 actor-link" data-actor-id="<?=$actor->id?>">
                <div class="resume-wrap ftco-animate movie-actor">
                    <span class="date">Le chauve</span>
                    <h2><?=$actor->firstname.' '. $actor->lastname?></h2>
                    <img src="<?=$actor->picture?>"/>
                </div>
            </div>


        </div>
    </div>


</section>
