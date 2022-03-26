<?php

abstract class User {
    protected $score = 0;
    protected $numberOfArticles = 0;

    public function setNumberArticle($int){
        $numberOfArticles = (int)$int;
        $this -> numberOfArticles = $numberOfArticles;
    }

    public function getNumberArticle(){
            return $this -> numberOfArticles;
    }

    abstract public function calcScore();
}

class Autor extends User {
    public function calcScore(){
       return $this -> score = $this -> numberOfArticles * 10 + 20;
    }
}

class Editor extends User {
    public function calcScore(){
        return $this -> score = $this -> numberOfArticles * 6 + 15;
    }
}

$author1 = new Autor ();
$author1 -> setNumberArticle(8);
$editor1 = new Editor();
$editor1 -> setNumberArticle(15);
echo $author1 -> calcScore();
echo "<br>";
echo $editor1 -> calcScore();
