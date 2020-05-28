<?php


$actors = getActors();
shuffle($actors);


$movies = getMovies();
shuffle($movies);

?>
	  
	  

      

<section class="actor-carousel container">
    <div class="home-slider  owl-carousel">
        <?php
        foreach($actors as $actor) {
            require(__DIR__ . '/partial/home/actor.tpl.php');
        }
        ?>
    </div>
</section>

 

 

    <section class="ftco-section ftco-project" id="projects-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Crânes d'oeuf</h1>
            <h2 class="mb-4">Les films</h2>
          </div>

        </div>
    		<div class="row">
                <?php

                foreach($movies as $index => $movie) {
                    if(($index%4 === 0) || ($index%4 === 3)){
                        $size = 4;
                    }
                    else {
                        $size = 8;
                    }
                    require(__DIR__.'/partial/home/movie.tpl.php');

                    //!on affiche que 6 films
                    if($index === 5 ) {
                        break;
                    }
                }
                ?>
    		</div>
    	</div>
    </section>



