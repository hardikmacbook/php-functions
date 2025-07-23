<?php

// student ni full information string ma chhe
$studentData = "Kamaliya Hardik | BCA | Semester 3 | Roll No: 102";

// aa line ma "BCA" thi pachi nu data show karse
echo strstr($studentData, "BCA")."<br>"; // Output: BCA | Semester 3 | Roll No: 102

// aa line ma "Semester" thi pachi nu data show karse
echo strstr($studentData, "Semester")."<br>"; // Output: Semester 3 | Roll No: 102

// agar tamare "Roll No" thi pela nu data joiye to true mukvu pade last ma
echo strstr($studentData, "Roll", true)."<br>"; // Output: Kamaliya Hardik | BCA | Semester 3 |

?>
