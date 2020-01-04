<?php
require_once '../business/Artwork_Biz.php';

class Artwork extends Artwork_Biz{
    public $author;
    public $title;
    public $watermark;
    public $picture;
    // public $restriction;
    private $_id;

    public function __construct($author,$title,$watermark,$picture){
        $this->author = $author;
        $this->title = $title;
        $this->watermark = $watermark;
        $this->picture = $picture;
        // $this->restriction = $restriction;
    }
}
