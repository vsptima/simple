<?php
require_once 'protected/views/layouts/_classes.php';
$page->title = 'Жаргон';
$page->description = 'Слова и словосочетания используемые программистами в ежедневном общении';
$page->header();
$handle = fopen("protected/data/jargon.csv", "r");
?>

    <div class="jumbotron">
        <h1><?php echo $page->title; ?></h1>
        <p class="lead"><?php echo $page->description; ?></p>
        <small>данные берутся из <span class="badge">csv</span> файла</small>
    </div>

    <div class="row marketing">
        <?php if($handle !== FALSE):?>
            <?php while(($data = fgetcsv($handle, 1000, ",")) !== FALSE):?>
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo $data[0];?></div>
                    <div class="panel-body">
                        <?php echo $data[1];?>
                    </div>
                </div>
            <?php endwhile;?>
            <?php fclose($handle);?>
        <?php endif;?>
    </div>

<?php $page->footer() ?>