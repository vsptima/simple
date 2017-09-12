<?php
require_once 'Seo.php';
class Page extends Seo {

    public function __construct()
    {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
    }

    /**
     * Загрузка верха страницы.
     */
    public function header()
    {
        require_once $_SERVER['DOCUMENT_ROOT'].'/protected/views/layouts/_top.php';
    }

    /**
     * Загрузка низа страницы.
     */
    public function footer()
    {
        require_once $_SERVER['DOCUMENT_ROOT'].'/protected/views/layouts/_bottom.php';
    }

    /**
     * Загрузка данных.
     */
    public function loadData()
    {
        //
    }

}
