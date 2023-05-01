<?php
    $Mhs = array(
        array("Krisna Dewi","2201010021","Badung"),
        array("Berllyn","2201010022","Denpasar"),
        array("Dimas","2201010023","Banyuwangi"),
        array("Rya","2201010025","Tabanan"),
    );
    header("Contect-Type: application/json");
    echo json_encode($Mhs);
