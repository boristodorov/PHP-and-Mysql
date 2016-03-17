<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* PHP ima preko 3500 funkcija za razlicite operacije, ali isto tako mi imao mogucnost,
 * da definisemo nasu sopstvenu funkciju, da bi smo definisali nasu funkciju prvo koristimo
 * specijalu rec function, nakon toga deklarisemo funkciju dajemo ime, za deklarisanje funkcija vaze ista
 *  pravila kao i za deklarisanje promenljivih,isto tako ime funkcije treba da nam ukazuje na to sta ce funkcija
 * zapravo raditi, kada smo dali ime funkciji otvaramo i zatvaramo zagrada () i odmah posle toga otvaramo i zatvaramo
 * viticaste zagrade {}, i izmedju viticastih zagrada pisemo nas kod, i kada startujemo program vidimo da se nista ne desava,
 * zato sto nismo nigde pozvali funkciju, da bi smo pozvali funkciju pisemo ime funkcije i obavezno pisemo (), 
 * sum2numbers ();
 * 
 */
sum2numbers();
function sum2numbers () {
    echo 4+4;
}
/*funkciji mozemo zadati i parametre ($a, $b), stime sto kada pozivamo funkciju prvi broj odgovara prvom parametru,
 * a drugi broj drugom parametru.
*/
sum2numWithParam(5, 6);
function  sum2numWithParam ($a, $b){
    echo $a+$b;
}

sumWithDeafaultVal(4);
function sumWithDeafaultVal ($i, $j=4, $o=6){
    echo $i + $j + $o;
}
echo rand(4, 45);

