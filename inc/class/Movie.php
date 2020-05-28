<?php

class Movie
{

    public $id;
    public $title;
    public $description;
    public $picture;
    public $date;
    public $rating;
    public $budget;
    public $recette;

    public $actor_id;



    public function getResume($length = 20)
    {
        $words = explode(' ', $this->description);
        $words = array_slice($words, 0, $length);
        return implode(' ', $words);
        
        
    }


    public function getActor()
    {
        return getActorById($this->actor_id);
    }


    //!pas important si vous ne comprenez pas cette méthode. Elle transforme les retours à là ligne en balises <p>
    public function getDescription()
    {
        $description = preg_replace("`\n+`", '</p><p>', $this->description);
        return '<p>' . $description . '</p>';
    }

}




