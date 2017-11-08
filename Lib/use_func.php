<?php
    function use_controller($name)
    {
        require_once PATH_C.$name.'.php';
        $ab = new $name();
        return $ab;
    }

    function use_render($array,$in)
    {
        $html = $array;
        require_once PATH_V.$in;
    }

?>