<div class="col-md-6 actor-movie movie-link" data-movie-id="<?=$movie->id?>">
    <div class="resume-wrap ftco-animate">
        <span class="date">
            <?=getMonthFr(date('m', strtotime($movie->date)))?>
            <?=date('Y', strtotime($movie->date))?>
        </span>
        <h2><?=$movie->title?></h2>

        <p class="mt-4">
            <img src="<?=$movie->picture?>"/>
        </p>
    </div>
</div>