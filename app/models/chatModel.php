<?php
class chatModel extends model
{
     public $title = 'Chat';
     public $data = 'Your opinion matters to us';
     protected $name;
     protected $email;
     protected $message;


 
     public function __construct()
     {
         parent::__construct();
     }
 
     public function getName(){
         return $this->name;
     }
    
 
     public function setName($name){
          $this->name=$name;
     }
 
     public function getEmail(){
         return $this->email;
     }
 
     public function setEmail($email){
          $this->email=$email;
     }
 
     public function getMessage(){
         return $this->message;
     }
 
     public function setMessage($message){
          $this->message=$message;
     }
 


     public function chat()
    {
        $this->dbh->query("INSERT INTO chatbox (`name`,`email`, `message`) VALUES(:name, :email, :message)");
        $this->dbh->bind(':name', $this->name);
        $this->dbh->bind(':email', $this->email);
        $this->dbh->bind(':message', $this->message);

        $this->dbh->execute();
    }
}
