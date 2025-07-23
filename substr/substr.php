<?php

// aa "Hello world" string ma thi index 10 thi pachi nu substring levu chhe
echo substr("Hello world", 10)."<br>"; // Output: d

// aa index 1 thi pachi ni string chhe
echo substr("Hello world", 1)."<br>"; // Output: ello world

echo "<br>";

// aa -1 thi pachi ni string chhe (last character)
echo substr("Hello world", -1)."<br>"; // Output: d

// aa -10 thi pachi ni string chhe (biju character thi last sudhi)
echo substr("Hello world", -10)."<br>"; // Output: ello world

?>
