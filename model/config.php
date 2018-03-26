<?php
try
{
    $pdo = new PDO(
    "mysql:dbname=outil_suivi;host=localhost;charset=utf8", 'root', 'simplonco');
}
  catch (PDOException $e)
{
  echo 'Connection failed : ' . $e->getMessage();
  $pdo = null;
}
