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

    // public function save(){
    //     $response = DB::get_db()->masterpieces->insertOne([
    //         'author' => $this->author,
    //         'title'=>$this->title,
    //         'watermark' =>$this->watermark,
    //         'picture' => $this->picture,
    //         // 'restriction'=>$this->restriction
    //     ]);
    //     $this->_id = $response->getInsertedId();
    // }

    // public function delete(){
    //     DB::get_db()->masterpieces->deleteOne([
    //         $this->_id
    //     ]);
    // }

    // public static function getAll(){
    //     $response = DB::get_db()->masterpieces->find();
    //     $masterpieces = [];
    //     foreach ($response as $artwork){
    //         $masterpieces[] = new Artwork($artwork['author'], $artwork['title'], $artwork['watermark'], $artwork['picture']);
    //     }
    //     return $masterpieces;
    // }

    // public function createThumb($file, $path, $format) {
    //     if($format=="jpg"){
    //         $create = "imagecreatefromjpeg";
    //     } else {
    //         $create = "imagecreatefrompng";
    //     }
    //     $img = $create($file);
    //     $thumb = imagescale($img, 200, 125);
    //     imagedestroy($img);
    //     imagepng($thumb, $path);
    //   }

    // public function watermark($file, $path, $format, $text) {
    //     if($format=="jpg"){
    //         $create = "imagecreatefromjpeg";
    //     } else {
    //         $create = "imagecreatefrompng";
    //     }
    //     $img = $create($file);
    //     $color = imagecolorallocate($img, 245, 174, 22);
    //     $x = 50;
    //     $y = imagesy($img) - 50;
    //     imagettftext($img, 20, 90, $x, $y, $color, '../HotSauce.ttf', $text);
    //     imagepng($img, $path);
    //     imagedestroy($img);
    //   }
}