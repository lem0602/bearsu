<?php include __DIR__ . '/parts/config.php'; ?>
<?php include __DIR__ . '/parts/member_register_head.php'; ?>

<?php include __DIR__ . '/parts/navbar_lem.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-1 col-lg-1 d-none d-md-block d-lg-block"></div>
        <div class="col-md-3 col-lg-3 d-none d-md-flex d-lg-flex mascot align-items-center">
            <div class="mascot_wrap">
                <img src="images/mascot_left.gif" alt="">
            </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4 d-flex align-items-center">
            <form name="form1" method="post" novalidate onsubmit="checkForm(event); return false;" class="register_box w-100">
                <h1>註冊</h1>
                <div class="input_box">
                    <div class="error error1"></div>
                    <div class="name_box d-flex">
                        <h4>姓名</h4>
                        <input type="text" id="name" id="name" name="name" required>
                    </div>
                    <div class="error error2"></div>
                    <div class="mobile_box d-flex">
                        <h4>手機號碼</h4>
                        <input type="text" id="mobile" name="mobile" required pattern="09\d{2}-?\d{3}-?\d{3}">
                    </div>
                    <div class="error error3"></div>
                    <div class="email_box d-flex">
                        <h4>Email</h4>
                        <input type="text" id="email" name="email" required>
                    </div>
                    <div class="error error4"></div>
                    <div class="password_box d-flex">
                        <h4>密碼</h4>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="error error5"></div>
                    <div class="repeat_password_box d-flex">
                        <h4>確認密碼</h4>
                        <input type="password" id="password2" name="password2" required>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="register_btn">註冊</button>
                </div>
            </form>
        </div>

        <!-- Button trigger modal -->
        <button data-toggle="modal" data-target="#exampleModalCenter" id="modalBtn" hidden></button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="sucess_card">
                        <div class="modal-body">
                            <h1>註冊成功</h1>
                            <div class="img_wrap d-flex justify-content-center">
                                <img src="images/mascot_10.gif" alt="">
                            </div>
                            <div class="btn_wrap  d-flex justify-content-center">
                                <a href="member_login.php" class="btn">關閉</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-lg-3 d-none d-md-flex d-lg-flex mascot align-items-center">
            <div class="mascot_wrap">
                <img src="images/mascot_right.gif" alt="">
            </div>
        </div>

        <div class="col-md-1 col-lg-1 d-none d-md-block d-lg-block"></div>

    </div>
</div>

<footer>
    <p>Copyright © 2022 BearSu. All rights reserved.</p>
</footer>

<?php include __DIR__ . '/parts/member_register_scripts.php'; ?>
<script>
    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
    const $name = $('#name'),
        $mobile = $('#mobile'),
        $email = $('#email'),
        $pwd1 = $('#password'),
        $pwd2 = $('#password2'),
        $error1 = $('.error1'),
        $error2 = $('.error2'),
        $error3 = $('.error3'),
        $error4 = $('.error4'),
        $error5 = $('.error5');
    const fileds = [$name, $mobile, $email, $pwd1, $pwd2];

    function checkForm(e) {
        e.preventDefault();
        // 回復原來的狀態
        fileds.forEach(el => {
            el.css('border', 'none');
            $error1.text('');
            $error2.text('');
            $error3.text('');
            $error4.text('');
            $error5.text('');
        });

        let isPass = true;

        if ($name.val().length < 2) {
            isPass = false;
            $name.css('border', '1px solid #005F5F')
                .css('borderRadius', '5px');
            // $name.next().text('請輸入正確的姓名');
            $error1.text('請輸入正確的姓名');
        }

        if (!mobile_re.test($mobile.val())) {
            isPass = false;
            $mobile.css('border', '1px solid #005F5F')
                .css('borderRadius', '5px');
            $error2.text('請輸入正確的手機號碼');
        }

        if (!email_re.test($email.val())) {
            isPass = false;
            $email.css('border', '1px solid #005F5F')
                .css('borderRadius', '5px');
            $error3.text('請輸入正確的email');
        }

        if ($pwd1.val() != $pwd2.val()) {
            isPass = false;
            $pwd1.css('border', '1px solid #005F5F')
                .css('borderRadius', '5px');
            $pwd2.css('border', '1px solid #005F5F')
                .css('borderRadius', '5px');
            $error4.text('密碼不一樣');
            $error5.text('密碼不一樣');
        }

        // console.log('isPass',isPass);

        if (isPass) {
            console.log('hi pass');
            $.post(
                'member_register_api.php',
                $(document.form1).serialize(),
                function(data) {
                    console.log('data', data);
                    if (data.success) {
                        console.log('success');
                        // document.getElementById('modalBtn').disabled=false;
                        // alert('註冊成功');
                        document.querySelector('#modalBtn').click();

                    } else {
                        // document.getElementById('modalBtn').disabled=ture;
                        
                        // alert(data.error);

                        $email.css('border', '1px solid #005F5F')
                .css('borderRadius', '5px');
            $error3.text('此Email已經註冊過');

                        // $('body').removeClass('modal-open');

                    }
                },
                'json'
            )
        }

    }
</script>

<?php include __DIR__ . '/parts/foot.php'; ?>