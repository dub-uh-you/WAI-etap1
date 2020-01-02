<?php

class LikedView {
    private $masterpieces;

    public function __construct ($masterpieces){
        $this->liked = $liked;
    }

    public function render(){
        $liked = $this->liked;
        include '../layouts/LikedLayout.php';
    }
}