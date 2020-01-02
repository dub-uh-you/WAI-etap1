<?php
require_once '../business/User_Biz.php';

class User extends User_Biz {
    public $nick;
    public $email;
    public $pswdHash;

    public function __construct($nick, $email, $pswdHash) {
      $this->nick = $nick;
      $this->email = $email;
      $this->pswdHash = $pswdHash;
    } 

  protected $id;

  
//   public function save(){
//     if (isset($this->id)) {
//       DB::get_db()->users->updateOne(
//         ['_id' => new MongoDB\BSON\ObjectId($this->id)],
//         ['$set' => $this->serialize()]
//       );
//     } else {
//     $result = DB::get_db()->users->insertOne($this->serialize());
//     $this->id = $result->getInsertedId();
//   }
// }


// public function delete(){
//   DB::get_db()->users->deleteOne([
//       $this->_id
//   ]);
// }


// protected function serialize() {
//   $object = [
//     'nick' => $this->nick,
//     'email' => $this->email,
//     'pswdHash' => $this->pswdHash,
//     '_id' => new MongoDB\BSON\ObjectId($this->id)
//   ];
//   return $object;
// }


// static protected function deserialize($object) {
//   $instance = new static(
//     $object['nick'],
//     $object['email'],
//     $object['pswdHash']
//   );
//   $instance->id = (string)$object['_id'];
//   return $instance;
// }


// public static function getAll(){
//   $response = DB::get_db()->users->find();
//   $users = [];
//   foreach ($response as $user){
//       $users[] = new User($nick['nick'], $email['email'],$pswdHash['pswdHash']);
//   }
//   return $users;
// }


//   static public function get($query) {
//     $object = DB::get_db()->users->findOne($query);
//     if ($object) {
//       return static::deserialize($object);
//     } else {
//       return null;
//     }
//   }

//   public function id() {
//     return $this->id;
//   }


//   public function validPassword($pswd) {
//     return password_verify($pswd, $this->pswdHash);
//   }
  
}