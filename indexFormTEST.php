<?php

$form = [
    'attr' => [
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form'
    ],
    'fields' => [
        'first_name' => [
            'validate' => [
                'validate_field_not_empty',
                'validate_is_number'
            ],
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
        'clear' => [
            'title' => 'Clear',
            'extra' => [
                'attr' => [
                    'class' => 'clear-btn',
                ]
            ]
        ],
        'save' => [
            'title' => 'Save',
            'extra' => [
                'attr' => [
                    'class' => 'save-btn',
                ]
            ]
        ]
    ],
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

function get_filtered_input($form)
{
    $filter_params = [];
    foreach ($form['fields'] as $fieldName => $field) {
        if (isset($field['filtras'])) {
            $filter_params[$fieldName] = $field['filter'];
        } else {
            $filter_params[$fieldName] = FILTER_SANITIZE_FULL_SPECIAL_CHARS;
        }
        return filter_input_array(INPUT_POST, $filter_params);
    }
}

function fill_form(&$form, $input)
{
    foreach ($input as $field_index => $field_value) {
        $form['fields'][$field_index]['value'] = $field_value;
    }
}

function validate_field_not_empty($field_value, &$field)
{
    if (empty($field_value)) {
        $field['error'] = 'Laukelis tuscias';
    }
}
function validate_is_number($field_value, &$field)
{
    if (!is_numeric($field_value)) {
        $field['error'] = 'Laukelis pribalo buti skaicius';
    }
}

// validuoti forma
function validate_form(&$form, $input)
{
    foreach ($form['fields'] as $field_id => &$field) {
        /**
         * $nput pvz
         * [ 'first_name' => 'Lohas', 'last_name' => 'Botas' ]
         */
        // Ivesta vertė į laukelį
        $field_value = $input[$field_id];
//        // Tam, kad nedingtu ivestos laukelio vertes po submito
        $field['value'] = $field_value;
//
        foreach ($field['validate'] as $validation_function) {
            //        //Kvieciam f-ją kuri nustato errora fieldui
            $validation_function($field_value, $field);
        }
    }
}
if (!empty($_POST)) {
    $safe_input = get_filtered_input($form);
    validate_form($form, $safe_input);
}

//var_dump($form['fields']);
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
<?php require('templates/formTEST.tpl.php'); ?>
</body>
</html>
