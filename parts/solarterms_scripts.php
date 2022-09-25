<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script>
        $('.fa-bookmark').click(function () {
            if ($(this).hasClass('fa-regular')) {
                $(this, '.fa-bookmark').addClass('fa-solid')
                $(this).removeClass('fa-regular')
            }
            else {
                $(this).removeClass('fa-solid')
                $(this).addClass('fa-regular')
            }
        })

        $('.solarterms_card_0').click(function () {
            $('.solarterms_introduce_card .down').empty();
            $('.solarterms_introduce_card .down').append(` <div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_0.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">大地回暖陽氣發,飲食宜清淡,少食辛辣的食物。</h2>`);
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_0.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_1').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_1.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">萬物生長好時機,多吃綠色食物,有益肝氣升發。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_1.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_2').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_2.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">冬眠而起醒脾胃,多吃富含植物性蛋白質的食物。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_2.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_3').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_3.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">維持人體陰陽平衡狀態,避免寒性食物損傷脾胃。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_3.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_4').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_4.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">春天肝氣最旺盛之時,養生首重疏肝與調暢情志。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_4.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_5').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_5.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">雨量漸多濕氣加重,養生的重點是袪濕邪護脾胃。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_5.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_6').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_6.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">天氣漸熱,肝氣轉弱心氣增,飲食宜清淡補水分。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_6.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_7').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_7.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">濕熱氣候易讓人不安,清熱利濕的食物可解煩悶。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_7.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_8').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_8.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">暑濕困脾更要當心粽子,清熱祛濕食材開胃消脹。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_8.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_9').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_9.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">天熱食慾差,護心冷食不可多,補充水分為優先。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_9.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_10').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_10.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">避免太陽過度曝曬,養生宜開胃、除濕、助消化。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_10.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_11').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_11.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">高溫高濕大地像蒸籠,降火排濕食材治『苦夏症。』</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_11.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_12').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_12.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">陽氣漸收,養生重保養及收藏,飲食宜滋陰潤肺。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_12.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_13').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_13.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">暑熱終結轉秋燥,預防秋老虎首重滋陰清熱潤燥。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_13.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_14').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_14.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">日夜溫差大,勿貪涼。宜滋補養陰,轉骨好時機。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_14.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_15').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_15.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">日夜相等,人體也宜用溫潤的食材達到陰陽平衡。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_15.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_16').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_16.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">夜間氣溫降低,調養著重滋陰潤燥及增強免疫力。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_16.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_17').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_17.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">北方露水凝為霜,養生應藏精氣,宜平補忌暴食。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_17.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_18').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_18.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">寒邪易入侵,補冬補嘴空,適合滋補或食療養生。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_18.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_19').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_19.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">天氣轉寒應減少精氣神消耗,除淨燥熱準備過冬。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_19.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_20').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_20.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">提高人體免疫和抗寒力,季節蔬菜有益冬天食補。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_20.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_21').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_21.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">陽氣弱陰氣盛,調養體質好時機,適合補腎強心。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_21.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_22').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_22.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">寒氣最盛,心腎陽氣易不足,宜熱食以滋補身體。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_22.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

        $('.solarterms_card_23').click(function () {
            $('.solarterms_introduce_card .down').empty()
            $('.solarterms_introduce_card .down').append(`<div class="solarterms_card_wrap d-flex justify-content-center">
                        <img src="images/solarterms_card_23.png" alt="">
                    </div>
                        <h2 class="d-flex align-items-center">天寒宜早睡晚起,保暖固腎養心,避免過度進補。</h2>`)
            if ($(window).width() > 767) {
                $("body").css("background-image", 'url(images/solarterms_bg_23.jpg)');
                $("body").css("background-color", 'transparent');
            }
        })

    </script>