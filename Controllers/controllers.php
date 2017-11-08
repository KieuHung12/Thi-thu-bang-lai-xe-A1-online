<?php
    class controllers
    {
        private $controller = array(
            "OnThi"
        );

        public function tonTai($name)
        {
            foreach($this->controller as $value)
            {
                if($value == $name) return true;
            }
            //return false;
        }
    }
?>