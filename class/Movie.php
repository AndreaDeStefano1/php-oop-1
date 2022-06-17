<?php 
class Movie{
  private $name;
  private $genre;
  private $language;

  public function __construct($_name, $_genre, $_language){
    $this->setName($_name);
    $this->genre = $_genre;
    $this->language = $_language;
  }

  // SETTER

  public function setName($_name){
    $this->name = $_name ;
  }
  public function setGenre($_genre){
    $this->genre = $_genre ;
  }
  public function setLanguage($_language){
    $this->language = $_language ;
  }


  // GETTER
  public function getName(){
    return $this->name;
  }
  public function getGenre(){
    return $this->genre;
  }
  public function getLanguage(){
    return $this->language;
  }
}


?>