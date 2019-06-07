<?php
/*
Löst baserad på info från wikipedia
Kanske anvaenda, men för Mutant-Rymd, kom ihag 
kosmetsik cybernetik (se Techno 2090 boken) och 
genmodifiering. Det är inte ovanligt med 
t.ex mork hud, orange mohikan och bla ogon t.o.m rent genetiskt
Lat spelare valja, om de vill. Tarningsslagen framst for 
spelledarpersoner "Statister".
*/
function skin_color() {
    $T6=rand(1, 6);
    if ($T6=="1") $skin_color="Blek";
    if ($T6=="2") $skin_color="Vit";
    if ($T6=="3") $skin_color="Mörkljus";
    if ($T6=="4") $skin_color="Medelbrun";
    if ($T6=="5") $skin_color="Mörkbrun";
    if ($T6=="6") $skin_color="Svart";
    $skin="Hudfärg: ".$skin_color;
    return ($skin_color);
}

function hair_color() { 
    $T6=rand(1, 6);
    if ($T6=="1") $hair_color="Svart";
    if ($T6=="2") $hair_color="Brun";
    if ($T6=="3") $hair_color="Blond";
    if ($T6=="4") $hair_color="Rödbrun";
    if ($T6=="5") $hair_color="Mörkblond";
    if ($T6=="6") $hair_color="Röd";
    $hair="Hårfärg: ".$hair_color;
    return($hair_color);
}

function eye_color() { 
    $T6=rand(1, 6); 
    if ($T6=="1") $eye_color="Bärnsten";
    if ($T6=="2") $eye_color="Blå";
    if ($T6=="3") $eye_color="Brun";
    if ($T6=="4") $eye_color="Grå";
    if ($T6=="5") $eye_color="Grön";
    $eyes="Ögonfärg: ".$eye_color;
    if ($T6=="6") { 
        $eye_color="Melerad";
        $T5nr1=rand(1, 5);
	$T5nr2=rand(1, 5);
	if ($T5nr1=="1") $eye_color=$eye_color.", Bärnsten och ";
        if ($T5nr1=="2") $eye_color=$eye_color.", Blå och ";
        if ($T5nr1=="3") $eye_color=$eye_color.", Brun och ";
        if ($T5nr1=="4") $eye_color=$eye_color.", Grå och ";
        if ($T5nr1=="5") $eye_color=$eye_color.", Grön och ";
	//
	if ($T5nr2=="1") $eye_color=$eye_color."Bärnsten";
	if ($T5nr2=="2") $eye_color=$eye_color."Blå";
	if ($T5nr2=="3") $eye_color=$eye_color."Brun";
	if ($T5nr2=="4") $eye_color=$eye_color."Grå";
	if ($T5nr2=="5") $eye_color=$eye_color."Grön";
	//
	if ($T5nr1==$T5nr2) $eye_color=$eye_color." (Två nyanser av)";
        $eyes="Ögonfärg: ".$eye_color."<br />";
    }
    return($eye_color);
}
?>