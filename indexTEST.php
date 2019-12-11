<?php

$form = [
    'attr' => [
        'action' => 'indexTEST.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ],
    'fields' => [
        'first_name' => [
            'label' => 'First name',
            'type' => 'text',
            'value' => 'Piotras',
            'extra' => [
                'attr' => [
                    'class' => 'first-name',
                    'id' => 'first-name',
                ]
            ]
        ]
    ],
    'buttons' => [
        'kazkas' => 'kazkas'
    ]
];

function html_attr($array)
{
    $attributes = [];
    foreach ($array as $key => $value) {
        $attribute = "$key=\"$value\"";
        $attributes[] = $attribute;
    }
    $attributes_string = implode('', $attributes);
    return $attributes_string;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<?php require('templates/form.tpl.php'); ?>
</body>
</html>


