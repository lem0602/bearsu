<?php include __DIR__. '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/member_register_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container">
            <div class="row">
                <div class="col-md-1 col-lg-1 d-none d-md-block d-lg-block">
                </div>

                <div class="col-md-3 col-lg-3 d-none d-md-block d-lg-block mascot h-100">
                    <div class="mascot_wrap d-flex align-items-center justify-content-center h-100">
                        <img src="images/mascot_left.gif" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 d-flex align-items-center">
                    <div class="register_box w-100">
                        <h1>註冊</h1>
                        <div class="input_box">
                            <div class="name_box d-flex">
                                <h4>姓名</h4>
                                <input type="text" id="name">
                            </div>
                            <div class="email_box d-flex">
                                <h4>Email</h4>
                                <input type="text" id="email">
                            </div>
                            <div class="password_box d-flex">
                                <h4>密碼</h4>
                                <input type="password">
                            </div>
                            <div class="repeat_password_box d-flex">
                                <h4>確認密碼</h4>
                                <input type="password" id="password">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="register_btn">註冊</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 d-none d-md-block d-lg-block mascot h-100">
                    <div class="mascot_wrap d-flex align-items-center justify-content-center h-100">
                        <img src="images/mascot_right.gif" alt="">
                    </div>
                </div>

                <div class="col-md-1 col-lg-1 d-none d-md-block d-lg-block">
                </div>
            </div>
    </div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/member_register_scripts.php'; ?>
<script>
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
    const $nickname = $('#nickname'),
        $email = $('#email');
    const fileds = [$nickname, $email];

    function checkForm() {
        // 回復原來的狀態
        fileds.forEach(el=>{
            el.css('border', '1px solid #CCCCCC');
            el.next().text('');
        });

        let isPass = true;

        if($name.val().length < 2){
            isPass = false;
            $name.css('border', '1px solid red');
            $name.next().text('請輸入正確的姓名');
        }

        if(! email_re.test($email.val())){
            isPass = false;
            $email.css('border', '1px solid red');
            $email.next().text('請輸入正確的 email');
        }

        if(isPass){
            $.post(
                'member_register_api.php',
                $(document.form1).serialize(),
                function(data){
                    if(data.success){
                        alert('註冊成功');
                    } else {
                        alert(data.error);
                    }
                },
                'json'
            )
        }

    }
</script>

<?php include __DIR__ . '/parts/foot.php'; ?>