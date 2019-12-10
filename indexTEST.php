<?php
function square($x){
    return $x * $x;
}
$number = $_POST['number'] ?? false;

if(is_numeric($number)){
    $h2 = square($number);
}else{
    $h2 = 'Irasykite verte';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelimas kvadratu</title>
</head>
<body>
<h2>Kėlimas kvadratu:</h2>
<form action="" method="post">
    <label>
        <span>Įveskite skaičių:</span>
    <input type="number" name="number" >
    </label>
    <button type="submit">Submit</button>
</form>
<p><?php print $h2; ?></p>
</body>
</html>


