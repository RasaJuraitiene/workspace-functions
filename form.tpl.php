<form <?php print html_attr(($form['attr'] ?? []) + ['method' => 'POST']); ?>>
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
        <label>
        <span>
            <?php print $field['label']; ?>
        </span>
            <input <?php print html_attr(
                ($field['extra']['attr'] ?? []) +
                [
                    'name' => $field_id,
                    'type' => $field['type'],
                    'value' => $field['value'] ?? ''
                ]); ?>
        </label>
    <?php endforeach; ?>
    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
        <button <?php print html_attr(
            ($form['button'] ?? []) +
            [
                'type' => $field['type'],
                'value' => $field['value'] ?? ''
            ]); ?>>Mygtukas</button>
    <?php endforeach; ?>

</form>