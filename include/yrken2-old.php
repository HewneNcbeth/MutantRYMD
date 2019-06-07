<?php
function possibla_yrken($grundeg) {
///grundegenskaper
    // STY STO SMI FYS INT MST PER
    //$grundeg[$i]
/* utkast till include möjliga yrken mutant-RYMD */
$mojliga_yrken="Möjliga yrken: <br />Rouge <br />";
If ($grundeg[0]>=11 AND $grundeg[3]>=11) { 
    $mojliga_yrken=$mojliga_yrken."Trooper <br />";
}
If ($grundeg[4]>=13 AND $grundeg[6]>=14) { 
    $mojliga_yrken=$mojliga_yrken."Acolyt <br />";
}
If ($grundeg[4]>=13 AND $grundeg[6]>=12) { 
    $mojliga_yrken=$mojliga_yrken."Corpus <br />";
}
If ($grundeg[4]>=15 AND $grundeg[5]>=9) { 
    $mojliga_yrken=$mojliga_yrken."Forskare <br />";
}
If ($grundeg[0]>=13 AND $grundeg[3]>=13 AND $grundeg[5]>=15 AND $grundeg[6]>=15) { 
    $mojliga_yrken=$mojliga_yrken."Inkvisitor <br />";
}
If ($grundeg[0]>=13 AND $grundeg[1]>=11 AND $grundeg[3]>=13 AND $grundeg[5]>=13) { 
    $mojliga_yrken=$mojliga_yrken."Interpol <br />";
}
If (($grundeg[4]>=9) AND ($grundeg[6]>=9)) { 
    $mojliga_yrken=$mojliga_yrken."Kaosagent <br />";
}
If ($grundeg[6]>=15 AND $grundeg[4]>=13) { 
    $mojliga_yrken=$mojliga_yrken."Mediaman <br />";
}
If ($grundeg[2]>=9 AND $grundeg[4]>=13 AND $grundeg[5]>=13) { 
    $mojliga_yrken=$mojliga_yrken."Pilot <br />";
}
If ($grundeg[0]>=13 AND $grundeg[2]>=12 AND $grundeg[4]>=11) { 
    $mojliga_yrken=$mojliga_yrken."Ronin <br />";
}
If ($grundeg[0]>=15 AND $grundeg[3]>=15 AND $grundeg[1]>=13 AND $grundeg[5]>=11) { 
    $mojliga_yrken=$mojliga_yrken."SVOT <br />";
}
If ($grundeg[0]>=17 AND $grundeg[3]>=16 AND $grundeg[1]>=17 AND $grundeg[5]>=15 AND $grundeg[4]>=13) { 
    $mojliga_yrken=$mojliga_yrken."Doomtrooper <br />";
}
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
Doomtrooper STY 17, FYS 16, STO 17, MST 15, INT 13 
*/
print ($mojliga_yrken);
}
?>