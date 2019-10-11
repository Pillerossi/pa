<?php
//juhusliku täringuviske leidmine
$number = rand(1,6);
var_dump($number);
//switch kontrollimiseks
switch ($number) {
    case 1:
        echo 'Sinu number on 1<br>';
        break;
     case 2:
        echo 'Sinu number on 2 <br>';
        break;
     case 3:
        echo 'Sinu number on 3<br>';
        break;
    case 4:
        echo 'Sinu number on 4<br>';
        break;
    case 5:
        echo 'Sinu number on 5<br>';
        break;
    case 6:
        echo 'Sinu number on 6<br>';
        break;
    default:
        echo 'Midagi läks vussi<br>';
        break;
}
echo 'Sellega on täringuvise tehtud!<br>'
