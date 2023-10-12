<?php
$numbers=[1,2,3,4,5,6,7,8,9,10];
function isOdd($number){
        if($number %2 !=0 ){
            return $number;
        }
}
 print_r( array_filter($numbers,'isOdd'));