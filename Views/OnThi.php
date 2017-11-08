<?php require_once __DIR__.'/top.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>150 câu hỏi sát hạch</h1>
            </div>
            <div class="col-md-4">
                <select id="loaiCauHoi" onchange="inCauHoi(this.value)">
                    <option value="0">Tất cả</option>
                    <option value="1">Khái niệm</option>
                    <option value="2">Quy tắc</option>
                    <option value="3">Tốc độ</option>
                    <option value="4">Văn hóa và đạo đức người lái xe</option>
                    <option value="5">Biển báo</option>
                    <option value="6">Sa hình</option>
                </select>
            </div>
        </div>

        <div id="HienThiCauHoi">

        </div>
    </div>


    <script>
        var json = JSON.parse('<?php echo $html['json'] ?>');
        console.log(json);
    </script>
    <script src="Public/js/index.js"></script>
<?php require_once __DIR__.'/bottom.php'; ?>