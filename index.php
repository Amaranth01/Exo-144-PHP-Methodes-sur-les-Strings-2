<?php
$texte = "Ajourd'hui il fait -1000 degrés";
echo addslashes($texte);

echo"<br><br>";

$texte2 = "le texte de mon choix";
echo strtoupper($texte2);
echo"<br>";
echo ucfirst($texte2);
echo"<br>";
echo ucwords($texte2);
echo"<br>";
$texte3 = "MON TEXTE EN MAJUSCULE";
echo strtolower($texte3);
echo"<br>";
echo lcfirst($texte3);

echo"<br><br>";

$texte25 = "Ce matin j'ai mangé mes tartines et ma fille a bu son biberon avec des petits biscuits car elle était fatiguée et voilà";
echo str_word_count($texte25);

echo"<br><br>";

$texte4 = "Mon texte en tableau";
$arr1 = explode(" ", $texte4);
foreach ($arr1 as $array) {
    echo "index: $array <br>";
}

echo"<br><br>";

$arrayWords = ["Ceci ", "sera ", "une ", "chaine "];
$chaine = implode($arrayWords);
echo $chaine;

echo"<br><br>";

$texte6 = "Encore un texte de mon choix";
echo strrev($texte6);
echo"<br>";
echo str_shuffle($texte6);

echo"<br><br>";

$texte7 = "<strong>Hello, </strong> nous apprenons <span style='color: blue;'>PHP</span>";
echo $texte7;
echo"<br>";
echo strip_tags($texte7);

echo"<br><br>";

$texte8 = "Manque d'inspiration";
echo str_pad($texte8, 500, "|", STR_PAD_LEFT);

echo"<br><br>";

$texte9 = "J'adore les jeux video";
$tableau = str_split($texte9);
foreach ($tableau as $item) {
    echo "$item <br>";
}

echo"<br><br>";
$texte10 = "Une variable avec le texte de mon choix";
$chaine = str_replace ("choix", "World", $texte10);
echo $chaine;

echo"<br><br>";

$texte11 = "La phrase de l'exo 11 pour le test";
echo substr('test', 0);

echo"<br><br>";

function verifDebut ($texte11) {
    if(strpos($texte11, "La") === 0) {
        echo "La phrase commence bien par La";
    } else {
        echo "La ^hase ne commence pas par La";
    }
}
verifDebut ($texte11);

echo"<br><br>";

function verifFin ($texte11) {
    if(strpos($texte11, "gang") === -1) {
        echo "La phrase termine bien par test";
    } else {
        echo "La phase ne commence pas par test";
    }
}
verifFin ($texte11);