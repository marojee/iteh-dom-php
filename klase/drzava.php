<?php

class Drzava
{
    public $id;
    public $naziv;
    public $trener;
    public $kapiten;


    function vratiDrzave()
    {
        $konekcija = new mysqli("localhost", "root", "", "katar");

        $db_upit = "SELECT * FROM drzava";
        $result_set = $konekcija->query($db_upit);
        $drzave = array();

        while ($drzava = $result_set->fetch_object()) {
            array_push($drzave, $drzava);
        }

        return $drzave;
    }
}
