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


    function unesiRezultat($datum, $vreme, $stadion, $drzava_1, $drzava_2, $rezultat)
    {
        $konekcija = new mysqli("localhost", "root", "", "katar");

        $db_upit = "INSERT INTO rezultat (datum, vreme, stadion, drzava_1, drzava_2, rezultat) 
        VALUES ('$datum', '$vreme', '$stadion', '$drzava_1', '$drzava_2', '$rezultat')";

        return $konekcija->query($db_upit);
    }



    function obrisiRezultat($rezultat_id)
    {
        $konekcija = new mysqli("localhost", "root", "", "katar");

        $db_upit = "DELETE FROM rezultat WHERE id=" . $rezultat_id;

        return $konekcija->query($db_upit);
    }



    function nadjiRezultateNaStadionu($naziv_stadiona)
    {
        $konekcija = new mysqli("localhost", "root", "", "katar");

        $db_upit = "SELECT * FROM rezultat WHERE stadion LIKE '%" . $naziv_stadiona . "%'";
        $result_set = $konekcija->query($db_upit);
        $rezultati = array();

        while ($rezultat = $result_set->fetch_object()) {
            array_push($rezultati, $rezultat);
        }

        return $rezultati;
    }
}
