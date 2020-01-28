<?php

/*
Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple
de 3 et de 5.
*/

$a = 8;
if( ($a % 3 === 0) && ($a % 5 === 0) ) {
  echo "Le nombre $a est divisible par n et par 6";  
}else {
  echo "le nombre $a n'est pas divisible par 3 et par 6 à la fois \n";
}
/************************************************************************/
/*
Écrivez une expression conditionnelle utilisant les variables $age et $sexe
 dans une instruction if pour sélectionner une personne de sexe féminin dont
l’âge est compris entre 21 et 40 ans et afficher un message de bienvenue
approprié.
*/

$age = 23;
$sexe = "femme";

if( ( ($age >= 21) && ($age <= 40) ) && ($sexe === "femme") ) {
  echo " Bienvenue madame ou mademoiselle \n";
}
/*********************************************************************/
/*
Effectuez une suite de tirages de nombres aléatoires jusqu’à obtenir 
une suite composée d’un nombre pair suivi de deux nombres impairs.
*/
do {
  $firstRandomNumber = rand();
  $secondRandomNumber = rand();
  $thirdRandomNumber = rand();
  echo 'firstRandomNumber = ' .$firstRandomNumber .' , secondRandomNumber = ' .$secondRandomNumber .' , thirdRandomNumber = ' .$thirdRandomNumber ."\n"; 
} while ( ($firstRandomNumber % 2 !== 0) || ($secondRandomNumber % 2 === 0) || ($thirdRandomNumber % 2 === 0) );
/*****************************************************************************/
/*
Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages
 aléatoires, et comptez le nombre de tirages nécessaire pour obtenir 
 le nombre initial. Arrêtez les tirages, et affichez le nombre de coups
  réalisés. Réalisez ce script d’abord avec  l’instruction while puis
  avec l’instruction for.
*/
/*         Solution réalisée avec l'instruction while              */




$nombreInitial = 574;
$nombreDeTiragesRealises = 0;

do {
  $randomGuess = rand(100, 1000);
  $nombreDeTiragesRealises++;
  echo "randomGuess = " .$randomGuess ." \n";
} while($randomGuess !== $nombreInitial);
echo "le nombre de tiragés réalisés pour  trouver $randomGuess est : " .$nombreDeTiragesRealises ."\n";
/*
solution construite à l'aide de l'instruction for 
*/

$nombreInitialFor = 789;
$randomGuessFor = rand(100, 1000);
$nombreDeTiragesRealisesFor = 0;
for($i = 0; $i <= 5; $i--) {
  if($randomGuessFor === $nombreInitialFor) {
    echo "randomGuessFor = " .$randomGuessFor ."\n";
  break;
  }
  $randomGuessFor = rand(100, 1000);
  $nombreDeTiragesRealisesFor++;
}
echo 'le nombre total de tirages réalisés est égal à : ' .$nombreDeTiragesRealisesFor ."\n";
/********************************************************************************************/
/*
Créez un tableau dont les indices varient de 11 à 36 et dont les valeurs
sont des lettres de A à Z. Lisez ensuite ce tableau avec une boucle for 
puis une boucle foreach, et affichez les indices et les valeurs 
(la fonction chr(n) retourne le caractère dont le code ASCII vaut n).
*/
$tab = [];
//création du tableau
for($i = 11; $i <= 36; $i++) {
  $tab[$i] = chr($i + 54);
}
// lecture du tableau et affichage des indices et des des valeurs avec la boucle for
for($i = 11; $i <= 36; $i++) {
  echo 'l\'indice i vaut : ' .$i . "\n" .'$tab[$i] = ' .$tab[$i] ." \n";
}
// lecture du tableau et affichage des indices et des valeurs correspendant à ces indices en utilisant la boucle foreach 
foreach($tab as $key => $value) {
  echo "la case d'indice $key du tableau vaut = " .$value ." \n";
}
/******************************************************************/
/*
Utilisez une boucle while pour déterminer le premier entier obtenu
 par tirage aléatoire qui soit un multiple d’un nombre donné.
  Écrivez la variante utilisant la boucle do…while.
*/
/*  Variante dde l'exercice utilisant la boucle while */
$nombreDeDepart = 45;
$nombreAleatoire = rand(0, 100);
while( ($nombreAleatoire % $nombreDeDepart !== 0) || ($nombreAleatoire === 0) ) {
  $nombreAleatoire = rand(10, 100);
}
echo 'nombreAleatoire = ' .$nombreAleatoire ."\n";

/* Variante de l'exercice résolu avec do..while */
$nombreDeDepartDo = 25;


do{
  $nombreAleatoireDo = rand(0, 100);
} while ( ($nombreAleatoireDo % $nombreDeDepartDo !== 0) || ($nombreAleatoireDo === 0) );
echo '$nombreAleatoireDo = ' .$nombreAleatoireDo ."\n";
/***********************************************************************/
