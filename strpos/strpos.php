<?php

$student = "Kamaliya Hardik - BCA Student";

// aa string ma "BCA" word kya index thi start thay chhe te find kariye chhiye
echo strpos($student, "BCA")."<br>"; // Output: 18

// aa string ma "Student" word kya thi start thay chhe
echo strpos($student, "Student")."<br>"; // Output: 22

// jya word nathi hoy to false return thay
echo strpos($student, "MSC")."<br>"; // Output: (blank, meaning false)

?>
