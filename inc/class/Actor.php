<?php

class Actor
{

    public $id;
    public $firstname;
    public $lastname;
    public $surname;
    public $nationnality;
    public $description;
    public $picture;
    public $birthdate;
    public $death;



    public function getResume($length = 20)
    {
        $words = explode(' ', $this->description);
        $words = array_slice($words, 0, $length);
        return implode(' ', $words);
        
        
    }



    //!si vous ne comprenez pas ce code ce n'est pas grave , cette méthode calcule juste l'age de l'acteur
    public function getAge()
    {
        if($this->death) {
            $date = strtotime($this->death);
        }
        else {
            $date = time();
        }
        $currentYear =  date('Y', $date);
        $currentMonth =  date('m', $date);
        $currentDay =  date('d', $date);
        
        $time = strtotime($this->birthdate);
        $birthYear = date('Y', $time);
        $birthMonth = date('m', $time);
        $birthdDate = date('d', $time);
        $age = $currentYear - $birthYear;
        
        if(($currentMonth - $birthMonth) * 32 - ($currentDay - $birthdDate) < 0) {
            $age--;
        }

        return $age;
    }

    //!pas important si vous ne comprenez pas cette méthode. Elle transforme les retours à là ligne en balises <p>
    public function getDescription()
    {

        $description = preg_replace("`\n+`", '</p><p>', $this->description);

        return '<p>' . $description . '</p>';
    }


}



