<?php
    class admin_Controller
    {
        public static function hoatDong()
        {
            if(isset($_COOKIE['admin'])){
                require_once PATH_APP.'admin/index_View.php';
            }
            else
            {
                require_once PATH_APP.'admin/login_Controller.php';
                login_Controller::hoatDong();
            }
        }
    }
?>