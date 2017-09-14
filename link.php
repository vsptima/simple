<?php
require_once 'protected/views/layouts/_classes.php';
$page->title = 'Ссылки';
$page->description = 'Адреса сайтов с полезной профессиональной информацией';
$page->header();
$json = file_get_contents('protected/data/link.json');
$arr = json_decode($json);
?>

    <div class="jumbotron">
        <h1><?php echo $page->title; ?></h1>
        <p class="lead"><?php echo $page->description; ?></p>
        <small>данные берутся из <span class="badge">json</span> файла</small>
    </div>

    <div class="row marketing">
        <?php foreach ($arr as $val) : ?>
            <p><a href="<?= $val; ?>"><?= $val; ?></a></p>
        <?php endforeach; ?>
    </div>

<?php $page->footer() ?>