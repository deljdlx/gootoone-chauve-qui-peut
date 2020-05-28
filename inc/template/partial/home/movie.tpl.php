<div class="col-md-<?=$size?> movie-thumnail movie-link" data-movie-id="<?=$movie->id?>">
    <div class="movie-thumnail project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?=$movie->picture?>);">
        <div class="overlay"></div>
        <div class="text text-center p-4">
            <h3><a href="index.php?page=movie&id=<?=$movie->id?>"><?=$movie->title?></a></h3>
        </div>
    </div>

</div>