<?php

$text="The quick brown fox jumps over the lazy dog.";
function strReplace($text){
   $lowerString= strtolower($text);
   $newString=str_replace("brown","red",$lowerString);
   return $newString;
}
echo strReplace($text);
echo PHP_EOL;


