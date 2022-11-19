<?php

class Rezultat
{
    public $id;
    public $datum;
    public $vreme;
    public $stadion;
    public $drzava_1;
    public $drzava_2;
    public $rezultat;


    function vratiRezultate()
    {
        $konekcija = new mysqli("localhost", "root", "", "katar");

        $db_upit = "SELECT * FROM rezultat";
        $result_set = $konekcija->query($db_upit);
        $rezultati = array();

        while ($rezultat = $result_set->fetch_object()) {
            array_push($rezultati, $rezultat);
        }

        return $rezultati;
    }
}
