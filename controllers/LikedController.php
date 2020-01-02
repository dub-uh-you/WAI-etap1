<?php
require_once '../models/Artwork.php';
require_once '../views/LikedView.php';
require_once '../views/RedirectView.php';

class LikedController {


  public function index() {
    $ids = isset($_SESSION['favorites']) ? $_SESSION['favorites'] : [];
    $imgs = array_map(function ($id) {
      return Img::get(['_id' => new MongoDB\BSON\ObjectId($id)]);
    }, $ids);
    return new LayoutView('favlist', ['imgs' => $imgs]);
  }


  public function set() {
    $selected = $_POST['selected', []];
    $_SESSION['favorites'] = $selected;
    return new RedirectView('/imgs/favorite', 303);
  }


  public function remove() {
    $selected = $_POST['selected', []];
    if (isset($_SESSION['favorites'])) {
      $_SESSION['favorites'] = array_values(
        array_filter($_SESSION['favorites'], function ($id) use ($selected) {
          return !in_array($id, $selected);
        }));
    } else {
      $_SESSION['favorites'] = [];
    }
    return new RedirectView('/imgs/favorite', 303);
  }

}