<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raccolta</title>
    <link rel="stylesheet" href="./CSS/sorted.css">
</head>

<body>




    <div class="listtitle">
        <h1 class="title"> Raccolta differenziata a <strong>Sciacca(AG)</strong> </h1>
        <h1 class="warning"> <?php include("./controller/warning.php") ?></h1>
    </div>
    <div class="list">
        <h3 class="today">Oggi</h3> <?php include("./models/today.php") ?>
    </div>
    <div class="list">
        <h3 class="tomorrow">Domani</h3> <?php include("./models/tomorrow.php") ?>
    </div>
</body>

</html>