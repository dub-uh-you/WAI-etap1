<?php

class Alert {
  static public function warninig($msg) {
    $_SESSION['message']=$msg;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}