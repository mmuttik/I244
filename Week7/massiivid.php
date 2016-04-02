<?php
/**
 * Created by IntelliJ IDEA.
 * User: X1
 * Date: 31.03.2016
 * Time: 17:23
 */




$loomad=array("esimene=>"kass", 22=>"koer", "hobune");

        $loomad[]="hobune"; // Niimoodi deklareerides lisatakse automaatselt viimaseks elemendiks.
            $loomad["viimane"]="tuvi"; // Ettemääratud võtmega väärtustamine.

        echo "Esimene loom oli: ".$loomad"esimene";
        echo "Mingi loom oli ka: ".$loomad[22];
        echo "Veoloom on: ".$loomad[23]; /*Siin tulebki tähele panna, et kuna koer sai numbrilise id, siis jätkub
                                            arvestamine sealt, muidu oleks 0,1,2.*/
