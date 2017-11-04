<?php
    require_once PATH.'Public/top.php';
?>
    <script type="text/javascript">
        function thongBao(){
            alert("Sai tên đăng nhập hoặc mật khẩu");
        }
        function kiemTra()
        {
            debugger;
            console.log('qua');
            var form = document.forms['myForm'];
            if(form['name'].value == "" || form['pass'].value == "")
            {
                alert('Lỗi: Tên đăng nhập hoặc mật khẩu rỗng');
                return false;
            }
            return false;
        }
    </script>
    <form action="admin.php" method="post" name="myForm">
        <h3>ĐĂNG NHẬP</h3>
        <label>Admin</label><input type="text" name="name" placeholder=" Account name">
        <br>
        <label>Password</label><input type="password" name="pass" placeholder=" Password">
        <br>
        <a href=""><i>Forgot password</i></a>
        <input type="submit" value="Submit" name="submit" onmousedown="return kiemTra()">
    </form>
<?php
    require_once PATH.'Public/bottom.php';
?>