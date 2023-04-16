<?php   

class Societe {
    public $nom;
    public $nomPdg;
    public $email;

    public function __construct($n,$np,$e)
    {
        $this->nom = $n;
        $this->nomPdg = $np;
        $this->email = $e;
    }
    public function valideCommande($com,$trj) {
        // Convertir la date client en timestamp
        $dateClient = strtotime($com['dateClient']);

        // Initialiser la variable qui contiendra la date la plus proche
        $dateProche = null;
        $diffPlusProche = null;
        $trajetProche = null;
        
        // Boucler sur les trajets
        foreach ($trj as $trajet) {
            // Convertir la date de départ du trajet en timestamp
            $dateTrajet = strtotime($trajet->horDep);
            // Vérifier si le trajet n'est pas déjà passé
            if ($dateTrajet > $dateClient) {
                // Calculer la différence entre la date client et la date de départ du trajet
                $diff = abs($dateTrajet - $dateClient);
                // Si c'est la première date traitée, l'initialiser comme la plus proche
                if ($dateProche === null) {
                    $dateProche = $dateTrajet;
                    $diffPlusProche = $diff;
                    $trajetProche = $trajet;
                }
                
                // Sinon, si la date est plus proche que la précédente, la mettre à jour
                elseif ($diff < $diffPlusProche) {
                    $dateProche = $dateTrajet;
                    $diffPlusProche = $diff;
                    $trajetProche = $trajet;
                }
            }
        }
        
        // Si une date a été trouvée, la retourner sous forme de string
        if ($dateProche !== null) {
            echo "<p>La date la plus proche pour votre trajet est celle du : ".date('d-m-y', $dateProche)." , correspondant au trajet portant la référence : ".$trajetProche->ref."</p>";
            $_SESSION['refTrajet'] = $trajetProche;
        }
        
        // Sinon, retourner null
        return null;
    }
    
}