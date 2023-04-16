<?php
function connectToDB() { 
    $host = "dbbb"; 
    $user = "hery"; 
    $pass = "orbell"; 
    $dbname = "blagblog"; 
    try { 
        $dbBB = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
         $dbBB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //   echo "Connected successfully to DataBase <br>";
         } catch (PDOException $e) { 
            echo "Erreur : " . $e->getMessage();
         } 
         return $dbBB;
        }