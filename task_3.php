<?php
$grades=array(85, 92, 78, 88, 95);
function descendingGrades($grades){
    rsort($grades);
    return $grades;
}
print_r(descendingGrades($grades));