<?php
    //model 1
    //$age = array("Peter"=>"35","Ben"=>"37","Joy"=>"43");

    //model 2
    $age["Krisna Dewi"] = "19";
    $age["Berllyn"] = "07";
    $age["Dimas"] = "21";
    $age["Rya"] = "29";

    header("Contect-Type: application/json");
    echo json_encode($age);
