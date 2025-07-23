<!-- 
$a="hello";
$b="hello";

if(strcmp($a,$b)==0)
{
    echo "strings are same";
}
else if (strcmp($a,$b)<0)
{
    echo "a is less than b";
}
else if (strcmp($a,$b)>0)
{
    echo "a is greater than b";
} -->


<?php
$student1 = "Hardik";
$student2 = "Harsh";

// student na naam compare kariye chhiye
if (strcmp($student1, $student2) == 0) {
    echo "Student names are same";
} else if (strcmp($student1, $student2) < 0) {
    echo "$student1 comes before $student2";
} else {
    echo "$student1 comes after $student2";
}
?>

