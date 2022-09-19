<?php
$spalva = "";
$nuoroda = "";
  $browser = $_SERVER['HTTP_USER_AGENT'];

if(preg_match('/Firefox/i',$browser)){
    $browser_name = 'Mozilla Firefox';
    $spalva = "red";
    $nuoroda = "https://www.mozilla.org/media/img/structured-data/logo-firefox-browser.fbc7ffbb50fd.png";
  }elseif(preg_match('/Chrome/i',$browser) && !preg_match('/Edge/i',$browser)){
    $browser_name = 'Google Chrome';
    $spalva = "black";
  }elseif(preg_match('/Edge/i',$browser)){
    $browser_name = 'Edge';
    $spalva = "blue";
  }

  echo $browser_name;
  echo "<body style='background-color:$spalva'>";
    $filepath= '4paskaita\fox.jfif'; 
  echo '<img src="'.$nuoroda.'">';


 ?>