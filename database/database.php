<?php

try {
        $bdd = new PDO('mysql:host=localhost;dbname=mini-cms;charset=utf8', 'root', 'carton');
      } catch (Exception $e) {
        die('Erreur :'.$e->getMessage());
      }

?>
