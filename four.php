<?php
$a=2;
for ($i=1; $i <= 10; $i++) { 
    echo "$i".'x'."$a"."=".$i*$a;
    echo "<br>";
    echo "<hr>";
}
echo "<br>";
$b= 3;
for ($i=1; $i <= 10 ; $i++) { 
 
    echo "$i".'x'.$b.'='.$a*$b;
    echo "<br>";
    echo "<hr>";
}
echo "<br>";
$c= 4;
for ($i=1; $i <= 10; $i++) { 
    
    echo "$i".'x'.$c.'='.$i*$c;
    echo "<br>";
    echo "<hr>";
}
echo "<br>";
$d = 5;
for ($i=1; $i <= 10; $i++) { 
    
    echo $i.'x'.$d.'='.$i*$d;
    echo "<br>";
    echo "<hr>";
}
?>