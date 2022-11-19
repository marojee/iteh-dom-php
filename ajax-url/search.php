<?php

include '../klase/rezultat.php';

$rezultat = new Rezultat();

$rezultati = $rezultat->nadjiRezultateNaStadionu($_GET['naziv_stadiona']);


foreach ($rezultati as $rez) {
    $konekcija = new mysqli("localhost", "root", "", "katar");
    $drzava_1_naziv = "SELECT naziv FROM drzava WHERE id=" . $rez->drzava_1;
    $drzava_2_naziv = "SELECT naziv FROM drzava WHERE id=" . $rez->drzava_2;
    $result_1 = $konekcija->query($drzava_1_naziv);
    $result_2 = $konekcija->query($drzava_2_naziv);
?>
    <tr>
        <td><?php echo $rez->datum;  ?></td>
        <td><?php echo $rez->vreme;  ?></td>
        <td><?php echo $rez->stadion;  ?></td>
        <td><?php echo $result_1->fetch_object()->naziv  ?></td>
        <td><?php echo $result_2->fetch_object()->naziv  ?></td>
        <td><?php echo $rez->rezultat;  ?></td>
        <td class="text-center"><button class="btn btn-dark delete" value="<?php echo $rez->id; ?>">X</button></td>
    </tr>
<?php } ?>