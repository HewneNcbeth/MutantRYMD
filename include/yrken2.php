<?php
function possibla_yrken($grundeg) {
///grundegenskaper
    // STY STO SMI FYS INT MST PER
    //$grundeg[$i]
/* utkast till include mojliga yrken mutant-RYMD */
$mojliga_yrken="Mojliga yrken: <br />Rouge (Alltid mojligt)<br />";
If ($grundeg[0]>=11 AND $grundeg[3]>=11) { 
    $mojliga_yrken=$mojliga_yrken."Trooper STY11,FYS11<br />";
}
If ($grundeg[0]>=13 AND $grundeg[3]>=13 AND $grundeg[2]>=11 AND $grundeg[5]>=13 AND $grundeg[4]>=9) { 
    $mojliga_yrken=$mojliga_yrken."SPS-Trooper STY13,FYS13,SMI11,MST13,INT9<br />";
}
If ($grundeg[4]>=13 AND $grundeg[6]>=14) { 
    $mojliga_yrken=$mojliga_yrken."Acolyt INT13,PER14<br />";
}
If ($grundeg[4]>=13 AND $grundeg[6]>=12) { 
    $mojliga_yrken=$mojliga_yrken."Corpus INT13,PER12<br />";
}
If ($grundeg[4]>=15 AND $grundeg[5]>=9) { 
    $mojliga_yrken=$mojliga_yrken."Forskare INT15,MST9<br />";
}
If ($grundeg[0]>=13 AND $grundeg[3]>=13 AND $grundeg[5]>=15 AND $grundeg[6]>=15) { 
    $mojliga_yrken=$mojliga_yrken."Inkvisitor STY13,FYS13,MST15,PER15<br />";
}
If ($grundeg[0]>=13 AND $grundeg[1]>=11 AND $grundeg[3]>=13 AND $grundeg[5]>=13) { 
    $mojliga_yrken=$mojliga_yrken."Interpol STY13,STO11,FYS13,MST13<br />";
}
If (($grundeg[4]>=9) AND ($grundeg[6]>=9)) { 
    $mojliga_yrken=$mojliga_yrken."Kaosagent INT9,PER9<br />";
}
If ($grundeg[6]>=15 AND $grundeg[4]>=13) { 
    $mojliga_yrken=$mojliga_yrken."Mediaman PER15,INT13<br />";
}
If ($grundeg[2]>=9 AND $grundeg[4]>=13 AND $grundeg[5]>=13) { 
    $mojliga_yrken=$mojliga_yrken."Pilot SMI9,INT13,MST13<br />";
}
If ($grundeg[0]>=13 AND $grundeg[2]>=12 AND $grundeg[4]>=11) { 
    $mojliga_yrken=$mojliga_yrken."Ronin STY13,SMI12,INT11<br />";
}
If ($grundeg[0]>=15 AND $grundeg[3]>=15 AND $grundeg[1]>=13 AND $grundeg[5]>=11) { 
    $mojliga_yrken=$mojliga_yrken."SVOT STY15,FYS15,STO13,MST11<br />";
}
If ($grundeg[0]>=17 AND $grundeg[3]>=16 AND $grundeg[1]>=15 AND $grundeg[5]>=15 AND $grundeg[4]>=13) { 
    $mojliga_yrken=$mojliga_yrken."Doomtrooper STY17,FYS16,STO15(orig17),MST15,INT13<br />";
}
$mojliga_yrken=$mojliga_yrken."Kriminell (Alltid mojligt)<br />";
$mojliga_yrken=$mojliga_yrken."<br />Fardigheter yrken<br />Acolyt: INT13,PER14<br />
Iakttagelseformaga 35%, <br />
Overtyga 75%, Pistol 40%, <br />
fyra valfria fardigheter 40% <br />
<br />
Corpus: INT13,PER12<br />
Fixare 50%, <br />
Forfalskning 40%, Iakttagelseformaga 40%, <br />
Overtyga 60%, valfri vapenfardighet 35% <br />
<br />
Forskare: INT15,MST9<br />
Datorkunskap 50%, <br />
Elektronik 50%, Fixare 25%, Flygfordon 35%, <br />
Iakttagelseformaga 40%, Medicin 45%, <br />
Teknik 40% Du far dessutom valja en av <br />
de fyra fardigheterna Datorkunskap, <br />
Elektronik, Medicin eller Teknik som <br />
specialomrade. Hoj den fardighetens <br />
GCL med +30% <br />
<br />
Inkvisitor: STY13,FYS13,MST15,PER15<br />
Iakttagelseformaga 50%, <br />
Rorliga manovrer 55%, Overtyga 50%, <br />
Pistor 50%, Gevar 50%, Automatvapen 50%, <br />
Obevapnad strid 60%, Undvika 60% <br />
<br />
Interpol: STY13,STO11,FYS13,MST13<br />
Datorkunskap 55%, <br />
Elektronik 55%, Markfordon 50%, <br />
Pistol eller  Gevar 60%, Obevapnad strid 55%, <br />
Sprangteknik 35%, Undvika 40% <br />
<br />
Kaosagent: INT9,PER9<br />
Datorkunskap 35%, <br />
Forfalskning 35%, Iakttagelseformaga 40%, <br />
Rorliga manovrer 40%, tva valfria <br />
stridsfardigheter och en valfri <br />
vanlig fardighet 40%. <br />
<br />
Kriminell: <br />
Fingerfardighet 45%, Fixare 65%, <br />
Forfalskning 30%, Iakttagelseformaga 40%, <br />
Rorliga manovrer 40%, Sprangteknik 30%, <br />
tva valfria stridsfardigheter (dock ej <br />
Vapensystem) 45%. <br />
<br />
Medieman: PER15,INT13<br />
Datorkunskap 40%, <br />
Fixare 40%, Forfalskning 35%, Gomma sig 35%, <br />
Iakttagelseformaga 40%, Overtyga 50%, Pistol 35%. <br />
<br />
Pilot: SMI9,INT13,MST13<br />
Datorkunskap 40%, <br />
Flygfordon 65%, Iakttagelseformaga 55%, <br />
Vapensystem 55%, Obevapnad strid 40%, <br />
en valfri fardighet 40%. <br />
<br />
Rogue: <br />
Fingerfardighet 35%, <br />
Fixare 50%, Flygfordon 45%, <br /> 
Iakttagelseformaga 40%, Navigation 40%, <br />
Overtyga 50%, Pistol eller Gevar 40%, <br />
Vapensystem 35%, Rorliga manovrer 55%, <br />
Obevapnad strid 45%, Sprangteknik 35%. <br />
<br />
Ronin: STY13,SMI12,INT11<br />
Rorliga manovrer 40%, <br />
Iakttagelseformaga 40%, Pistol eller Gevar 50%, <br />
Obevapnad strid 50%, Undvika 30%, <br />
Flyg- eller Markfordon 30%, <br />
Sprangteknik 30%, en valfri stridsfardighet 40% <br />
<br />
SVOT: STY15,FYS15,STO13,MST11<br />
Fixare 40%, Forsta hjalpen 30%, <br />
Iakttagelseformaga 40%, Mark- eller Flygfordon 30%, <br />
Pistol eller Gevar 50%, Enhands narstrv 40%, <br />
Obev strid 50%, Undvika 30%, Sprangteknik 30% <br />
<br />
Trooper: STY11,FYS11<br />
Iakttagelseformaga 50%, <br />
Rorliga manovrer 40%, Automatvapen 35%, <br />
Gevar 40%, Pistol 45%, Obevapnad strid 40%, <br />
Undvika 35%, Sprangteknik 30% <br />
<br />
SPS-Trooper: STY13,FYS13,SMI11,MST13,INT9<br />
Rorliga manovrer 60%, Gomma sig 50%, Iakttagelseformaga 40%, <br /> 
Sprangteknik 40%, Obevapnad Strid 50%, Undvika 30%, <br />
Gevar 40%, Pistol 40%, Automatvapen 30%, <br />
OCH +30% pa antingen Gevar eller Automatvapen, <br />
Enhands narstridsvpn 30%, Kasvpn 40%, <br/>
Vapensystem 40%, Medicin eller Teknik 30%, <br />
Markfordon eller flygfordon 30%<br />
<br />
Doomtrooper: STY17,FYS16,STO15(orig17),MST15,INT13<br />
Datorkunskap 50%, <br />
Elektronik 55%, Iakttagelseformaga 50%, <br />
Rorliga manovrer 65%, Pistol 65%, Gevar 65%, <br />
Automatvapen 65%, Vapensystem 55%, <br />
Undvika 40%, Sprangteknik 30%. <br /><br />
";
/*
Acolyt INT 13, PER 14
Corpus INT 13, PER 12 
Forskare INT 15, MST 9 
Inkvisitor STY 13, FYS 13, MST 15, PER 15
Interpol STY 13, STO 11, FYS 13, MST 13 
Kaosagent INT 9, PER 9 
Mediaman PER 15, INT 13 
Pilot SMI 9, INT 13, MST 13 
Rogue - 
Ronin STY 13, SMI 12, INT 11 
SVOT STY 15, FYS 15, STO 13, MST 11 
Trooper STY 11, FYS 11
Doomtrooper STY 17, FYS 16, STO 15(17), MST 15, INT 13 
*/
print ($mojliga_yrken);
}
?>