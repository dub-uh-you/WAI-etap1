<?php
require_once '../models/User.php';
require_once '../views/RedirectView.php';
require_once '../views/UserView.php';
require_once '../Alert.php';


class UserController {

  public function add() {
    $valid = true;

    $nick = $_POST['nick'];
    $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    $pswd_repeat = $_POST['pswd_repeat'];
    if ($pswd_repeat != $pswd) {
      $valid = false;
      Alert::warninig("Passwords have to be the same");
      include '../layouts/.php';
      die();
    }
    $user = User::get(['nick' => $nick]);
    if ($user!=null) {
      $valid = false;
      Alert::warninig("That name is already taken");
    }
    if ($valid) {
      $user = new User($nick, $email, password_hash($pswd, PASSWORD_DEFAULT));
      $user->save();
      Alert::warninig("You can now log in");
    } 
    return new RedirectView('/me', 303);
  }


  public function logout() {
    session_destroy();
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time()-42000,$params["path"],$params["domain"], $params["secure"], $params["httponly"]);
    Alert::warninig("Bye!");
    return new RedirectView('/me', 303);
  }

  
  public function profile(){
    return new UserView();
  }


  public function index(){
    $users = User::getAll();
}


  public function login() {
    $nick = $_POST['nick'];
    $pswd =$_POST['pswd'];
    $user = User::get(['nick' => $nick]);
    if (!$user || !$user->validPassword($pswd)) {
      Alert::warninig("Wrong password");
      die();
    } else {
      $_SESSION['user'] = $nick;
    }
    return new RedirectView('/me', 303);
  }
}