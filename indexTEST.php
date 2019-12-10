<?php
if (isset($_POST['submit'])) {
    $skaicius = $_POST['submit'] + 1;
    } else {
    $skaicius = 0;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Click</title>
</head>
<body>
<form method="post">
    <button name="submit" value="<?php print $skaicius; ?>">
        <?php print $skaicius; ?>
    </button>
</form>
<?php for($i = 0; $i < $skaicius; $i++):?>
<img src="http://2.bp.blogspot.com/-vUUWiLnkQns/VW2ND4orYHI/AAAAAAACy7w/JqcM2hJQQi0/s1600/2a130169VNS1K89.png">
<?php endfor;?>
</body>
</html>


