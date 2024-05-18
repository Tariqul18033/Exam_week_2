<?php
class Book {
  private $title,$availableCopies;
 
 public function __construct($title, $availableCopies) {
      $this->title = $title;
      $this->availableCopies = $availableCopies;

     }


 public function getTitle(){
     return $this->title;

     }

 



public function getAvailableCopies(){
    printf("Available Copies of {$this->title}: {$this->availableCopies} <br>");
}
 



 public function borrowBook(){
    $this->availableCopies--;
 }
 



 public function returnBook(){
    $this->availableCopies++;
 }
 
}


class Member extends Book {
  private $name;



 public function __construct($name) {
      $this->name = $name;
      $this->borrowBook();
   $this->returnBook();
     }



 public function getName(){
    echo $this->name;
    
 }
 
 public function borrowBook(){
      parent::borrowBook();
 }
 



 public function returnBook(){
    parent::returnBook();
 }
 
}



$book1 = new Book('The Great Gatsby',5);
$book2 = new Book('To Kill a Mockingbird',3);


$member1 = new Member('John Doe');
$member2 = new Member('Jane Smith');



$member1->borrowBook();
$member2->borrowBook();
$book1->borrowBook();

$book1->getAvailableCopies();
$book2->getAvailableCopies();


?>