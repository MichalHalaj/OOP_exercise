<?php 

class Clanok {
    public $title;
    public $excerpt;
    public $comments = 0;

    //konštruktor, do ktorého si poposielam hodnoty a oni sa následne prednastavia
     public function __construct( $title, $excerpt,$comments) {
         $this->title = $title;
         $this->excerpt = $excerpt;
         $this->comments = $comments;
     }

     //možnosť nastavovať alebo zíksať hodnoty z vonku, mimo objektu pomocou getters/setters 

     public function getTitle() {
         return $this->title;
     }

     public function setTitle( $title ) {
         $this->title = $title;
     }

     public function getExcerpt() {
        return $this->excerpt;
    }

    public function setExcerpt( $excerpt ) {
        $this->excerpt = $excerpt;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setComments( $comments ) {
        $this->comments = $comments;
    }
}