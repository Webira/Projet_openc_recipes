<?php
/*Les fonctions - sont des blocs de code 
qui exécutent des instructions selon certains paramètres.
Les fonctions ont généralement une entrée et une sortie,
et peuvent avoir un type (string, int, bool, array...).*/

//1.Formatez une chaîne de caractères avec sprintf: 
    //Salade Romaine par "laurene.castor@exemple.com" : Etape 1 : Lavez la salade ; Etape 2 : euh .

$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];
echo sprintf(
    '%s par "%s" : %s',
    $recipe['title'],
    $recipe['author'],
    $recipe['recipe']
);
//2.Recherchez et remplacez une chaîne de caractères avec str_replace :
    // le Cassoulet, C'est très bon
echo str_replace('c', 'C', 'le cassoulet, c\'est très bon');

//3.Calculez la longueur d'une chaîne de caractères avec strlen
    //La phrase ci-dessous comporte 63 caractères :
    //Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine
$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);

echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . PHP_EOL . $recipe;

//4.Récupérez la date

    // Enregistrons les informations de date dans des variables

$day = date('d');
$month = date('m');
$year = date('Y');

$hour = date('H');
$minut = date('i');

    // Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $day . '/' . $month . '/' . $year . 'et il est ' . $hour. ' h ' . $minut;

//Créez vos propres fonctions
        //Si PHP ne propose pas la fonction dont on a besoin,
        // il est possible de la créer avec le mot-clé function :
        // on définira alors le type des paramètres et du retour de la fonction.


?>