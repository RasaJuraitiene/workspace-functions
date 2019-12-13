<div class="wrapper">
    <?php foreach ($thermo as $figura): ?>
        <div class="figure <?php print $figura['shape'] . ' ' . $figura['color']; ?>"><?php print $figura['text']; ?></div>
    <?php endforeach; ?>
</div>