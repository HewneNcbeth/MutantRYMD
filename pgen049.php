<?php
session_start();

?>
<html>
<!-- For PHP 4.1 -->
<head>
<?php
//error_reporting(E_ALL ^ E_NOTICE);
//slumpa lagom tarning
function d($nr) {
  $die=rand(1,$nr);
  return($die);
}

include "include/anycolor.ny.php";
//include "yrken2.php";

function valj_grundegenskap($nr) { 
  if ($nr=="0") $ge="STY";
  if ($nr=="1") $ge="STO";
  if ($nr=="2") $ge="SMI";
  if ($nr=="3") $ge="FYS";
  if ($nr=="4") $ge="INT";
  if ($nr=="5") $ge="MST";
  if ($nr=="6") $ge="PER"; 
  return($ge);
}

function bubble_sort($numbers) {
$array_size=count($numbers);
for ( $i = 0; $i < $array_size; $i++ )  
{  
   for ($j = 0; $j < $array_size; $j++ )  
   {  
      if ($numbers[$i] < $numbers[$j])  
      {  
         $temp = $numbers[$i];  
         $numbers[$i] = $numbers[$j];  
         $numbers[$j] = $temp;  
      }  
   }  
}
return ($numbers);
}

function w_tmp_file($input_text_file) { 
//On systems which differentiate between binary and text files (i.e. Windows) the 
//file must be opened with 'b' included in fopen() mode parameter. 
$filename = 'temp/test.txt';
$somecontent = $input_text_file;
// Kanske bade \n och \r som line-end char
// Let's make sure the file exists and is writable first.
if (is_writable($filename)) {
    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence 
    // that's where $somecontent will go when we fwrite() it.
    if (!$handle = fopen($filename, 'wb')) {
         echo "Cannot open file ($filename)";
         exit;
    }
    // Write $somecontent to our opened file.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }
    
    echo "Success, wrote <!--($somecontent)--> to file ($filename)";
    print ("<a href=\"temp/test.txt\">Hogerklicka for att Spara fil</a>");
    fclose($handle);
} else {
    echo "The file $filename is not writable";
}
}


function rullmetod1() {
  $tarning1=d(6);
  $tarning2=d(6);
  $tarning3=d(6);
  $grundegenskapsvarde=$tarning1+$tarning2+$tarning3;
  return($grundegenskapsvarde);
}

function rullmetod2() { 
//De tre basta av fyra
  $tarning[0]=d(6);
  $tarning[1]=d(6);
  $tarning[2]=d(6);
  $tarning[3]=d(6);
  //print ("<!--".$tarning[0]." ".$tarning[1]." ".$tarning[2]." ".$tarning[3]." <br />-->");
  //skall valja de tre hogsta och forkasta den lagsta tarningen

  //bubble_sort (stigande ordning)
  /*
  $array_size=count($tarning);
  for ( $i = 0; $i < $array_size; $i++ )  
  {  
    for ($j = 0; $j < $array_size; $j++ )  
    {  
        if ($tarning[$i] < $tarning[$j])  
        {  
          $temp = $tarning[$i];  
          $tarning[$i] = $tarning[$j];  
          $tarning[$j] = $temp;  
        }  
    }  
  }
  */
  $tarning=bubble_sort($tarning);
  print ("<!--efter bubble sort: (".$tarning[0]." ".$tarning[1]." ".$tarning[2]." ".$tarning[3].") :-->");
  $final_result=$tarning[1]+$tarning[2]+$tarning[3];
  return($final_result);
}

function rullmetod3() { 
//De tre basta av fem
  $tarning[0]=d(6);
  $tarning[1]=d(6);
  $tarning[2]=d(6);
  $tarning[3]=d(6);
  $tarning[4]=d(6);

  $tarning=bubble_sort($tarning);
  print ("<!--efter bubble sort: (".$tarning[0]." ".$tarning[1]." ".$tarning[2]." ".$tarning[3]." ".$tarning[4].") :-->");
  $final_result=$tarning[2]+$tarning[3]+$tarning[4];
  return($final_result);
}

function rullmetod4() {
//Bast av två på varje
  $tarning1=d(6);
  $tarning2=d(6);
  $tarning3=d(6);
  //
  $tarning4=d(6);
  $tarning5=d(6);
  $tarning6=d(6);
  if (($tarning1+$tarning2+$tarning3)>($tarning4+$tarning5+$tarning6)) { 
	$gev=$tarning1+$tarning2+$tarning3;
  }
  else {
	$gev=$tarning4+$tarning5+$tarning6;
	}
  $grundegenskapsvarde=$gev;
  return($grundegenskapsvarde);
}

function rullmetod5() {
//Bast av tre på varje
  $tarning1=d(6);
  $tarning2=d(6);
  $tarning3=d(6);
  $varde[0]=$tarning1+$tarning2+$tarning3;
  //
  $tarning4=d(6);
  $tarning5=d(6);
  $tarning6=d(6);
  $varde[1]=$tarning4+$tarning5+$tarning6;
  //
  $tarning7=d(6);
  $tarning8=d(6);
  $tarning9=d(6);
  $varde[2]=$tarning7+$tarning8+$tarning9;

  $varden=bubble_sort($varde);
  $gev=$varden[2];
  $grundegenskapsvarde=$gev;
  return($grundegenskapsvarde);
}

function rullmetod_psi1($g) {
    if ($g==0) { 
        //STY
        $result=d(6)+d(6)+1;
    }
     if ($g==1) { 
        //STO
        $result=d(6)+d(6)+2;
    }
     if ($g==2) { 
        //SMI
        $result=d(6)+d(6)+d(6);
    }
     if ($g==3) { 
        //FYS
        $result=d(6)+d(6)+1;
    }
     if ($g==4) { 
        //INT
       $result=d(6)+d(6)+6;
    }
     if ($g==5) { 
        //MST
        $result=d(6)+d(6)+10;
    }
     if ($g==6) { 
        //PER
        $result=d(6)+d(6)+d(6)+1;
    }
    return ($result);
}

function rullmetod_psi2($g) {
  //Bast av 2
    if ($g==0) { 
        //STY
        $result1=d(6)+d(6)+1;
	$result2=d(6)+d(6)+1;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==1) { 
        //STO
        $result1=d(6)+d(6)+2;
	$result2=d(6)+d(6)+2;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==2) { 
        //SMI
        $result1=d(6)+d(6)+d(6);
	$result2=d(6)+d(6)+d(6);
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==3) { 
        //FYS
        $result1=d(6)+d(6)+1;
	$result2=d(6)+d(6)+1;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==4) { 
        //INT
       $result1=d(6)+d(6)+6;
       $result2=d(6)+d(6)+6;
       $result=$result1;
       if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==5) { 
        //MST
        $result1=d(6)+d(6)+10;
	$result2=d(6)+d(6)+10;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==6) { 
        //PER
        $result1=d(6)+d(6)+d(6)+1;
	$result2=d(6)+d(6)+d(6)+1;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
    return ($result);
}

function rullmetod_psi3($g) {
  //Bast av 3
    if ($g==0) { 
        //STY
        $result[0]=d(6)+d(6)+1;
	$result[1]=d(6)+d(6)+1;
        $result[2]=d(6)+d(6)+1;
	$resultsorted=bubble_sort($result);
	$resultat=$resultsorted[2];
    }
     if ($g==1) { 
        //STO
        $result[0]=d(6)+d(6)+2;
	$result[1]=d(6)+d(6)+2;
        $result[2]=d(6)+d(6)+2;
	$resultsorted=bubble_sort($result);
	$resultat=$resultsorted[2];
    }
     if ($g==2) { 
        //SMI
        $result[0]=d(6)+d(6)+d(6);
	$result[1]=d(6)+d(6)+d(6);
        $result[2]=d(6)+d(6)+d(6);
	$resultsorted=bubble_sort($result);
	$resultat=$resultsorted[2];
    }
     if ($g==3) { 
        //FYS
        $result[0]=d(6)+d(6)+1;
	$result[1]=d(6)+d(6)+1;
        $result[2]=d(6)+d(6)+1;
	$resultsorted=bubble_sort($result);
	$resultat=$resultsorted[2];
    }
     if ($g==4) { 
        //INT
       $result[0]=d(6)+d(6)+6;
       $result[1]=d(6)+d(6)+6;
       $result[2]=d(6)+d(6)+6;
       $resultsorted=bubble_sort($result);
       $resultat=$resultsorted[2];
    }
     if ($g==5) { 
        //MST
        $result[0]=d(6)+d(6)+10;
	$result[1]=d(6)+d(6)+10;
        $result[2]=d(6)+d(6)+10;
	$resultsorted=bubble_sort($result);
        $resultat=$resultsorted[2];
    }
     if ($g==6) { 
        //PER
        $result[0]=d(6)+d(6)+d(6)+1;
	$result[1]=d(6)+d(6)+d(6)+1;
        $result[2]=d(6)+d(6)+d(6)+1;
	$resultsorted=bubble_sort($result);
        $resultat=$resultsorted[2];
    }
    return ($resultat);
}

function rullmetod_mut1($g) {
     if ($g==0) { 
        //STY
        $result=d(6)+d(6)+d(6)+d(6);
    }
     if ($g==1) { 
        //STO
        $result=d(6)+d(6)+d(6)+3;
    }
     if ($g==2) { 
        //SMI
        $result=d(6)+d(6)+d(6);
    }
     if ($g==3) { 
        //FYS
        $result=d(6)+d(6)+d(6)+1;
    }
     if ($g==4) { 
        //INT
       $result=d(6)+d(6)+1;
    }
     if ($g==5) { 
        //MST
        $result=d(6)+d(6)+1;
    }
     if ($g==6) { 
        //PER
        $result=d(6)+d(6)+1;
    }
    return ($result);
}

function rullmetod_mut2($g) {
    //Bast av 2
     if ($g==0) { 
        //STY
        $result1=d(6)+d(6)+d(6)+d(6);
	$result2=d(6)+d(6)+d(6)+d(6);
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==1) { 
        //STO
        $result1=d(6)+d(6)+d(6)+3;
	$result2=d(6)+d(6)+d(6)+3;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==2) { 
        //SMI
        $result1=d(6)+d(6)+d(6);
	$result2=d(6)+d(6)+d(6);
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==3) { 
        //FYS
        $result1=d(6)+d(6)+d(6)+1;
	$result2=d(6)+d(6)+d(6)+1;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==4) { 
        //INT
       $result1=d(6)+d(6)+1;
       $result2=d(6)+d(6)+1;
       $result=$result1;
       if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==5) { 
        //MST
        $result1=d(6)+d(6)+1;
        $result2=d(6)+d(6)+1;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
     if ($g==6) { 
        //PER
        $result1=d(6)+d(6)+1;
	$result2=d(6)+d(6)+1;
        $result=$result1;
	if ($result2>$result1) {
	  $result=$result2;
	}
    }
    return ($result);
}

function rullmetod_mut3($g) {
    //Bast av 3
     if ($g==0) { 
        //STY
        $result[0]=d(6)+d(6)+d(6)+d(6);
	$result[1]=d(6)+d(6)+d(6)+d(6);
        $result[2]=d(6)+d(6)+d(6)+d(6);
	$sorted=bubble_sort($result);
        $resultat=$sorted[2];
    }
     if ($g==1) { 
        //STO
        $result[0]=d(6)+d(6)+d(6)+3;
	$result[1]=d(6)+d(6)+d(6)+3;
        $result[2]=d(6)+d(6)+d(6)+3;
	$sorted=bubble_sort($result);
        $resultat=$sorted[2];
    }
     if ($g==2) { 
        //SMI
        $result[0]=d(6)+d(6)+d(6);
	$result[1]=d(6)+d(6)+d(6);
        $result[2]=d(6)+d(6)+d(6);
	$sorted=bubble_sort($result);
        $resultat=$sorted[2];
    }
     if ($g==3) { 
        //FYS
        $result[0]=d(6)+d(6)+d(6)+1;
	$result[1]=d(6)+d(6)+d(6)+1;
        $result[2]=d(6)+d(6)+d(6)+1;
	$sorted=bubble_sort($result);
        $resultat=$sorted[2];
    }
     if ($g==4) { 
        //INT
       $result[0]=d(6)+d(6)+1;
       $result[1]=d(6)+d(6)+1;
       $result[2]=d(6)+d(6)+1;
       $sorted=bubble_sort($result);
       $resultat=$sorted[2];
    }
     if ($g==5) { 
        //MST
        $result[0]=d(6)+d(6)+1;
        $result[1]=d(6)+d(6)+1;
        $result[2]=d(6)+d(6)+1;
	$sorted=bubble_sort($result);
        $resultat=$sorted[2];
    }
     if ($g==6) { 
        //PER
        $result[0]=d(6)+d(6)+1;
	$result[1]=d(6)+d(6)+1;
        $result[2]=d(6)+d(6)+1;
	$sorted=bubble_sort($result);
        $resultat=$sorted[2];
    }
    return ($resultat);
}

function gen_slp($typ) {
  include "include/yrken2.php";
  // STYRKA STORLEK SMIDIGHET FYSIK INTELLGENS MENTAL_STYRKA PERSONLIGHET
  if ($typ=="nom1") { 
    //loopa grundegenskaper
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod1();
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
    }
  }
   if ($typ=="nom1-F") { 
    //loopa grundegenskaper
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod1();
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
      }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
    }
  }
  if ($typ=="nom2") { 
    //loopa grundegenskaper
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod2();
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
    }
  }
  if ($typ=="nom3") { 
    //loopa grundegenskaper
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod3();
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
    }
  }
    if ($typ=="nom4") { 
    //loopa grundegenskaper
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod4();
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
    }
  }
  if ($typ=="nom4-F") { 
    //loopa grundegenskaper
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod4();
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
      }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
    }
  }
    if ($typ=="nom5") {
    //loopa grundegenskaper
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod5();
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
    }
  }
      if ($typ=="nom5-F") {
    //loopa grundegenskaper
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod5();
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
      }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
    }
  }
  if ($typ=="psi1") {
    for ($i=0; $i<=6; $i++) {
        $grundeg[$i]=rullmetod_psi1($i);
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
   if ($typ=="psi1-F") {
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod_psi1($i);
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
        }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
  if ($typ=="psi2") {
    for ($i=0; $i<=6; $i++) {
        $grundeg[$i]=rullmetod_psi2($i);
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
    if ($typ=="psi2-F") {
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod_psi2($i);
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
        }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
  if ($typ=="psi3") {
    for ($i=0; $i<=6; $i++) {
        $grundeg[$i]=rullmetod_psi3($i);
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
    if ($typ=="psi3-F") {
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod_psi3($i);
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
        }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
  if ($typ=="mut1") {
    for ($i=0; $i<=6; $i++) {
        $grundeg[$i]=rullmetod_mut1($i);
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
    if ($typ=="mut1-F") {
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod_mut1($i);
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
        }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
 if ($typ=="mut2") {
    for ($i=0; $i<=6; $i++) {
        $grundeg[$i]=rullmetod_mut2($i);
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
   if ($typ=="mut2-F") {
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod_mut2($i);
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
        }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
if ($typ=="mut3") {
    for ($i=0; $i<=6; $i++) {
        $grundeg[$i]=rullmetod_mut3($i);
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
  if ($typ=="mut3-F") {
    for ($i=0; $i<=6; $i++) {
      $grundeg[$i]=rullmetod_mut3($i);
      if (($grundeg[0]>=13)&&($set0!=TRUE)) { 
        $grundeg[0]=$grundeg[0]-d(2)-1;
	$set0=TRUE;
        }
      if (($grundeg[1]>=12)&&($set1!=TRUE)) { 
        $grundeg[1]=$grundeg[1]-d(3)-1;
	$set1=TRUE;
      }
      if ($set5!=TRUE) {
        $grundeg[5]=$grundeg[5]+d(2)-1;
        $set5=TRUE;
      }
      if ($set6!=TRUE) {
        $grundeg[6]=$grundeg[6]+d(3)-1;
        $set6=TRUE;
      }
        print (valj_grundegenskap($i));
        print (" ");
        print ($grundeg[$i]);
        print ("<br />");
    }
  }
  if ($typ=="user") { 
    ///grundegenskaper
    // STY STO SMI FYS INT MST PER
	$i=0;
      $grundeg[$i]=$_SESSION['STY'];
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
      $i++;
      $grundeg[$i]=$_SESSION['STO'];
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
      $i++;
       $grundeg[$i]=$_SESSION['SMI'];
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
      $i++;
       $grundeg[$i]=$_SESSION['FYS'];
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
      $i++;
      $grundeg[$i]=$_SESSION['INT'];
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
      $i++;
      $grundeg[$i]=$_SESSION['MST'];
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
      $i++;
      $grundeg[$i]=$_SESSION['PER'];
      print (valj_grundegenskap($i));
      print (" ");
      print ($grundeg[$i]);
      print ("<br />");
  }
  //inkludera yrken.php har!!!------NEJ-----------
  //include "yrken.php";
  possibla_yrken ($grundeg);
  return($grundeg);
}
function sekundara($grundeg) {
  print ("<br />");
  // STY STO SMI FYS INT MST PER
  // KP FF UP SB HH KP_VB KP_HB KP_M KP_BRK KP_VA KP_HA KP_HUV VIKT LANGD
  
  //KP
  $sekundara[0]=$grundeg[1]+$grundeg[3]; 
  print ("KP ".$sekundara[0]."<br />");
  //FF
  $sekundara[1]=$grundeg[2]+$grundeg[3];
  print ("FF ".$sekundara[1]."<br />");
  //UP
  $sekundara[2]=3*$grundeg[3]+$grundeg[5]-$grundeg[1];
  print ("UP ".$sekundara[2]."<br />");
  //SB
  if ($grundeg[0]+$grundeg[1]<=10) $sekundara[3]=-2;
  if ($grundeg[0]+$grundeg[1]>=11&&$grundeg[0]+$grundeg[1]<=23) $sekundara[3]=0;
  if ($grundeg[0]+$grundeg[1]>=24&&$grundeg[0]+$grundeg[1]<=25) $sekundara[3]="+1T2";
  if ($grundeg[0]+$grundeg[1]>=26&&$grundeg[0]+$grundeg[1]<=32) $sekundara[3]="+1T4";
  if ($grundeg[0]+$grundeg[1]>=33&&$grundeg[0]+$grundeg[1]<=36) $sekundara[3]="+1T6";
  if ($grundeg[0]+$grundeg[1]>=37&&$grundeg[0]+$grundeg[1]<=41) $sekundara[3]="+1T8";
  if ($grundeg[0]+$grundeg[1]>=42&&$grundeg[0]+$grundeg[1]<=50) $sekundara[3]="+2T6";
  if ($grundeg[0]+$grundeg[1]>=51&&$grundeg[0]+$grundeg[1]<=60) $sekundara[3]="+3T6";
  //Darutover for varje +20 = +1T6 
  print ("SB ".$sekundara[3]."<br />");
  $temp=d(10)+d(10);
  if ($temp<=15) $sekundara[4]="Hogerhant";
  if ($temp>=16&&$temp<=18) $sekundara[4]="Vansterhant";
  if ($temp==19) $sekundara[4]="Dubbelhant";
  if ($temp==20) $sekundara[4]="Ambidextros";
  print ("Huvudhand ".$sekundara[4]."<br />");
  // KP i kroppsdelar VB HB MA BR HV HA HU sekundara 5-11
  if ($sekundara[0]>=8&&$sekundara[0]<=11) { 
    $sekundara[5]=3;
    $sekundara[6]=3;
    $sekundara[7]=3;
    $sekundara[8]=5;
    $sekundara[9]=2;
    $sekundara[10]=2;
    $sekundara[11]=2;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  if ($sekundara[0]>=12&&$sekundara[0]<=15) { 
    $sekundara[5]=4;
    $sekundara[6]=4;
    $sekundara[7]=4;
    $sekundara[8]=6;
    $sekundara[9]=3;
    $sekundara[10]=3;
    $sekundara[11]=3;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  if ($sekundara[0]>=16&&$sekundara[0]<=20) { 
    $sekundara[5]=5;
    $sekundara[6]=5;
    $sekundara[7]=5;
    $sekundara[8]=7;
    $sekundara[9]=4;
    $sekundara[10]=4;
    $sekundara[11]=4;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  if ($sekundara[0]>=21&&$sekundara[0]<=25) { 
    $sekundara[5]=6;
    $sekundara[6]=6;
    $sekundara[7]=6;
    $sekundara[8]=8;
    $sekundara[9]=5;
    $sekundara[10]=5;
    $sekundara[11]=5;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  if ($sekundara[0]>=26&&$sekundara[0]<=30) { 
    $sekundara[5]=7;
    $sekundara[6]=7;
    $sekundara[7]=7;
    $sekundara[8]=9;
    $sekundara[9]=6;
    $sekundara[10]=6;
    $sekundara[11]=6;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  if ($sekundara[0]>=31&&$sekundara[0]<=35) { 
    $sekundara[5]=8;
    $sekundara[6]=8;
    $sekundara[7]=8;
    $sekundara[8]=10;
    $sekundara[9]=7;
    $sekundara[10]=7;
    $sekundara[11]=7;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  //for varje +5 KP: +1 pa varje
  if ($sekundara[0]>=36&&$sekundara[0]<=40) { 
    $sekundara[5]=9;
    $sekundara[6]=9;
    $sekundara[7]=9;
    $sekundara[8]=11;
    $sekundara[9]=8;
    $sekundara[10]=8;
    $sekundara[11]=8;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  if ($sekundara[0]>=41&&$sekundara[0]<=45) { 
    $sekundara[5]=10;
    $sekundara[6]=10;
    $sekundara[7]=10;
    $sekundara[8]=12;
    $sekundara[9]=9;
    $sekundara[10]=9;
    $sekundara[11]=9;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  if ($sekundara[0]>=46&&$sekundara[0]<=50) { 
    $sekundara[5]=11;
    $sekundara[6]=11;
    $sekundara[7]=11;
    $sekundara[8]=13;
    $sekundara[9]=10;
    $sekundara[10]=10;
    $sekundara[11]=10;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  if ($sekundara[0]>=51&&$sekundara[0]<=55) { 
    $sekundara[5]=12;
    $sekundara[6]=12;
    $sekundara[7]=12;
    $sekundara[8]=14;
    $sekundara[9]=11;
    $sekundara[10]=11;
    $sekundara[11]=11;
    print ("KP_Vanster_Ben=".$sekundara[5].", KP_Hoger_Ben=".$sekundara[6]."<br />");
    print ("KP_Mage=".$sekundara[7]."<br />"); 
    print ("KP_Brostkorg=".$sekundara[8]."<br />");
    print ("KP_Vanster_Arm=".$sekundara[9].", KP_Hoger_Arm=".$sekundara[10]."<br />"); 
    print ("KP_Huvud=".$sekundara[11]."<br />");
  }
  //grundeg
  //STY-0 STO-1 SMI-2 FYS-3 INT-4 MST-5 PER-6
  //VIKT LANGD
  
  //Vikt
  if ($grundeg[1]<=6) {
	$vikt=1+(($grundeg[1]-1)*9)+d(8);
	}
  if (($grundeg[1]>=7)&&($grundeg[1]<=16)) {
	$vikt=51+(($grundeg[1]-7)*5)+d(5);
	}
  if ($grundeg[1]>=17) {
	$vikt=101+(($grundeg[1]-17)*10)+d(10);
	}
//Over- normal- eller overvikt (=belastningsavdrag)
  $nutri=d(100);
  $overundervikt=0;
  $prefix="";
  if ($nutri<=10) { 
      //undervikt
      $prefix="undervikt"; 
      $amount=d(10)*-1;
  }
  if ($nutri>=80) {
      //Overvikt
      $prefix="overvikt";
      $amount=d(10)*2;
  }
  if (!($amount==0)) $overundervikt=$amount;
  /*
  if ($grundeg[0]<$grundeg[1]) {
	$vikt=d(9)+(($grundeg[1]-5)*5)+35+(d(6)-d(5));
	}
	else {
	$vikt=d(9)+(($grundeg[1]-5)*5)+35+(d(8)-d(4));
	}
*/
//Langd
 if ($grundeg[1]==1) {
	$min=10;
	$max=60;
	$spann=$max-$min;
	$langd=$min+d($spann);
	}

  if ($grundeg[1]==2) {
	$min=41;
	$max=110;
	$spann=$max-$min;
	$langd=$min+d($spann);
	}

  if ($grundeg[1]==3) {
	$min=91;
	$max=125;
	$spann=$max-$min;
	$langd=$min+d($spann);
	}
	
  if ($grundeg[1]==4) {
	$min=106;
	$max=140;
	$spann=$max-$min;
	$langd=$min+d($spann);
	}
  
  if (($grundeg[1]>=5)&&($grundeg[1]<=9)) {
	$min=121+(($grundeg[1]-5)*10);
	$max=121+(($grundeg[1]-5)*10)+29;
	$spann=$max-$min;
	$mitten=$min+$spann/2;
	$langd=$mitten+($spann/30*($grundeg[1]/3-$grundeg[0]/2));
//Andring, forenkling
	//$langd=$min+d($spann);
  /*
	$alfa=121+(($grundeg[1]-5)*10);
	$langd=$alfa+(($alfa+29)-$alfa)*($grundeg[1]-$grundeg[0]);
	*/
	}
if (($grundeg[1]>=10)&&($grundeg[1]<=12)) { 
	$min=161;
	$spann=29;
	$mitten=$min+$spann/2;
	$langd=$mitten+($spann/30*($grundeg[1]/3-$grundeg[0]/2));
/*
	$langd=171+((185-161)*($grundeg[1]-$grundeg[0]));
	*/
//Andring, forenkling
	//$langd=$min+d($spann);
	}

 if (($grundeg[1]>=13)&&($grundeg[1]<=17)) {
	$min=166+(($grundeg[1]-13)*5);
	$max=166+(($grundeg[1]-13)*5)+29;
	$spann=$max-$min;
	$mitten=$min+$spann/2;
	$langd=$mitten+($spann/30*($grundeg[1]/3-$grundeg[0]/2));
//Andring, forenkling
	//$langd=$min+d($spann);
 /*
	$alfa=160+(($grundeg[1]-13)*5);
	$langd=$alfa+(($alfa+29)-$alfa)*($grundeg[1]-$grundeg[0]);
	*/
	}
 if (($grundeg[1]>=18)&&($grundeg[1]<=21)) {
	$min=191+(($grundeg[1]-18)*9);
	$max=191+(($grundeg[1]-18)*9)+29;
	$spann=$max-$min;
	$mitten=$min+$spann/2;
	$langd=$mitten+($spann/30*($grundeg[1]/3-$grundeg[0]/2));
//Andring, forenkling
	//$langd=$min+d($spann);
	/*
	$alfa=191+(($grundeg[1]-18)*29);
	$langd=$alfa+(($alfa+29)-$alfa)*($grundeg[1]-$grundeg[0]);
	*/
	}
	
 if ($grundeg[1]>21) {
	$min=191+(($grundeg[1]-18)*9);
	$max=191+(($grundeg[1]-18)*9)+29;
	$spann=$max-$min;
	$mitten=$min+$spann/2;
	$langd=$mitten+($spann/30*($grundeg[1]/3-$grundeg[0]/2));
//Andring, forenkling
	//$langd=$min+d($spann);
	/*
	$alfa=191+(($grundeg[1]-18)*29);
	$langd=$alfa+(($alfa+29)-$alfa)*($grundeg[1]-$grundeg[0]);
	*/
	}
/*
  if ($grundeg[0]<$grundeg[1]) { 
	$langd=$grundeg[1]*10+60+d(5)-d(10);
  } else {
	$langd=$grundeg[1]*10+60+d(4)-d(10);
	}
*/
  $sekundara[12]=$vikt;
  if (!($overundervikt==0)) {
      $sammanlagdvikt=$vikt+$overundervikt;
      $vikt=$vikt.", ".$prefix."=".$sammanlagdvikt;
      $belastningsavdrag=round(abs($overundervikt/4),0);
      $vikt=$vikt." Belastningsavdrag=".$belastningsavdrag;
  }
  $sekundara[12]=$vikt;
  $sekundara[13]=round($langd,0);
  print ("Vikt=".$sekundara[12]."<br />");
  print ("Langd=".$sekundara[13]."<br />");
  $sekundara[14]=skin_color();
  print ("Hudfarg: ".$sekundara[14]."<br />");
  $sekundara[15]=hair_color();
  print ("Harfarg: ".$sekundara[15]."<br />");
  $sekundara[16]=eye_color();
  print ("Ogonfarg: ".$sekundara[16]."<br />");
  return($sekundara);
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!-- 
<meta http-equiv="refresh" content="10">
-->
<META HTTP-EQUIV="Expires" CONTENT="Mon, 27 Jul 1997 00:00:00 GMT">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-store">
<META HTTP-EQUIV="Cache-Control" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" CONTENT="must-revalidate">

<META HTTP-EQUIV="Pragma" CONTENT="no-cache">

<meta name="author" content="Hans Nyberg" />

<title>Genererar Figurer f&ouml;r Mitt Mutant-RYMD vers 4.2</title>

<style>
  body {
    font-size : 12px;
    font-family : Monospace, arial,verdana,Ms serif,Times New Roman,Times;
    color : #000000;
    background : #CCCCCC;
    /*
    background-image : url('gfx/warning01.jpg');
    background-repeat : no-repeat;
    background-repeat:repeat-x;
    background-attachment: fixed;
    background-position:right top;
    */
  }
</style>
<!--
<link REL="stylesheet" TYPE="text/css" href="style1.css" />
-->
</head>

<body>
<!--<p>Generera en SpelLedar Person (SLP) "statist" for Mutant R*Y*M*D eller SP</p>-->

<?php
/* RADEN NEDAN TAS BORT EFTER TEST
*/
//$_SESSION['stillactive']="false";
?>

<h4>Slumpa fram en rollfigur for Mutant-R*Y*M*D</h4>
<table cellpadding="2" cellspacing="0" border="0" style="font-size:8pt;color:black;background-color: #EEEEEE; border: 1px solid #878787">
<!-- NOM-MAN -->
<tr>
<td cellpadding="0" cellspacing="0">
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="nom1" name="typ" />
<input type="submit" name="submit_button1" value="NOM metod 1" style="font-size:8pt;" />
</form>
</td>
<td cellpadding="0" cellspacing="0">
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-4" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="nom4" name="typ" />
<input type="submit" name="submit_button4" value="NOM met4 (Bast av 2)" style="font-size:8pt;" />
</form>
</td>
<td cellpadding="0" cellspacing="0">
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-5" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="nom5" name="typ" />
<input type="submit" name="submit_button5" value="NOM met5 (Bast av 3)" style="font-size:8pt;" />
</form>
</td>

<!-- NOM-KVINNA -->

<td cellpadding="0" cellspacing="0">
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="nom1-F" name="typ" />
<input type="submit" name="submit_button1-F" value="NOM 1-Kvinna" style="font-size:8pt;" />
</form>
</td>
<td cellpadding="0" cellspacing="0">
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-4" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="nom4-F" name="typ" />
<input type="submit" name="submit_button4-F" value="NOM 4-Kvinna" style="font-size:8pt;" />
</form>
</td>
<td cellpadding="0" cellspacing="0">
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-5" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="nom5-F" name="typ" />
<input type="submit" name="submit_button5-F" value="NOM 5-Kvinna" style="font-size:8pt;" />
</form>
</td>
</tr>
<!-- PSI-MAN -->
<tr>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-psi-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="psi1" name="typ" />
<input type="submit" name="submit_button_psi1" value="PSI metod 1" style="font-size:8pt;" />
</form>
</td>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-psi-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="psi2" name="typ" />
<input type="submit" name="submit_button_psi1" value="PSI metod 2 (Bast av 2)" style="font-size:8pt;" />
</form>
</td>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-psi-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="psi3" name="typ" />
<input type="submit" name="submit_button_psi1" value="PSI metod 3 (Bast av 3)" style="font-size:8pt;" />
</form>
</td>

<!-- PSI-KVINNA -->

<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-psi-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="psi1-F" name="typ" />
<input type="submit" name="submit_button_psi1-F" value="PSI-1-Kvinna" style="font-size:8pt;" />
</form>
</td>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-psi-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="psi2-F" name="typ" />
<input type="submit" name="submit_button_psi1-F" value="PSI 2-Kvinna" style="font-size:8pt;" />
</form>
</td>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-psi-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="psi3-F" name="typ" />
<input type="submit" name="submit_button_psi1-F" value="PSI 3-Kvinna" style="font-size:8pt;" />
</form>
</td>
</tr>
<!-- MUT-MAN -->
<tr>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-mut-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="mut1" name="typ" />
<input type="submit" name="submit_button_mut1" value="MUT metod 1" style="font-size:8pt;" />
</form>
</td>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-mut-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="mut2" name="typ" />
<input type="submit" name="submit_button_mut1" value="MUT metod 2 (Bast av 2)" style="font-size:8pt;" />
</form>
</td>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-mut-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="mut3" name="typ" />
<input type="submit" name="submit_button_mut1" value="MUT metod 3 (Bast av 3)" style="font-size:8pt;" />
</form>
</td>

<!-- MUT-KVINNA -->

<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-mut-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="mut1-F" name="typ" />
<input type="submit" name="submit_button_mut1-F" value="MUT-1-Kvinna" style="font-size:8pt;" />
</form>
</td>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-mut-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="mut2-F" name="typ" />
<input type="submit" name="submit_button_mut1-F" value="MUT 2-Kvinna" style="font-size:8pt;" />
</form>
</td>
<td>
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-mut-1" STYLE="margin: 0px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="mut3-F" name="typ" />
<input type="submit" name="submit_button_mut1-F" value="MUT 3-Kvinna" style="font-size:8pt;" />
</form>
</td>
</tr>
<tr>
<td colspan="6">
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="slp-user" STYLE="margin: 2px; padding: 0px;" enctype="multipart/form-data" method="post" />
<input type="hidden" value="user" name="typ" />
STY<input type="text" name="STY" size="2">
STO<input type="text" name="STO" size="2">
SMI<input type="text" name="SMI" size="2">
FYS<input type="text" name="FYS" size="2">
INT<input type="text" name="INT" size="2">
MST<input type="text" name="MST" size="2">
PER<input type="text" name="PER" size="2">
<input type="submit" name="submit_button_user" value="Egna varden" />
</form>
</td>
</tr>
</table>
<table border="1" style="border: 1px solid #878787; padding:2px;color:black; background-color: #DDDDDD">
<tr>
<td valign="top">
<?php
if(isset($_POST['submit_button1'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button1-F'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button2'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button2-F'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button3'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button3-F'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button4'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button4-F'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button5'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button5-F'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button_psi1'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button_psi1-F'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button_mut1'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button_mut1-F'])){
  $_SESSION['typ']=$_POST['typ'];
}

if(isset($_POST['submit_button_user'])){
  $_SESSION['typ']=$_POST['typ'];
  $_SESSION['STY']=$_POST['STY'];
  $_SESSION['STO']=$_POST['STO'];
  $_SESSION['SMI']=$_POST['SMI'];
  $_SESSION['FYS']=$_POST['FYS'];
  $_SESSION['INT']=$_POST['INT'];
  $_SESSION['MST']=$_POST['MST'];
  $_SESSION['PER']=$_POST['PER'];
}

if(isset($_POST['submit_button_reset'])){
  unset($_SESSION['typ']);
  $_SESSION['reset']="TRUE";
}

if (isset($_SESSION['typ'])&&!isset($_SESSION['reset'])) {
  print ("Du tanker gora en ");
  print ($_SESSION['typ']);
  print ("<br />Grundegenskaper: <br />");
  $primara=gen_slp($_SESSION['typ']);
  /*
  if ($_SESSION['typ']=="nom1") gen_nom1();
  if ($_SESSION['typ']=="nom2") gen_nom2();
  if ($_SESSION['typ']=="nom3") gen_nom3();
  */
}
?>
Nekromutaner: STY+5, STO+-0, SMI-1, FYS-2, INT-3, MST-2 (PER-5)
</td>
<td valign="top">
(Ersatt a a och o med de sista svenska tecknen i alfabetet dar det ar nodvandigt.</br>
l&auml;ngd tas med en nypa salt. Vikt tycks st&auml;mma)
<?php
if (isset($_SESSION['typ'])&&!isset($_SESSION['reset'])) {
  $typ=$_SESSION['typ'];
  $sekundara=sekundara($primara);
  $prim="STY ".$primara[0]."\n";
  $prim.="STO ".$primara[1]."\n";
   $prim.="SMI ".$primara[2]."\n";
   $prim.="FYS ".$primara[3]."\n";
   $prim.="INT ".$primara[4]."\n";
 $prim.="MST ".$primara[5]."\n";
 $prim.="PER ".$primara[6]."\n"; 
  $sekund="KP ".$sekundara[0]."\n";
  $sekund.="FF ".$sekundara[1]."\n";
  $sekund.="UP ".$sekundara[2]."\n";
  $sekund.="SB ".$sekundara[3]."\n";
  $sekund.="Huvudhand ".$sekundara[4]."\n";
  $sekund.="KP_VB ".$sekundara[5]."\n";
  $sekund.="KP_HB ".$sekundara[6]."\n";
  $sekund.="KP_MA ".$sekundara[7]."\n";
  $sekund.="KP_BR ".$sekundara[8]."\n";
  $sekund.="KP_VA ".$sekundara[9]."\n";
  $sekund.="KP_HA ".$sekundara[10]."\n";
  $sekund.="KP_HU ".$sekundara[11]."\n";
  $sekund.="Vikt ".$sekundara[12]."\n";
  $sekund.="Langd ".$sekundara[13]."\n";
  $sekund.="Hud ".$sekundara[14]."\n";
  $sekund.="Har ".$sekundara[15]."\n";
  $sekund.="Ogon ".$sekundara[16]."\n";
  $text_file=$typ;
  $text_file.=" \n";
  $text_file.=$prim;
  $text_file.=" \n\r";
  $text_file.=$sekund;
  //print ("<p>".$text_file."</p>");
  w_tmp_file($text_file);
}
?>
</td>
</tr>
<tr>
<td colspan="2">
<form action="<?php print ("{$_SERVER['PHP_SELF']}"); ?>" name="reset" /*STYLE="margin: 0px; padding: 0px;"*/ enctype="multipart/form-data" method="post">
<input type="hidden" value="reset" name="typ">
<input type="submit" name="submit_button_reset" value="Reset">
</form>
</td>
<td>
</td>
</tr>
</table>
</body>
<?php
if ($_SESSION['stillactive']=="false") { 
  print("ending session!");
  session_destroy(); 
}
session_destroy();
exit; /* anyway */
?>
</html>
