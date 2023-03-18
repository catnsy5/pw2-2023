<?php 
        require_once "class_balok.php";

        $balok1 = new Balok(29, 16, 7);
        $balok2 = new Balok(10, 6, 3);
        $balok3 = new Balok(15, 10, 8);
        $balok4 = new Balok(13, 8, 6);
 
        echo "<br>Luas Balok 1 = " . $balok1->getLuas();
        echo "<br>Luas Balok 2 = " . $balok2->getLuas();
        echo "<br>Luas Balok 3 = " . $balok3->getLuas();
        echo "<br>Luas Balok 4 = " . $balok4->getLuas();
        echo '<br>';
        echo "<br>Keliling Balok 1 = " . $balok1->getKeliling();
        echo "<br>Keliling Balok 2 = " . $balok2->getKeliling();
        echo "<br>Keliling Balok 3 = " . $balok3->getKeliling();
        echo "<br>Keliling Balok 4 = " . $balok4->getKeliling();
        echo '<br>';
        echo "<br>Volume Balok 1 = " . $balok1->getVolume();
        echo "<br>Volume Balok 2 = " . $balok2->getVolume();
        echo "<br>Volume Balok 3 = " . $balok3->getVolume();
        echo "<br>Volume Balok 4 = " . $balok4->getVolume();


?>