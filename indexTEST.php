<?php

if ($_POST) {
    $vardas = $_POST['name'];
    $pavarde = $_POST['lastname'];
    $amzius = $_POST['age'];
    $lygis = $_POST['level'];
    $miestas = $_POST['city'];

    $display_certificate = true;
} else {
    $display_certificate = false;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sertifikato</title>
    <style>
        .card {
            border: 2px solid darkblue;
            background-color: lightcyan;
            height: 250px;
            width: 200px;
            text-align-all: center;
        }

        .flex-col {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-content: center;
        }

        input, select, button {
            width: 20vw;
            padding: 8px;
            margin: 10px !important;
        }
    </style>
</head>
<body>
<form method="post" class="flex-col">
    <input type="text" name="name" placeholder="Vardas" required>
    <input type="text" name="lastname" placeholder="Pavardė" required>
    <input min="1" type="number" name="age" placeholder="Amžius">
    <select name="level">
        <option value="Pradedantysis">Pradedantysis</option>
        <option value="Pažengęs" selected>Pažengęs</option>
        <option value="Profesionalas">Profesionalas</option>
    </select>
    <input type="text" name="city" placeholder="Miestas">
    <button name="submit" value="">Sertifikatas</button>
</form>
<?php if ($display_certificate): ?>
    <div class="card">
        <h2>SERTIFIKATAS</h2>
        <p>Vardas: <?php print $vardas; ?></p>
        <p>Pavardė: <?php print $pavarde; ?></p>
        <p>Amžius: <?php print $amzius; ?></p>
        <p>Lygis: <?php print $lygis; ?></p>
        <p>Miestas: <?php print $miestas; ?> </p>
    </div>
<?php else: ?>
    <p>Neivesti duomenys</p>
<?php endif; ?>


</body>
</html>


