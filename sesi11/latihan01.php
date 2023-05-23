<?php
    $dta[0]["nama"] = "Louis";
    $dta[0]["alamat"] = "Jl. Bajawa";
    $dta[0]["tgl_lahir"] = "2011-11-28";

    $dta[1]["nama"] = "Ririn";
    $dta[1]["alamat"] = "Jl. Pancoran 10b";
    $dta[1]["tgl_lahir"] = "2019-12-15";

    $dta[2]["nama"] = "Pepik";
    $dta[2]["alamat"] = "Jl. Batu Cermin 2";
    $dta[2]["tgl_lahir"] = "2022-11-28";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode ($dta);