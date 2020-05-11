<?php
system('clear');
echo "********** { Ramalan Cuaca } **********\n";
echo "*                                     *\n";
echo "* Coded By : CapthaCode404            *\n";
echo "* Special Thanks : DevSec45 - BCC -   *\n";
echo "* IndoSec                             *\n";
echo "*                                     *\n";
echo "***************************************\n";
echo "Input Provinsi :";
   $url = "http://iotcampus.net/bmkg/?menu=cuaca&wilayah=";
   $wilayah = trim(fgets(STDIN));
   $a = urlencode($wilayah);
   $a = file_get_contents($url.$a);
   $ab = json_decode($a, true);
   if(strpos($a, "error")){
	echo "{ Provinsi Not Found }\n";
  }else{
   foreach($ab as $c){
	echo "\n===================\n";
   	echo "Kota : ".$c['Kota']."\n";
   	echo "Pagi : ".$c['Pagi']."\n";
   	echo "Siang : ".$c['Siang']."\n";
   	echo "Malam : ".$c['Malam']."\n";
	echo "Dini Hari : ".$c['Dini Hari']."\n";
	echo "Suhu : ".$c['Suhu']."\n";
   	echo "====================\n";
   }	}?>