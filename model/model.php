<?php
class Model
{
  protected $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=db_test;charset=utf8'
    , 'root', '');
  }
}
?>