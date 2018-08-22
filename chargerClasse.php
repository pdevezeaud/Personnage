<?php
function chargerClasse($classe)
{

require $classe . '.php'; // on inclut le classe correspondante au parametre passé.

}

spl_autoload_register('chargerClasse'); // On enregistre lafonction en autoload pour qu'elle soit appelée dès qu'oninstanciera une classe non déclarée.