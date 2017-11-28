<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hướng đẫn thi bằng lái xe A1</title>
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <h1 id="TieuDe">Hướng dẫn thi bằng lái xe A1</h1>
    </div>    

    <div class="left">
        
        
        <div class="menu" id="TrangChu" onclick="bamVaoTrangChu();">Trang chủ</div>
        
        <div id="exampleAccordion" data-children=".item">
            <div class="item">
                <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion1" aria-expanded="false" aria-controls="exampleAccordion1">
                <div class="menu" id="OnTap" onclick="bamVaoOnTap();">Ôn tập</div>
                </a>
                <div id="exampleAccordion1" class="collapse" role="tabpanel">
                <ul>
                <li class="menu con" id="OnTap_TimKiem" onclick="bamVaoTimKiemCauHoi();">Tìm kiếm câu hỏi</li>
                <li class="menu con" id="OnTap_LyThuyet" onclick="bamVaoXemCauHoi();">150 Câu hỏi</li>
                </ul>
                </div>
            </div>
            <div class="item A2">
                <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2">
                    <div class="menu" id="ThiThu" onclick="bamVaoThiThu();">Thi thử lý thuyết</div>
                </a>
                <div id="exampleAccordion2" class="collapse" role="tabpanel">
                <ul>
                <li class="menu con" id="ThiThu_NgauNhien"><a href="Thi.php">Đề ngẫu nhiên</a></li>
                <li class="menu con" id="ThiThu_CoSan"><a href="Thi.php">Đề có sẵn</a></li>
                </ul>
                </div>
            </div>
        </div>     
        
        <div class="menu" id="HuongDan" onclick="bamVaoHuongDan();">Hướng dẫn</div>
    </div>
    
    <div id="NoiDung">
        
    </div>
 
    <script src="Js/jquery-3.2.1.min.js"></script>
    <script src="Js/popper.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/index.js"></script>
    <script src="Js/hieuUng.js"></script>
</body>
</html>