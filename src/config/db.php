<?php
class db{
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $db = 'agenda';

  public function conect(){
    $mysqlC = "mysql:host=$this->host;dbname=$this->db";
    $dbC = new PDO($mysqlC,$this->user, $this->pass);
    $dbC->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbC;
  }

}
