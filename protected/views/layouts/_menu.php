<?php require_once $_SERVER['DOCUMENT_ROOT'].'/protected/classes/Html.php'; ?>
<nav>
    <ul class="nav nav-pills pull-right">
        <?php echo Html::menuLink('/','Home')?>
        <?php echo Html::menuLink('/skill.php','Skill')?>
        <?php echo Html::menuLink('/jargon.php','Jargon')?>
        <?php echo Html::menuLink('/link.php','Link')?>
    </ul>
</nav>