<?php
// funtion date/time
// time (), date (), mktime(), strtotime()

echo date("l", time() + 60 * 60 * 24 * 3);
echo "<br>";
echo date("d M Y", time() - 60 * 60 * 24 * 3);
echo "<br>";
echo date("l", mktime(0, 0, 0, 11, 12, 2007));
echo "<br>";
echo date("l", strtotime("12 nov 2007"));

// funtion string
// strlen()
