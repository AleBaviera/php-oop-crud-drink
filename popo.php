<?php

class Id{
  private $id;

  public function __construct($row){
    $this -> setId($row['id']);
  }
  public function getId(){
    return $this -> id;
  }
  public function setId($id){
    $this -> id = $id;
  }
  public function __toString(){
    return $this -> getId() . ' ';
  }
}

class Drink extends Id{
  private $type;
  private $brand;
  private $price;
  private $date;

  public function __construct($row){
    parent :: __construct($row);
    $this -> setType($row['tipo']);
    $this -> setBrand($row['marca']);
    $this -> setDate($row['scadenza']);
    $this -> setPrice($row['prezzo']);
  }

  public function getPrice(){
    return $this -> price;
  }
  public function setPrice($price){
    $this -> price = $price;
  }

  public function getType(){
    return $this -> type;
  }
  public function setType($type){
    $this -> type = $type;
  }

  public function getBrand(){
    return $this -> brand;
  }
  public function setBrand($brand){
    $this -> brand = $brand;
  }

  public function getDate(){
    return $this -> date;
  }
  public function setDate($date){
    $this -> date = $date;
  }

  public function __toString(){
      return parent :: __toString()
              . $this -> getType() . ' '
              . $this -> getBrand() . ' '
              . $this -> getPrice() . ' '
              . $this -> getDate() . ' ' . '<br>';
  }
}

?>
