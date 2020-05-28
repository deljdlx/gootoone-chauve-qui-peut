<div class="col-sm-6 col-md-4 d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
        <a href="index.php?page=movie&id=<?=$movie->id?>" class="movie-thumnail block-20" style="background-image: url('<?=$movie->picture?>');">
        </a>
        <div class="text mt-3 float-right d-block">

            <h3 class="heading"><a href="index.php?page=movie&id=<?=$movie->id?>"><?=$movie->title?></a>
            </h3>
            <p>
                <?=$movie->getResume()?> <a href="index.php?page=movie&id=<?=$movie->id?>">[lire la suite]</a>
            </p>
        </div>
    </div>
</div>