<?php
//kas etteantud arv vastab kasutaja poolt pakutud arvule

//arvu defineerimine
$etteAntudArv = 20;
//Lubame kasutajale arvata
$kasutajaArv= -15;
//hakkame võrdlema
if($etteAntudArv== $kasutajaArv) {
    //arvud on võrdsed, seega arvasid ära
    echo 'Tubli" Arvasid ära';
    echo 'Arv on'.$kasutajaArv'<br>';
} else {
    //arvud ei ole võrdsed
    //kas vahemik etteantud ja kasutaja arvude vahel on väiksem või võrdne 5-ga
    //kui arvud on negatiived, siis teisendame vahemiku leidmiseks positiivseteks arvudeks
    $vahemik = abs($kasutajaArv) - $etteAntudArv);
    if($vahemik <=5){
    echo 'Veel ei arvanud ära, aga väga lähedal<br>';
}
        //kas on suurem või väiksem
    if($kasutajaArv > $etteAntudArv) {
        echo $kasutajaArv. ' on suurem kui ettevantud arv <br>';
    } else {
        echo $kasutajaArv. ' on väiksem kui etteantud arv<br>';
    }

