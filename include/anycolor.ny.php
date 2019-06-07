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
    if ($T6=="3") $skin_color="Graddvit";
    if ($T6=="4") $skin_color="Mellanbrun";
    if ($T6=="5") $skin_color="Morkbrun";
    if ($T6=="6") $skin_color="Svartbrun";
    $skin="Hudfarg: ".$skin_color;
    return ($skin_color);
}

function hair_color() { 
    $T6=rand(1, 12);
    if ($T6=="1") $hair_color="BlaSvart";
    if ($T6=="2") $hair_color="Brun";
    if ($T6=="3") $hair_color="Blond";
    if ($T6=="4") $hair_color="Morkblond";
    if ($T6=="5") $hair_color="Kastanjebrun";
    if ($T6=="6") $hair_color="Morkkastanjebrun";
    if ($T6=="7") $hair_color="Rod";
    if ($T6=="8") $hair_color="Rodsvart";
    if ($T6=="9") $hair_color="Kolsvart";
    if ($T6=="10") $hair_color="Brunsvart";
    if ($T6=="11") $hair_color="Ljusbrun";
    if ($T6=="12") $hair_color="Rodblond";
    $hair="Harfarg: ".$hair_color;
    return($hair_color);
}

function eye_color() { 
    $blueswitch=0;
    $greyswitch=0;
    $T6=rand(1, 6); 
    if ($T6=="1") {
        $eye_color="Bla"; 
        $blueswitch=1;
    }
    if ($T6=="2") { 
        $eye_color="Gra";
        $greyswitch=1;
    }
    if ($T6=="3") $eye_color="Gron";
    if ($T6=="4") $eye_color="Hassel";
    if ($T6=="5") $eye_color="Brun";
    if ($T6=="6") $eye_color="Svart";
    if ($blueswitch=="1") { 
        $pcnt=rand(1, 100); 
        if ($pcnt>=1 AND $pcnt<=10) $eye_color="Isbla";
        if ($pcnt>=11 AND $pcnt<=50) $eye_color="Ljusbla";
        if ($pcnt>=51 AND $pctn<=100) $eye_color="Morkbla";
    }
    if ($greyswitch=="1") { 
        $pcnt=rand(1, 100); 
        if ($pcnt>=61 AND $pcnt<=75) $eye_color="Grabla";
        if ($pcnt>=76 AND $pcnt<=80) $eye_color="Grablagul";
        if ($pcnt>=81 AND $pcnt<=90) $eye_color="Grabarnsten";
        if ($pcnt>=91 AND $pctn<=100) $eye_color="Grabrun";
    }
    $eyes="Ogonfarg: ".$eye_color;
    /*
    $T6b=rand(1, 6);
    if ($T6b=="6") { 
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
    }*/
    return($eye_color);
}
?>