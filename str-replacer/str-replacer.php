<?php
$student = "Hardik is studying in BCA ";

// aa line ma "BCA" ni jagya ae "MCA" mukva ma aavse
$newData = str_replace("BCA", "MCA", $student);

echo $newData . "<br>"; // Output: Hardik is studying in MCA 

// original $student variable jyu chhe
echo $student; // Output: Hardik is studying in BCA 
?>
