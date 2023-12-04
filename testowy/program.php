<?php

$start_time = filter_input(INPUT_POST, "start_time", FILTER_VALIDE_DATETIME);
$end_time = filter_input(INPUT_POST, "end_time", FILTER_VALIDE_DATETIME);
$name = filter_input(INPUT_POST, "name", FILTER_VALIDE_BOOL);
$opis = filter_input(INPUT_POST, "opis", FILTER_VALIDE_BOOL);

var_dump($name, $start_time, $end_time, $opis);