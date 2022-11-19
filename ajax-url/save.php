<?php

include '../klase/rezultat.php';

$rezultat = new Rezultat();

$rezultat->unesiRezultat($_GET['datum'], $_GET['vreme'], $_GET['stadion'], $_GET['drzava_1'], $_GET['drzava_2'], $_GET['rezultat']);
