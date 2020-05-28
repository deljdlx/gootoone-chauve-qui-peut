<div class="col-sm-6 col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
        <a href="index.php?page=actor&id=<?=$actor->id?>" class="block-20 actor-thumnail" style="background-image: url('<?=$actor->picture?>');">
        </a>
        <div class="text mt-3 float-right d-block">

            <h3 class="heading"><a href="index.php?page=actor&id=<?=$actor->id?>"><?=$actor->firstname . ' ' . $actor->lastname?></a>
            </h3>
            <p>
                <?=$actor->getResume()?> <a href="index.php?page=actor&id=<?=$actor->id?>">[lire la suite]</a>
            </p>
        </div>
    </div>
</div>