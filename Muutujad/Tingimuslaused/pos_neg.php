<?php

//defineerime arv
$arv = 0;
//kontrollime kas arv on positiivne
//kas arv on suurem kui o
if($arv>0) {
    echo $arv. ' on positiivne<br>';
} else if ($arv < 0) {
    //kui arv on väiksem kui null
    echo $arv.' on negatiivne<br>';
} else {
    //kui arv ei ole suurem null ega väiksem kui 0
    echo $arv. 'on null'<br>;
} else {
    echo 'see on programmi lõpp';
}