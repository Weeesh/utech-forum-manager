<?php

$file = fopen("seo.csv","r");

while(! feof($file)){

  print_r(fgetcsv($file));

 }

fclose($file);

?>