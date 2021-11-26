<?php
for ($i=1; $i <= 50; $i= $i+3) { 
    echo "$i<br>";
    if ($i % 11 == 0) {
        break;
    }
}

?>