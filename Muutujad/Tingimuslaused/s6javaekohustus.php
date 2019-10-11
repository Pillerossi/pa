<?php
//defineerime muutujad
$kodakondsus = "eesti";
$vanus = 18;
$haridus = "kutseharidus";
//kontrollime
//kas oled eestlane
if($kodakondsus == "eesti") {
    //siis saab edasi kontrollida
    //milline on inimese vanus
    if($vanus >=18){
        //oled piisavalt vana
        //milline on sinu haridus
        if($haridus == "pohiharidus" or $haridus== "kutseharidus" or $haridus== "keskharidus" or $haridus == "korgharidus"){
          echo 'Haridustase on sobilik<br>';
          echo 'Oled valmis sojavaekohustuseks<br>';
        }else {
            echo 'Ei ole sobilikku haridustaset <br>';
        }
    }else {

        echo 'Oled liiga noor hetkel<br>';
    }
} else {
    //väliskodanikud Eestit ei kaitse
    echo 'Riigseadus ei kohusta sõjaväekohustust<br>';
}