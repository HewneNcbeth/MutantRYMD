<?php
/*
Lost baserad pa info fran wikipedia
Kanske anvaenda, men for Mutant-Rymd, kom ihag 
kosmetsik cybernetik (se Techno 2090 boken) och 
genmodifiering. Det ar inte ovanligt med 
t.ex mork hud, orange mohikan och bla ogon t.o.m rent genetiskt
Lat spelare valja, om de vill. Tarningsslagen framst for 
spelledarpersoner "Statister".
*/
function skin_color() {
    $T6=rand(1, 6);
    if ($T6=="1") $skin_color="Blek";
    if ($T6=="2") $skin_color="Vit";
    if ($T6=="3") $skin_color="Morkljus";
    if ($T6=="4") $skin_color="Medelbrun";
    if ($T6=="5") $skin_color="Morkbrun";
    if ($T6=="6") $skin_color="Svart";
    $skin="Hudfarg: ".$skin_color;
    return ($skin_color);
}

function hair_color() { 
    $T6=rand(1, 6);
    if ($T6=="1") $hair_color="Svart";
    if ($T6=="2") $hair_color="Brun";
    if ($T6=="3") $hair_color="Blond";
    if ($T6=="4") $hair_color="Rodbrun";
    if ($T6=="5") $hair_color="Morkblond";
    if ($T6=="6") $hair_color="Rod";
    $hair="Harfarg: ".$hair_color;
    return($hair_color);
}

function eye_color() { 
    $T6=rand(1, 6); 
    if ($T6=="1") $eye_color="Barnsten";
    if ($T6=="2") $eye_color="Bla";
    if ($T6=="3") $eye_color="Brun";
    if ($T6=="4") $eye_color="Gra";
    if ($T6=="5") $eye_color="Gron";
    $eyes="Ogonfarg: ".$eye_color;
    if ($T6=="6") { 
        $eye_color="Melerad";
        $T5nr1=rand(1, 5);
	$T5nr2=rand(1, 5);
	if ($T5nr1=="1") $eye_color=$eye_color.", Barnsten och ";
        if ($T5nr1=="2") $eye_color=$eye_color.", Bla och ";
        if ($T5nr1=="3") $eye_color=$eye_color.", Brun och ";
        if ($T5nr1=="4") $eye_color=$eye_color.", Gra och ";
        if ($T5nr1=="5") $eye_color=$eye_color.", Gron och ";
	//
	if ($T5nr2=="1") $eye_color=$eye_color."Barnsten";
	if ($T5nr2=="2") $eye_color=$eye_color."Bla";
	if ($T5nr2=="3") $eye_color=$eye_color."Brun";
	if ($T5nr2=="4") $eye_color=$eye_color."Gra";
	if ($T5nr2=="5") $eye_color=$eye_color."Gron";
	//
	if ($T5nr1==$T5nr2) $eye_color=$eye_color." (Tva nyanser av)";
        $eyes="Ogonfarg: ".$eye_color."<br />";
    }
    return($eye_color);
}
?>