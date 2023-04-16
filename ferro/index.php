<?php
session_start();
require('utils/autoload.php');
require('utils/database.php');
require('utils/init.php');
require('utils/router.php');


$g_Lyon = new Gare("Lyon");
$g_Montpellier = new Gare ("Montpellier");
$lot1 = new Marchandise("essence", "m3", 5);
$lot2 = new Marchandise("bois","stere", 4);
$lot3 = new Marchandise("acier", "m3", 5);
// $chargement1 = [$lot1, $lot2, $lot3];
$carlos = new Client("Monsieur","Carlos", "Santana", 1, "carlos@yahoo.fr", "112 rue de Rennes 75007",$lot1);
$transport_SA = new Societe("Magouille SA", "Jean Chelou", "chelou@yahoo.fr");
$wagon1 = new Wagon(1, "citerne", 80, 0,$g_Lyon);
$wagon2 = new Wagon(2, "container", 50, 0,$g_Lyon);
$wagon3 = new Wagon(3, "plateau", 80, 0,$g_Lyon);
$train1 = new Train(1, [$wagon1, $wagon2, $wagon3]);
$dateClient = "12-04-2023";
$trajet1 = new Trajet(1, $train1, $g_Lyon, $g_Montpellier,[],"10-04-2023", "10-04-2023", [0,1,0,1,0,1,0]);
$trajet2 = new Trajet(2, $train1, $g_Lyon, $g_Montpellier,[],"14-04-2023", "14-04-2023", [0,1,0,1,0,1,0]);
$trajet3 = new Trajet(3, $train1, $g_Lyon, $g_Montpellier,[],"16-04-2023", "16-04-2023", [0,1,0,1,0,1,0]);
$_SESSION['trajets'] = [$trajet1, $trajet2, $trajet3] ;

$carlos->passerCommande($lot1, $g_Lyon, $g_Montpellier, $dateClient);
echo"<pre>";

$meilleurtrajet = $transport_SA->valideCommande($_SESSION['commande'], $_SESSION['trajets']);
// var_dump($_SESSION);
$chargement1 = $wagon1->chargeWagon($_SESSION['commande']['marchandise']->quantite, $wagon1->capaciteMax, $_SESSION['commande']['client']->nom);
var_dump($train1);

