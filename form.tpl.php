<form <?php print html_attr(($form['attr'] ?? []) + ['method' => 'POST']); ?>>

    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
        <label>
            <?php if (isset($field['label'])): ?>
                <span class="label">
            <?php print $field['label']; ?>
        </span>
            <?php endif; ?>
            <input <?php print html_attr(
                [
                    'name' => $field_id,
                    'type' => $field['type'],
                    'value' => $field['value'] ?? ''
                ] + ($field['extra']['attr'] ?? [])); ?>

        </label>
    <?php endforeach; ?>

    <?php if (isset($field['type']) && $field['type'] == 'select'): ?>
        <select>
            <?php foreach ($field['option'] as $key => $optionval): ?>
                <option value="<?php print $key ?>"> <?php print $optionval; ?></option>
            <?php endforeach; ?>

        </select>
    <?php endif; ?>
    <?php if (isset($field['error'])): ?>
        <span class="error"><?php print $field['error']; ?>
                </span>
    <?php endif; ?>

    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
        <button <?php print html_attr(
            [
                'name' => 'action',
                'value' => $button_id
            ] + $button['extra']['attr'] ?? []
        ); ?>
        >
            <?php print $button['title']; ?>
        </button>
    <?php endforeach; ?>
</form>
