<?php
$id = filter_input(INPUT_GET, 'id');
$actor = getActorById($id);
$movies =getMovieByActorId($id);

$time = strtotime($actor->birthdate);

$birthdate =
    date('d', $time) . ' ' .
    getMonthFr(date('m', $time)) . ' ' .
    date('Y', $time)
;
if($actor->death) {
    $deathTime = strtotime($actor->death);
    $deathdate =
        date('d', $deathTime) . ' ' .
        getMonthFr(date('m', $deathTime)) . ' ' .
        date('Y', $deathTime)
    ;
}
?>


<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex">

            <div class="actor-picture col-12 col-md-6" style="background-image:url(<?= $actor->picture?>);">
                <div class="img d-flex align-self-stretch align-items-center" ></div>
            </div>

            <div class="col-md-6 col-12">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big"><?= $actor->surname?></h1>
                        <h2 class="mb-4"><?= $actor->firstname. ' ' . $actor->lastname?></h2>
                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex"><span>Identité :</span> <span><?= $actor->firstname. ' ' . $actor->lastname?></span></li>
                            <li class="d-flex"><span>Nationnalité :</span> <span><?=$actor->nationnality?></span></li>
                            <li class="d-flex"><span>Naissance :</span> <span><?=$birthdate?></span></li>
                            <?php
                                if($actor->death) {
                                    echo '<li class="d-flex"><span>Décès :</span> <span>' . $deathdate . '  à l\'age de ' . $actor->getAge() . ' ans</span></li>';
                                }
                                else {
                                    echo '<li class="d-flex"><span>Age :</span> <span>' . $actor->getAge() . ' ans</span></li>';
                                }
                            ?>
                            
                        </ul>
                    </div>
                </div>
            </div>



        </div>

        <div class="row d-flex">
            <div class="col-12 mt-5">
                <?=$actor->getDescription()?>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <?php
            foreach($movies as $index => $movie) {
                require(__DIR__.'/partial/actor/movie.tpl.php');
            }

            ?>

        </div>
           
    </div>


</section>
