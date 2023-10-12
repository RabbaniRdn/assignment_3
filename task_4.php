<?php

$studentGrades=[
   'Rabbani'=>['Math'=>70, 'English'=>50,'Science'=>72],
    'Azazul'=>['Math'=>77, 'English'=>85,'Science'=>66],
    'Rakib'=>['Math'=>90, 'English'=>59,'Science'=>80]
];

function averageGrade($studentGrades){
    $gradeSystems=[
        'A+'=>90,
        'A'=>85,
        'B'=>75,
        'C'=>65,
        'D'=>50,
        'F'=>0

    ];
    foreach($studentGrades as $student=>$grades){
        $total=array_sum($grades);
        $count=count($grades);
        $average=$total/$count;

        $letterGrade='';

        foreach($gradeSystems as $grade=>$minScore){
            if($average>=$minScore){
                $letterGrade=$grade;
                break;
            }
        }
        echo "student:{$student}\n";
        echo "grade:{$letterGrade}\n\n";
    }
}
averageGrade($studentGrades);