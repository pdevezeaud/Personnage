<?php

function chargerClasse($classe)
{

require $classe . '.php'; // on inclut le classe correspondante au parametre passé.

}

spl_autoload_register('chargerClasse'); // On enregistre lafonction en autoload pour qu'elle soit appelée dès qu'oninstanciera une classe non déclarée.

//require 'Personnage.php';

$perso1  = new Personnage(Personnage::FORCE_MOYENNE);
$perso2  = new Personnage(Personnage::FORCE_PETITE);







$perso1->frapper($perso2);
$perso1->gagnerExperience();

$perso2->frapper($perso1);   // $perso1 frappe $perso2
$perso2->gagnerExperience(); // $perso1 gagne de l'expérience

$perso2->frapper($perso1); // $perso2 frappe $perso1
$perso2->gagnerExperience(); // $perso2 gagne de l'expérience

echo 'Le Personnage 1 a ', $perso1->getForce(), ' de force, 
contrairement au Personnage 2 qui a', $perso2->getforce(),
' de force.<br />';
echo 'Le personnage 1 a ', $perso1->getExperience(), ' d\'expérience,
contrairement au personnage 2 qui a ', $perso2->getExperience(), '
d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->getDegats(), ' de dégâts,
contrairement au personnage 2 qui a ', $perso2->getDegats(), ' de
dégâts.<br />';

//ici on appelle une methode static
Personnage::parler();



