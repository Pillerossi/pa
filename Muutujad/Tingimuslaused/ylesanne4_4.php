<?php
//hetkel olev aasta
$hetkeAasta =2019;
//kasutaja poolt sisestatud synniaasta
$sunniAasta= 2001;
//aastate vahe- kasutaja vanus
$vanus = $hetkeAasta - $sunniAasta;
echo 'Oled ' .$vanus.'aastat vana<br>';
//kontrollime, kas vanus jagub 5-ga
//selleks leiame jagamisse jäägi
$jaak =$vanus % 5;
//kui jääk on null- vanus jagub 5-ga
if ($jaak ==0) {
    echo 'Sel aastal on juubel! Õnnitleme!<br>';
} else {
    echo 'Veel juubelit ei ole <br>';
}
