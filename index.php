<?php
$spalva = "";
$nuoroda = "";
$browser = $_SERVER['HTTP_USER_AGENT'];

if(preg_match('/Firefox/i',$browser)){
    $browser_name = 'Mozilla Firefox';
    $spalva = "red";
    $nuoroda = "https://www.mozilla.org/media/img/structured-data/logo-firefox-browser.fbc7ffbb50fd.png"; //Nuoroda neveikia
  }elseif(preg_match('/Chrome/i',$browser) && !preg_match('/Edge/i',$browser)){
    $browser_name = 'Google Chrome';
    $spalva = "yellow"; //Su chromu nesimato teksto. Pakeiciau i geltona
  }elseif(preg_match('/Edge/i',$browser)){
    $browser_name = 'Edge';
    $spalva = "blue";
  }

  echo $browser_name;
  echo "<body style='background-color:$spalva'>";
    $failas= '4paskaita\fox.jfif'; 
  echo '<img src="'.$failas.'">'; //rodo icona, bet ne paveiksleli. Greiciausiai, kad parametrai pav nenustatyti.

 ?>