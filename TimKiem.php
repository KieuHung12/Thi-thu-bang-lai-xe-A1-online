<?php
    require_once __DIR__.'/BUS/Lop_Bus.php';
    require_once __DIR__.'/function.php';
    if(isset($_GET['MaCauHoi']))
    {
        $mch = $_GET['MaCauHoi'];
        if($mch < 1 || $mch > 150)
        {
            echo "Không tìm thấy câu hỏi";
        }
        else
        {
            $bus = new Lop_Bus();
            $obj = $bus->getCauHoi($mch)[0];
            echo inCauHoi($obj);
        }
    }
    
    if(isset($_GET['NoiDungCauHoi']))
    {
        $mch = $_GET['NoiDungCauHoi'];
        if($mch == "")
        {
            echo "Không tìm thấy câu hỏi";
        }
        else
        {
            $bus = new Lop_Bus();
            $obj = $bus->timCauHoi($mch);
            if(count($obj) == 0)
            {
                echo "Không tìm thấy câu hỏi";
            }
            else
            {
                foreach($obj as $val)
                {
                    echo inCauHoi($val);
                }
            }
        }
    }
?>
