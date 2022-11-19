<?php

include '../klase/rezultat.php';

$rezultat = new Rezultat();

$rezultat->obrisiRezultat($_GET['rezultat_id']);
