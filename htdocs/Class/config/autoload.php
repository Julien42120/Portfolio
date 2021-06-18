<?php

function loadClass($classe) {

  // ini_set('display_errors',1);
  // ini_set('display_startup_errors',1);
  // error_reporting(E_ALL);
  require __DIR__. '/../Class/'. $classe . '.php'; 
}

spl_autoload_register('loadClass'); 
// Enregistrement de la fonction en autoload pour qu'elle soit appelée dès qu'on instancie une classe non déclarée.