<?php
require_once 'util.php';
class Product{

private $id;
private $name;
private $price;
private $pdo;

public function __Product(){
print("dame");
}
public function all(){
$result;
$this->pdo=new PDO('mysql:host=localhost;dbname=webpro2examdb;charset=utf8','root','');
try{
$result=$this->pdo->query("SELECT * from products");
}catch(PDOexception $e){
var_dump($e->getMessage());
}
return $result;
}

public function load($id){
$result;
$this->pdo=new PDO('mysql:host=localhost;dbname=webpro2examdb;charset=utf8','root','');
try{
$result=$this->pdo->query("SELECT * from products where id=".$id."");
}catch(PDOexception $e){
var_dump($e->getMessage());
}
return $result;
}
}