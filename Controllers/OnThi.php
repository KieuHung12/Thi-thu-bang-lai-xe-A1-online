<?php
    require_once PATH_M.'Onthi.php';

    class OnThi
    {
        public function chay()
        {
            $db = new OnThi_M();
            $json = json_encode($db->getAllCauHoi());
            $json = addslashes ($json);
            use_render(
                array(
                    "title" => "Ôn tập 150 câu hỏi lý thuyết",
                    "json" => $json
                )
                ,
            "OnThi.php");
        }
    }
?>