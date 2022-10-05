<?php
require __DIR__ . '/mengParts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<?php include __DIR__ . '/mengParts/html-head.php'; ?>
<!-- 怕推上去會被吃掉就再建一個php檔例如mystyle -->
<?php include __DIR__ . '/mengParts/myStyle.php'; ?>

<?php include __DIR__ . '/mengParts/navbar.php'; ?>

<div class="container d-flex align-items-center">
    <div class="row align-items-end">
        <div class="col-md-1 col-lg-1 d-none d-md-block d-lg-block">
        </div>
        <div class="col-md-3 col-lg-3 d-none d-md-block d-lg-block mascot h-100">
            <div class="mascot_wrap d-flex align-items-center justify-content-center h-100">
                <img src="./img/mascot_left.gif" alt="">
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4 d-flex align-items-center">
            <div class="login_box w-100">
                <h1>登入</h1>
                <div class="input_box">
                    <div class="email_box d-flex">
                        <h4>Email</h4>
                        <input id="email" type="text" value="aaa@gmail.com">
                    </div>
                    <div class="password_box d-flex">
                        <h4>密碼</h4>
                        <input id="password" type="password" value="a1234">
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button id="login_btn" class="login_btn">登入</button>
                </div>
                <div class="register_wrap d-flex justify-content-center">
                    <p>還不是會員嗎？</p> <a href="member_register.html">立即註冊</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 d-none d-md-block d-lg-block mascot h-100">
            <div class="mascot_wrap d-flex align-items-center justify-content-center h-100">
                <img src="./img/mascot_right.gif" alt="">
            </div>
        </div>
        <div class="col-md-1 col-lg-1 d-none d-md-block d-lg-block">
        </div>
    </div>
</div>

<?php include __DIR__ . '/mengParts/scripts.php'; ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==' crossorigin='anonymous'></script>
<script>
    var login_btn = document.querySelector('#login_btn');
    console.log('login_btn', login_btn);

    function checkForm() {
        console.log('test');
        // TODO: 欄位檢查
        if (!$('#email').val()) {
            alert('請填寫帳號');
            return;
        }
        if (!$('#password').val()) {
            alert('請填寫密碼');
            return;
        }
        var loginObj = {
            email: $('#email').val(),
            password: $('#password').val()
        }
        // ajax json post get
        // 把使用者輸入的帳號密碼丟到api
        $.post(
            "./mengParts/login-api.php",
            loginObj,
            // $(document.form1).serialize(),
            // 接收回傳回來的資料還有動作
            function(data) {
                console.log(data);
                if (data.success) {
                    location.href = './member.php';
                } else {
                    alert(data.error);
                }
            },
            'json'
        );
    }

    login_btn.addEventListener('click', checkForm);
</script>
<?php include __DIR__ . '/mengParts/html-foot.php'; ?>