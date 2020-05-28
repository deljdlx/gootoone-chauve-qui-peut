<?php

$movies = getMovies();

?>

<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">We love eggs</h1>
                <h2 class="mb-4">Les films avec des chauves</h2>
            </div>
        </div>


        <div class="row d-flex">
            <?php
                foreach($movies as $index => $movie) {
                    require(__DIR__.'/partial/movie-list/movie.tpl.php');
                }
            ?> 
        </div>
    </div>
</section>