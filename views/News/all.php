<a href="/add.php">Добавить статью</a>
<?php foreach ($items as $item): ?>
<h1><?php echo $item->title; ?>
    <h1>
        <div><?php echo $item->text; ?></div>
        <?php endforeach; ?>
