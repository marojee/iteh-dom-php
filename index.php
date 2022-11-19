<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="main-div">

        <div class="form-div">
            <h3>Unesi rezultat</h3>

            <div class="mb-2">
                <span>Datum</span>
                <input type="text" class="form-control" id="datum">
            </div>

            <div class="mb-2">
                <span>Vreme</span>
                <input type="text" class="form-control" id="vreme">
            </div>

            <div class="mb-2">
                <span>Stadion</span>
                <input type="text" class="form-control" id="stadion">
            </div>

            <div class="mb-2">
                <span>Drzava 1</span>
                <select class="form-select" id="drzava_1">
                    <?php
                    include 'klase/drzava.php';

                    $drzava = new Drzava();
                    $drzave = $drzava->vratiDrzave();

                    foreach ($drzave as $drz) {
                    ?>
                        <option value="<?php echo $drz->id ?>"><?php echo $drz->naziv ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-2">
                <span>Drzava 2</span>
                <select class="form-select" id="drzava_2">
                    <?php

                    $drzava2 = new Drzava();
                    $drzave2 = $drzava2->vratiDrzave();

                    foreach ($drzave2 as $drz2) {
                    ?>
                        <option value="<?php echo $drz2->id ?>"><?php echo $drz2->naziv ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-2">
                <span>Rezultat</span>
                <input type="text" class="form-control" id="rezultat">
            </div>

            <button class="btn btn-primary" id="unos-button">Unesi</button>

        </div>


        <div class="table-div">
            <table id="table-rez" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Datum</th>
                        <th>Vreme</th>
                        <th>Stadion</th>
                        <th>Drzava 1</th>
                        <th>Drzava 2</th>
                        <th>Rezultat</th>
                        <th class="text-center">X</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    include 'klase/rezultat.php';

                    $rezultat = new Rezultat();
                    $rezultati = $rezultat->vratiRezultate();

                    foreach ($rezultati as $rez) {
                    ?>
                        <tr>
                            <td><?php echo $rez->datum;  ?></td>
                            <td><?php echo $rez->vreme;  ?></td>
                            <td><?php echo $rez->stadion;  ?></td>
                            <td><?php echo $rez->drzava_1;  ?></td>
                            <td><?php echo $rez->drzava_2;  ?></td>
                            <td><?php echo $rez->rezultat;  ?></td>
                            <td class="text-center"><button class="btn btn-dark" id="del-button" value="<?php echo $rez->id; ?>">X</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>