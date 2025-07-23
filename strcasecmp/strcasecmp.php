<!-- 
$a="hello";
$b="hello";

if(strcasecmp($a,$b)==0)
{
    echo "strings are same";
}
else if (strcasecmp($a,$b)<0)
{
    echo "a is less than b";
}
else if (strcasecmp($a,$b)>0)
{
    echo "a is greater than b";
} -->



<?php
$student1 = "Hardik";
$student2 = "hardik";

// aa case-insensitive name compare kare chhe
if (strcasecmp($student1, $student2) == 0) {
    echo "Student names are same";
} else if (strcasecmp($student1, $student2) < 0) {
    echo "$student1 comes before $student2";
} else {
    echo "$student1 comes after $student2";
}
?>

