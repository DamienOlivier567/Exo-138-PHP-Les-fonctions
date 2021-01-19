<?php

// Premiere ligne

$helloWorld = function (){
    echo "Hello World!";
};

//Deuxieme ligne
$helloWorld();


//Troisieme ligne

function maFonctionParam ($fname, $lname) {
    echo $fname ;
    return ($lname);
}

maFonctionParam("Bonjour", 'Hello');




