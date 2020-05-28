<?php

function getMonthFr($monthNumber)
{
    $monthes = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    return $monthes[$monthNumber -1];
}



//=========================================================================


function getActors()
{
    $data = fetchMany("SELECT * FROM `actor`");
    $actors = [];
    foreach ($data as $values) {
        $actor = new Actor();
        $actor->id = $values['id'];
        $actor->firstname = $values['firstname'];
        $actor->lastname = $values['lastname'];
        $actor->surname = $values['surname'];
        $actor->nationnality = $values['nationnality'];
        $actor->description = $values['description'];
        $actor->picture = $values['picture'];
        $actor->birthdate = $values['birthdate'];
        $actor->death = $values['death'];
        $actors[] = $actor;
    }
    return $actors;

    //*il était possible de faire une boucle plus maline
    /*
    foreach ($data as $values) {
        $actor = new Actor();
        foreach($values as $property => $value) {
            $actor->$property = $value;
        }
        $actors[] = $actor;
    }
    */
}


function getActorById($id)
{
    $data = fetchOne("SELECT * FROM `actor` WHERE `id`=".$id);

    $actor = new Actor();
    $actor->id = $data['id'];
    $actor->firstname = $data['firstname'];
    $actor->lastname = $data['lastname'];
    $actor->surname = $data['surname'];
    $actor->nationnality = $data['nationnality'];
    $actor->description = $data['description'];
    $actor->picture = $data['picture'];
    $actor->birthdate = $data['birthdate'];
    $actor->death = $data['death'];

    return $actor;
}

function saveNewActor($data)
{
    $pdo = getPDO();

    $query = "
        INSERT INTO `actor` (
            `firstname`,
            `lastname`,
            `surname`,
            `nationnality`,
            `description`,
            `picture`
        ) VALUES (
            ".$pdo->quote($data['firstname']).",
            ".$pdo->quote($data['lastname']).",
            ".$pdo->quote($data['surname']).",
            ".$pdo->quote($data['nationnality']).",
            ".$pdo->quote($data['description']).",
            ".$pdo->quote($data['picture'])."
        )
    ";

    $pdo->exec($query);
    $lastId = $pdo->lastInsertId();

    if(strtotime($_POST['birthdate']) !== false) {
        $query = "UPDATE `actor` set `birthdate`=".$pdo->quote($_POST['birthdate']) . ' WHERE id='.$lastId;
        $pdo->exec($query);
    }

    if(strtotime($_POST['death']) !== false) {
        $query = "UPDATE `actor` set `death`=".$pdo->quote($_POST['death']) . ' WHERE id='.$lastId;
        $pdo->exec($query);
    }
}

//=========================================================================
function getMovieById($id)
{
    $data = fetchOne("SELECT * FROM `movie` WHERE `id`=".$id);

    $movie = new Movie();

    foreach($data as $property => $value) {
        $movie->$property = $value;
    }
    return $movie;
}

function getMovies()
{
    $data = fetchMany("SELECT * FROM `movie`");

    $movies = [];

    foreach($data as $values) {
        $movie = new Movie();

        foreach($values as $property => $value) {
            $movie->$property = $value;
        }        
        $movies[] = $movie;
    }
    return $movies;
}


function getMovieByActorId($id)
{
    $data = fetchMany("SELECT * FROM `movie` WHERE actor_id=".$id);

    $movies = [];

    foreach($data as $values) {
        $movie = new Movie();

        foreach($values as $property => $value) {
            $movie->$property = $value;
        }        
        $movies[] = $movie;
    }
    return $movies;
}

function saveNewMovie($data)
{
    $pdo = getPDO();

    $query = "
        INSERT INTO `movie` (
            `title`,
            `description`,
            `picture`,
            `rating`,
            `duration`,
            `budget`,
            `recette`,
            `currency`,
            `actor_id`
        ) VALUES (
            ".$pdo->quote($data['title']).",
            ".$pdo->quote($data['description']).",
            ".$pdo->quote($data['picture']).",
            ".$pdo->quote($data['rating']).",
            ".$pdo->quote($data['duration']).",
            ".$pdo->quote($data['budget']).",
            ".$pdo->quote($data['recette']).",
            ".$pdo->quote($data['currency']).",
            ".$pdo->quote($data['actor_id'])."
        )
    ";

    $pdo->exec($query);
    $lastId = $pdo->lastInsertId();

    if(strtotime($_POST['date']) !== false) {
        $query = "UPDATE `movie` set `date`=".$pdo->quote($_POST['date']) . ' WHERE id='.$lastId;
        $pdo->exec($query);
    }
}

//=========================================================================
//!ces fonctions peuvent vous être utiles
//=========================================================================
function fetchOne($sql)
{
    $pdo = getPDO();
    $statement = $pdo->query($sql);
    return $statement->fetch(PDO::FETCH_ASSOC);
}


function fetchMany($sql)
{
    $pdo = getPDO();
    $statement = $pdo->query($sql);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

