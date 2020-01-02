<?php

class MasterpiecesView {
    private $masterpieces;

    public function __construct ($masterpieces){
        $this->masterpieces = $masterpieces;
    }

    public function render(){
        $masterpieces = $this->masterpieces;
        include '../layouts/MasterpiecesLayout.php';
    }
}