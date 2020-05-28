<?php
$actors = getActors();
?>
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">I like eggs</h1>
                <h2 class="mb-4">Nouveau film avec un crâne d'oeuf</h2>
            </div>
        </div>

        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="?page=save-movie" method="post" class="bg-light p-4 p-md-5 contact-form">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Titre" name="title" required>
                    </div>


                    <div class="form-group">
                        <textarea id="" cols="30" rows="7" class="form-control" placeholder="Description" name="description"></textarea>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Date de sortie</span>
                        </div>
                        <input class="form-control" placeholder="Date de naissance" name="date" type="date">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Image" name="picture" id="new-movie-picture-url" />
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Note" name="rating" />
                    </div>


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Le chauve</label>
                        </div>
                        <select class="custom-select" id="actor_id" name="actor_id">
                            <option selected>Choose...</option>
                            <?php
                                foreach($actors as $actor) {
                                    echo '<option data-picture="'.$actor->picture.'" value="' . $actor->id .'">' . $actor->firstname .' ' . $actor->lastname . '</option>';
                                }
                            ?>
                        </select>
                        <div id="actor-picture" class="mt-1"></div>
                    </div>



                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Durée en minutes" name="duration" type="number"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Budget" name="budget" type="number"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Recette" name="recette" type="number"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Symbole de la devise" name="currency"/>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Enregistrer" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="new-movie-picture" class="img" style="background-image: url(assets/images/monk.webp);"></div>
            </div>
        </div>
    </div>
</section>
		