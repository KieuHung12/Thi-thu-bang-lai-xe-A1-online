<?php
    require_once 'define.php';
    if(isset($_GET['c']))
    {
        $cont = use_controller('controllers');
        if($cont->tonTai($_GET['c']))
        {
            $controller = use_controller($_GET['c']);
            $controller->chay();
        }
        else
        {
            header('location: index.php');
        }
    }
    else
    {
        $index = use_controller('index');
        $index->chay();
    }
?>    