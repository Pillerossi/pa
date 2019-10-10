<?php
/**file name jagamine.php; ylesanne 4.2*/
$x= 5;
$y= -5;
//jagme ühe arvu teisega
$jagatis = $x/$y;
//konrollime kas jagaja on 0
if ($y==0) {
    //siis väljastame hoiatava lause
    echo 'nulliga jagamine on keelatud <br>';
    } else {
    echo $x.'/'.$y.'='.$jagatis. '<br>';
}

