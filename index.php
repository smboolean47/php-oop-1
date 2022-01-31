<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Employee.php';

try {
    $samuele = new User("Samuele", "Madrigali");
    $samuele->setEmail("samuele.madrigali@gmail.com");
} catch(Exception $e){
    echo "Errore: {$e->getMessage()}";
}

try {
    $samuele->setSconto("ciao");
} catch(Exception $e) {
    echo "Eccezione: {$e->getMessage()}";
}
var_dump($samuele);