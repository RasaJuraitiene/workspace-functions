<?php

$thermo = [
    [
        'shape' => 'circle',
        'color' => 'green',
        'text' => '"AS"'
    ],
    [
        'shape' => 'square',
        'color' => 'green',
        'text' => '"B"'
    ],
    [
        'shape' => 'square',
        'color' => 'orange',
        'text' => '"B"'
    ],
    [
        'shape' => 'square',
        'color' => 'red',
        'text' => '"D"'
    ]
];

//function thermo_set_low(&$thermo)
//{
//    foreach ($thermo as $key => &$param) {
//        $param['color'] = 'red';
//    }
//}
//
//thermo_set_low($thermo);

function thermo_set_level(&$thermo, $id)
{
       $thermo[$id]['color'] = 'black';
}
thermo_set_level($thermo, 2);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        .figure {
            height: 150px;
            width: 150px;
            border: 2px solid black;
            color: white;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .wrapper {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .figure.circle {
            border-radius: 50%;
        }

        .figure.red {
            background-color: red;
        }

        .figure.green {
            background-color: green;
        }

        .figure.orange {
            background-color: orange;
        }
        .figure.black{
            background-color: black;
        }
    </style>
</head>
<body>
<?php require('templates/thermo.tpl.php'); ?>
</body>
</html>


