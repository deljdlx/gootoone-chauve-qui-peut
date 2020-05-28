<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">I like eggs</h1>
                <h2 class="mb-4">Nouveau crâne d'oeuf</h2>
            </div>
        </div>

        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="?page=save-actor" method="post" class="bg-light p-4 p-md-5 contact-form">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Prénom" name="firstname" required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nom" name="lastname">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Surnom" name="surname">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nationnalité" name="nationnality">
                    </div>

                    <div class="form-group">
                        <textarea id="" cols="30" rows="7" class="form-control" placeholder="Description" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Image" name="picture" id="new-actor-picture-url" />
                    </div>

                    <div>
                        
                    </div>


                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Date de naissance</span>
                        </div>
                        <input class="form-control" placeholder="Date de naissance" name="birthdate" type="date">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Date de décès</span>
                        </div>
                        <input class="form-control" placeholder="Date de naissance" name="death" type="date">
                    </div>



                    <div class="form-group">
                        <input type="submit" value="Enregistrer" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div id="new-actor-picture" class="img" style="background-image: url(assets/images/egg.jpg);"></div>
            </div>
        </div>
    </div>
</section>
		