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
                <select class="form-select" id="drzava_1"></select>
            </div>

            <div class="mb-2">
                <span>Drzava 2</span>
                <select class="form-select" id="drzava_2"></select>
            </div>

            <button class="btn btn-primary" id="unos-button">Unesi</button>

        </div>


        <div class="table-div">

        </div>


    </div>


</body>

</html>