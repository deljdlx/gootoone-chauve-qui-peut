<?php

$actors = getActors();

?>

<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Crâne d'oeufs</h1>
                <h2 class="mb-4">Les chauves</h2>
            </div>
        </div>


        <div class="row d-flex">


            <?php
                foreach($actors as $index => $actor) {
                    require(__DIR__.'/partial/actor-list/actor.tpl.php');
                }
            ?> 



        </div>
    </div>
</section>