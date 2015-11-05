<?php
$getal = rand(1, 10);
if ($getal%2 ==0) {
    header("location: http://www.google.be");
}
 else {
    header("location: http://www.vdab.be");
}
exit(0);
?>


