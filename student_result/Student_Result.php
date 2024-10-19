<?php

function Mark_check($mark){
  if($mark > 0 && $mark <= 100)
 {
   if($mark  > 0 && $mark >= 33)
   {
    return true;
   }
   else if ( $mark > 0 && $mark <33) 
   {
    return false;
   }
  
 }
 
}
function Total_marks($math , $eng, $bio, $phy,$chem){
 

    $total_mark = $math+$eng+$bio+$phy+$chem;

    
   
    $test1  = Mark_check($math);
    $test2  = Mark_check($eng);
    $test3  = Mark_check($bio);
    $test4  = Mark_check($phy);
    $test5  = Mark_check($chem);

    if($test1 == true && $test2 == true && $test3 == true && $test4 == true && $test5 == true)
    {
        echo "Total Marks: " . $total_mark;
        echo PHP_EOL;


        $avg = $total_mark/5;
        echo "Average Marks: " . $avg;
        echo PHP_EOL;

       switch($avg)
       {
        case $avg >= 80 && $avg <=100:
            echo"Grade: A+";
            break;
        case $avg >= 70 && $avg <=79:
            echo"Grade: A";
            break;
        case $avg >= 60 && $avg <=69:
            echo"Grade: A-";
            break;
        case $avg >= 50 && $avg <=59:
            echo"Grade: B";
            break;
        case $avg >= 40 && $avg <=49:
            echo"Grade: C"; 
            break;
        case $avg >= 33 && $avg <=39:
            echo"Grade: D"; 
            break;
        case $avg < 33:
            echo"Grade: F";
            break;
       }
    }
    else if($test1 == false || $test2 == false || $test3 == false || $test4 == false || $test5 == false)
    {
        echo"failed";
    }  
};
 
Total_marks(60,65,70,58,62);

 
