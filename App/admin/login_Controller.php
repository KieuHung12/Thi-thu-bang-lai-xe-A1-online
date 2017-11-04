<?php
    class login_Controller
    {
        private static $mhtml = array(
            'title' => 'Đăng nhập',
            'css' => array(
                '<link rel="stylesheet" type="text/css" href="style.css">'
            )
        );
        
        public function loginView()
        {
            $mang_html = self::$mhtml;
            require_once PATH_APP.'/admin/login_View.php';            
        }
        
        public function kiemTraPost()
        {
            if(isset($_POST['submit']))
            {
                $name = (isset($_POST['name'])) ? $_POST['name'] : null;
                $pass = (isset($_POST['pass'])) ? $_POST['pass'] : null;
                if($name == null || $pass == null)
                {
                    echo 'Lỗi: hãy thử lại';
                }
                else
                {
                    if($name == "admin@123" && $pass == "123456")
                    {
                        echo 'Đăng nhập thành công';
                    }
                    else
                    {
                        self::loginView();
                        echo '<script> thongBao(); </script>';
                    }
                }
            }
            else
            {
                self::loginView();
            }
        }

        public static function hoatDong()
        {
            self::kiemTraPost();
        }
    }
?>