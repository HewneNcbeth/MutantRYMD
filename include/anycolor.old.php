<?php
/*
L�st baserad p� info fr�n wikipedia
Kanske anvaenda, men f�r Mutant-Rymd, kom ihag 
kosmetsik cybernetik (se Techno 2090 boken) och 
genmodifiering. Det �r inte ovanligt med 
t.ex mork hud, orange mohikan och bla ogon t.o.m rent genetiskt
Lat spelare valja, om de vill. Tarningsslagen framst for 
spelledarpersoner "Statister".
*/
function skin_color() {
    $T6=rand(1, 6);
    if ($T6=="1") $skin_color="Blek";
    if ($T6=="2") $skin_color="Vit";
    if ($T6=="3") $skin_color="M�rkljus";
    if ($T6=="4") $skin_color="Medelbrun";
    if ($T6=="5") $skin_color="M�rkbrun";
    if ($T6=="6") $skin_color="Svart";
    $skin="Hudf�rg: ".$skin_color;
    return ($skin_color);
}

function hair_color() { 
    $T6=rand(1, 6);
    if ($T6=="1") $hair_color="Svart";
    if ($T6=="2") $hair_color="Brun";
    if ($T6=="3") $hair_color="Blond";
    if ($T6=="4") $hair_color="R�dbrun";
    if ($T6=="5") $hair_color="M�rkblond";
    if ($T6=="6") $hair_color="R�d";
    $hair="H�rf�rg: ".$hair_color;
    return($hair_color);
}

function eye_color() { 
    $T6=rand(1, 6); 
    if ($T6=="1") $eye_color="B�rnsten";
    if ($T6=="2") $eye_color="Bl�";
    if ($T6=="3") $eye_color="Brun";
    if ($T6=="4") $eye_color="Gr�";
    if ($T6=="5") $eye_color="Gr�n";
    $eyes="�gonf�rg: ".$eye_color;
    if ($T6=="6") { 
        $eye_color="Melerad";
        $T5nr1=rand(1, 5);
	$T5nr2=rand(1, 5);
	if ($T5nr1=="1") $eye_color=$eye_color.", B�rnsten och ";
        if ($T5nr1=="2") $eye_color=$eye_color.", Bl� och ";
        if ($T5nr1=="3") $eye_color=$eye_color.", Brun och ";
        if ($T5nr1=="4") $eye_color=$eye_color.", Gr� och ";
        if ($T5nr1=="5") $eye_color=$eye_color.", Gr�n och ";
	//
	if ($T5nr2=="1") $eye_color=$eye_color."B�rnsten";
	if ($T5nr2=="2") $eye_color=$eye_color."Bl�";
	if ($T5nr2=="3") $eye_color=$eye_color."Brun";
	if ($T5nr2=="4") $eye_color=$eye_color."Gr�";
	if ($T5nr2=="5") $eye_color=$eye_color."Gr�n";
	//
	if ($T5nr1==$T5nr2) $eye_color=$eye_color." (Tv� nyanser av)";
        $eyes="�gonf�rg: ".$eye_color."<br />";
    }
    return($eye_color);
}
?>