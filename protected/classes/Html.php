<?php
class Html {

    public static function link()
    {
        //
    }

    /**
     * Формирование пункта меню.
     * @param $href
     * @param $text
     * @return string
     */
    public static function menuLink($href,$text)
    {
        $path = $_SERVER['REQUEST_URI'];
        $active = '';
        if ($href == $path) {
            $active = 'class="active"';
        }
        $str = "<li {$active} role=\"presentation\"><a href=\"{$href}\">{$text}</a></li>";
        return $str;
    }

    /**
     * Распечатка массива в браузере.
     * @param $arr
     */
    public static function printArray($arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

}
