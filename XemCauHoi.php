<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    require_once __DIR__.'/BUS/Lop_Bus.php';
    require_once __DIR__.'/function.php';

    if(isset($_GET['loai']))
    {
        $mch = $_GET['loai'];
        if($mch < 0 || $mch > 6)
        {
            echo "Không tìm thấy câu hỏi";
        }
        else
        {
            $bus = new Lop_Bus();
            if($mch != 0)   $obj = $bus->getTheoMaLoai($mch);
            else $obj = $bus->getAllCauHoi();
            foreach($obj as $val)
            {
                echo inCauHoi($val);
            }
        }
    }