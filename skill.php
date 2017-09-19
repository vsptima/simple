<?php
require_once 'protected/views/layouts/_classes.php';
$page->title = 'Опыт';
$page->description = 'Навыки в программировании и разработке сайтов';
$page->header();
?>

    <div class="jumbotron">
        <h1><?php echo $page->title; ?></h1>
        <p class="lead"><?php echo $page->description; ?></p>
        <small>данные берутся из <span class="badge">xml</span> файла</small>
    </div>

    <div class="row marketing">
        <?php
        $xml = simplexml_load_file('protected/data/skill.xml');
        //Html::printArray($xml);
        ?>
        <?php foreach ($xml as $val):?>
            <div class="panel panel-default">
                <div class="panel-heading"><?= (string)$val->title; ?></div>
                <div class="panel-body">
                    <?= (string)$val->content; ?>
                </div>
            </div>
        <?php endforeach;?>
    </div>

<?php $page->footer() ?>