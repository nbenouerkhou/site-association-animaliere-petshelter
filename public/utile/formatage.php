<?php
function titreNiveau1($text,$color){
    $txt="<h1 class='text-center my-3 ".$color." policeTitre titreTextShadow'>";
    $txt.=$text; 
    $txt.= "</h1>";
    return $txt;
}

function titreNiveau2($text,$color){
  $txt="<h2 class='text-center my-3 ".$color." policeTitre titreTextShadow'>";
  $txt.=$text;
  $txt.= "</h2>";
  return $txt;
}

function titreNiveau3($text,$color){
  $txt="<h3 class='my-3 ".$color." policeTitre titreTextShadow'>";
  $txt.=$text;
  $txt.= "</h3>";
  return $txt;
}

function titreNiveau5($text,$color){
  $txt="<h5 class='my-3 ".$color." policeTitre titreTextShadow'>";
  $txt.=$text;
  $txt.= "</h5>";
  return $txt;
}

function titrePost($text){
  $txt="<h2 class='my-3 policeTitre titreTextShadow border-bottom border-dark'>";
  $txt.=$text;
  $txt.= "</h2>";
  return $txt;
}


// function affichageCoupe($str,$taille){
//    $desc = "";
//    if(strlen($str) > $taille/2){
//       if(strpos($str,'<br />',($taille/2)) < $taille){
//           $desc = substr($str,0, strpos($str,'<br />',($taille/2)));
//       } else if(strpos($str, '.',($taille/2)) < $taille){
//           $desc = substr($str,0, strpos($str, '.',($taille/2)));
//       } else if(strpos($str,'<br />',0) <= ($taille/2)){
//           $desc = substr($str,0,strpos($str,'<br />',0));
//       } else if(strpos($str,'.',0) <= ($taille/2)){
//         $desc = substr($str,0,strpos($str,'.',0));
//    } else {
//       $desc = substr($str,0,strpos($str,' ',($taille/3)));
//    } else {
//     $desc = $str;
//    }
//   $desc .="<b class='text-primary'>[...]</b>";
//   return $desc;
//   }
// }
?>