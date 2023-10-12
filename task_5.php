<?php
function generatePassword($strlength){
    $lowerCasChars="abcdefghijklmnopqrstuvwxyz";
    $upperCasechars="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers="0123456789";
    $specialChars="!@#$%^&*()_+";
    $allChars=$lowerCasChars.$upperCasechars.$numbers.$specialChars;
    $password='';
    $password.=$lowerCasChars[rand(0,strlen($lowerCasChars)-1)];
    $password.=$upperCasechars[rand(0,strlen($upperCasechars)-1)];
    $password.=$numbers[rand(0,strlen($numbers)-1)];
    $password.=$specialChars[rand(0,strlen($specialChars)-1)];

    for($i=0;$i<$strlength-4;$i++){
    $password .=$allChars[rand(0,strlen($allChars)-1)];

    }
    $password=str_shuffle($password);
    return $password;
}
$password=generatePassword(12);
echo $password;