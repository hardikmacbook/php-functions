<?php
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
}
?>
