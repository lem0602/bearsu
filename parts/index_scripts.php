<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        // ------------main pic start-----------
        $('#bearsu').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#say_change').css('opacity', '1')
            $('#say_change').css('transform', 'scale(1.3)')
            $('#bearsu_cool').css('opacity', '1')
            $('#mouth_cool').css('opacity', '1')
            $('#mouth').css('opacity', '0')
            // $('#bearsu').css('transform', 'rotate(360deg) scale(1.2)')
            $('#bearsu').css('transform', 'scale(1.2)')
        })

        $('#bearsu').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#say_change').css('opacity', '0')
            $('#bearsu').css('transform', 'rotate(0deg)')
            $('#bearsu_cool').css('opacity', '0')
            $('#mouth_cool').css('opacity', '0')
            $('#mouth').css('opacity', '1')
        })

        $('#tomato1, #tomato2, #tomato3, #tomato4').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#tomato_say').css('opacity', '1')
            $('#tomato_say').css('transform', 'scale(1.3)')
        })

        $('#tomato1, #tomato2, #tomato3, #tomato4').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#tomato_say').css('opacity', '0')
        })

        $('#sugarpea1, #sugarpea2, #sugarpea3').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#sugarpea_say').css('opacity', '1')
            $('#sugarpea_say').css('transform', 'scale(1.3)')
        })

        $('#sugarpea1, #sugarpea2, #sugarpea3').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#sugarpea_say').css('opacity', '0')
        })

        $('#carrot1, #carrot2, #carrot3, #carrot4').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#carrot_say').css('opacity', '1')
            $('#carrot_say').css('transform', 'scale(1.3)')
        })

        $('#carrot1, #carrot2, #carrot3, #carrot4').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#carrot_say').css('opacity', '0')
        })

        $('#pumpkin1, #pumpkin2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#pumpkin_say').css('opacity', '1')
            $('#pumpkin_say').css('transform', 'scale(1.3)')
        })

        $('#pumpkin1, #pumpkin2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#pumpkin_say').css('opacity', '0')
        })

        $('#sweetpotato1, #sweetpotato2,#sweetpotato3,#sweetpotato4,#sweetpotato5').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#sweetpotato_say').css('opacity', '1')
            $('#sweetpotato_say').css('transform', 'scale(1.3)')
        })

        $('#sweetpotato1, #sweetpotato2,#sweetpotato3,#sweetpotato4,#sweetpotato5').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#sweetpotato_say').css('opacity', '0')
        })

        $('#yan1, #yan2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#yan_say').css('opacity', '1')
            $('#yan_say').css('transform', 'scale(1.3)')
        })

        $('#yan1, #yan2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#yan_say').css('opacity', '0')
        })

        $('#cabbage1').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#cabbage_say').css('opacity', '1')
            $('#cabbage_say').css('transform', 'scale(1.3)')
        })

        $('#cabbage1').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#cabbage_say').css('opacity', '0')
        })

        $('#mushroomb1, #mushroomb2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#mushroomb_say').css('opacity', '1')
            $('#mushroomb_say').css('transform', 'scale(1.3)')
        })

        $('#mushroomb1, #mushroomb2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#mushroomb_say').css('opacity', '0')
        })

        $('#mushrooma1, #mushrooma2, #mushrooma3').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#mushrooma_say').css('opacity', '1')
            $('#mushrooma_say').css('transform', 'scale(1.3)')
        })

        $('#mushrooma1, #mushrooma2, #mushrooma3').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#mushrooma_say').css('opacity', '0')
        })

        $('#asparagus1, #asparagus2, #asparagus3').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#asparagus_say').css('opacity', '1')
            $('#asparagus_say').css('transform', 'scale(1.3)')
        })

        $('#asparagus1, #asparagus2, #asparagus3').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#asparagus_say').css('opacity', '0')
        })

        $('#garlic1, #garlic2, #garlic3').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#garlic_say').css('opacity', '1')
            $('#garlic_say').css('transform', 'scale(1.3)')
        })

        $('#garlic1, #garlic2, #garlic3').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#garlic_say').css('opacity', '0')
        })

        $('#oniona1, #oniona2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#oniona_say').css('opacity', '1')
            $('#oniona_say').css('transform', 'scale(1.3)')
        })

        $('#oniona1, #oniona2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#oniona_say').css('opacity', '0')
        })

        $('#lettuce1').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#lettuce_say').css('opacity', '1')
            $('#lettuce_say').css('transform', 'scale(1.3)')
        })

        $('#lettuce1').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#lettuce_say').css('opacity', '0')
        })

        $('#eggplant1, #eggplant2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#eggplant_say').css('opacity', '1')
            $('#eggplant_say').css('transform', 'scale(1.3)')
        })

        $('#eggplant1, #eggplant2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#eggplant_say').css('opacity', '0')
        })

        $('#bitter1, #bitter2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#bitter_say').css('opacity', '1')
            $('#bitter_say').css('transform', 'scale(1.3)')
        })

        $('#bitter1, #bitter2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#bitter_say').css('opacity', '0')
        })

        $('#brocoli1, #brocoli2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#brocoli_say').css('opacity', '1')
            $('#brocoli_say').css('transform', 'scale(1.3)')
        })

        $('#brocoli1, #brocoli2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#brocoli_say').css('opacity', '0')
        })

        $('#bamboo1').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#bamboo_say').css('opacity', '1')
            $('#bamboo_say').css('transform', 'scale(1.3)')
        })

        $('#bamboo1').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#bamboo_say').css('opacity', '0')
        })

        $('#onionb1, #onionb2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#onionb_say').css('opacity', '1')
            $('#onionb_say').css('transform', 'scale(1.3)')
        })

        $('#onionb1, #onionb2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#onionb_say').css('opacity', '0')
        })

        $('#pepper1, #pepper2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#pepper_say').css('opacity', '1')
            $('#pepper_say').css('transform', 'scale(1.3)')
        })

        $('#pepper1, #pepper2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#pepper_say').css('opacity', '0')
        })

        $('#radish1, #radish2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#radish_say').css('opacity', '1')
            $('#radish_say').css('transform', 'scale(1.3)')
        })

        $('#radish1, #radish2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#radish_say').css('opacity', '0')
        })

        $('#gherkin1').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#gherkin_say').css('opacity', '1')
            $('#gherkin_say').css('transform', 'scale(1.3)')
        })

        $('#gherkin1').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#gherkin_say').css('opacity', '0')
        })

        $('#kale1, #kale2').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#kale_say').css('opacity', '1')
            $('#kale_say').css('transform', 'scale(1.3)')
        })

        $('#kale1, #kale2').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#kale_say').css('opacity', '0')
        })

        $('#solanum1').mouseenter(function () {
            $('#say').css('opacity', '0')
            $('#solanum_say').css('opacity', '1')
            $('#solanum_say').css('transform', 'scale(1.3)')
        })

        $('#solanum1').mouseleave(function () {
            $('#say').css('opacity', '1')
            $('#solanum_say').css('opacity', '0')
        })

        // --------------main pic end-------------

        var timer = 4000;

        var i = 0;
        var max = $('#c > li').length;

        $("#c > li").eq(i).addClass('active').css('left', '0');
        $("#c > li").eq(i + 1).addClass('active').css('left', '33.333%');
        $("#c > li").eq(i + 2).addClass('active').css('left', '66.666%');

        setInterval(function () {

            $("#c > li").removeClass('active');

            $("#c > li").eq(i).css('transition-delay', '0.25s');
            $("#c > li").eq(i + 1).css('transition-delay', '0.5s');
            $("#c > li").eq(i + 2).css('transition-delay', '0.75s');

            if (i < max - 3) {
                i = i + 3;
            }

            else {
                i = 0;
            }

            $("#c > li").eq(i).css('left', '0').addClass('active').css('transition-delay', '1.25s');
            $("#c > li").eq(i + 1).css('left', '33.333%').addClass('active').css('transition-delay', '1.5s');
            $("#c > li").eq(i + 2).css('left', '66.666%').addClass('active').css('transition-delay', '1.75s');

        }, timer);

        // -------mobile start--------
        var timermobile = 4000;

        var j = 0;
        var maxmobile = $('#cm > li').length;

        $("#cm > li").eq(j).addClass('active').css('left', '0');
        $("#cm > li").eq(j + 1).addClass('active').css('left', '50%');

        setInterval(function () {

            $("#cm > li").removeClass('active');

            $("#cm > li").eq(j).css('transition-delay', '0.25s');
            $("#cm > li").eq(j + 1).css('transition-delay', '0.5s');

            if (j < maxmobile - 2) {
                j = j + 2;
            }

            else {
                j = 0;
            }

            $("#cm > li").eq(j).css('left', '0').addClass('active').css('transition-delay', '1.25s');
            $("#cm > li").eq(j + 1).css('left', '50%').addClass('active').css('transition-delay', '1.5s');

        }, timermobile);

        // if ($(window).width() > 767) {
        //     if ($(window).scrollTop() >= 600) {
        //         $('.pc_header').css({
        //             zIndex: 9999,
        //             opacity: 1,
        //         })
        //     }
        //     else {
        //         $('.pc_header').css({
        //             zIndex: -9999,
        //             opacity: 0,
        //         })
        //     }
        // }

        // if ($(window).width() > 767) {
        //     if ($(window).scrollTop() >= 600) {
        //         $('.pc_header').css({
        //             animation: 'header_show 3s linear',
        //         })
        //     }
        //     else{
        //         $('.pc_header').css({
        //             animation: 'header_hide 3s linear',
        //         })
        //     }
        // }

        $(window).scroll(function () {
            console.log('scrollTop:', $(window).scrollTop());
            if ($(window).scrollTop() >= 360) {
                $('.bigtittle h1').css({
                    transform: 'translateX(0px)',
                    opacity: 1,
                })
            }
            else {
                $('.bigtittle h1').css({
                    transform: 'translateX(-1000px)',
                    opacity: 0,
                })
            }

            if ($(window).scrollTop() >= 360) {
                $('.nav_left img').css({
                    transform: 'skew(45deg)',
                    transformOrigin: 'top center',
                })
            }
            else {
                $('.nav_left img').css({
                    transform: 'skew(0deg)',
                    transformOrigin: 'top center',
                })
            }

            if ($(window).scrollTop() >= 400) {
                $('.nav_left img').css({
                    transform: 'skew(0deg)',
                    transformOrigin: 'top center',
                })
            }
            else {
                $('.nav_left img').css({
                    transform: 'skew(45deg)',
                    transformOrigin: 'top center',
                })
            }

            if ($(window).scrollTop() >= 400) {
                $('.bigtittle h3').addClass(
                    'animate__animated animate__heartBeat'
                )
            }
            else {
                $('.bigtittle h3').removeClass(
                    'animate__animated animate__heartBeat'
                )
            }

            if ($(window).scrollTop() >= 860) {
                $('.mobile_title1').addClass(
                    'animate__animated animate__tada'
                )
                $('.mobile_circle1').css({
                    transform: 'translateX(0px) rotate(0deg)',
                    opacity: 1,
                })
            }
            else {
                $('.mobile_title1').removeClass(
                    'animate__animated animate__tada'
                )
                $('.mobile_circle1').css({
                    transform: 'translateX(-200px) rotate(-360deg)',
                    opacity: 0,
                })
            }

            if ($(window).scrollTop() >= 1570) {
                $('.mobile_title2').addClass(
                    'animate__animated animate__tada'
                )
                $('.mobile_circle2').css({
                    transform: 'translateX(0px) rotate(0deg)',
                    opacity: 1,
                })
            }
            else {
                $('.mobile_title2').removeClass(
                    'animate__animated animate__tada'
                )
                $('.mobile_circle2').css({
                    transform: 'translateX(-200px) rotate(-360deg)',
                    opacity: 0,
                })
            }

            if ($(window).scrollTop() >= 2280) {
                $('.mobile_title3').addClass(
                    'animate__animated animate__tada'
                )
                $('.mobile_circle3').css({
                    transform: 'translateX(0px) rotate(0deg)',
                    opacity: 1,
                })
            }
            else {
                $('.mobile_title3').removeClass(
                    'animate__animated animate__tada'
                )
                $('.mobile_circle3').css({
                    transform: 'translateX(-200px) rotate(-360deg)',
                    opacity: 0,
                })
            }

            if ($(window).scrollTop() >= 1000) {
                $('.describ1_wrap, .tittle1').css({
                    transform: 'translateY(0px)',
                    opacity: 1,
                })
            }
            else {
                $('.describ1_wrap, .tittle1').css({
                    transform: 'translateY(1000px)',
                    opacity: 0,
                })
            }

            if ($(window).scrollTop() >= 1750) {
                $('.describ2_wrap, .tittle2').css({
                    transform: 'translateY(0px)',
                    opacity: 1,
                })
            }
            else {
                $('.describ2_wrap, .tittle2').css({
                    transform: 'translateY(1000px)',
                    opacity: 0,
                })
            }

            if ($(window).scrollTop() >= 2500) {
                $('.describ3_wrap, .tittle3').css({
                    transform: 'translateY(0px)',
                    opacity: 1,
                })
            }
            else {
                $('.describ3_wrap, .tittle3').css({
                    transform: 'translateY(1000px)',
                    opacity: 0,
                })
            }

            if ($(window).scrollTop() >= 2900) {
                $('.mascot_left_wrap, .have_restaurant_wrap').css({
                    transform: 'translateX(0px)',
                    opacity: 1,
                })
            }
            else {
                $('.mascot_left_wrap, .have_restaurant_wrap').css({
                    transform: 'translateX(-500px)',
                    opacity: 0,
                })
            }

            if ($(window).scrollTop() >= 3200) {
                $('.have_recipe_wrap, .mascot_right_wrap').css({
                    transform: 'translateX(0px)',
                    opacity: 1,
                })
            }
            else {
                $('.have_recipe_wrap, .mascot_right_wrap').css({
                    transform: 'translateX(500px)',
                    opacity: 0,
                })
            }

            if ($(window).width() > 767) {
                if ($(window).scrollTop() >= 3100) {
                    $('.mascot_left_wrap, .have_restaurant_wrap').css({
                        transform: 'translateX(0px)',
                        opacity: 1,
                    })
                }
                else {
                    $('.mascot_left_wrap, .have_restaurant_wrap').css({
                        transform: 'translateX(-1000px)',
                        opacity: 0,
                    })
                }
            }

            if ($(window).width() > 767) {
                if ($(window).scrollTop() >= 900) {
                    // $('.circle1').css({
                    //     animation: 'flipInY 1s linear',
                    //     opacity: 1,
                    // })
                    $('.circle1').addClass(
                        'animate__animated animate__flipInY'
                    )
                }
                else {
                    $('.circle1').removeClass(
                        'animate__animated animate__flipInY'
                    )
                }
            }

            if ($(window).width() > 767) {
                if ($(window).scrollTop() >= 1610) {
                    $('.circle2').addClass(
                        'animate__animated animate__flipInY'
                    )
                }
                else {
                    $('.circle2').removeClass(
                        'animate__animated animate__flipInY'
                    )
                }
            }

            if ($(window).width() > 767) {
                if ($(window).scrollTop() >= 2380) {
                    $('.circle3').addClass(
                        'animate__animated animate__flipInY'
                    )
                }
                else {
                    $('.circle3').removeClass(
                        'animate__animated animate__flipInY'
                    )
                }
            }

            if ($(window).width() > 767) {
                if ($(window).scrollTop() >= 3100) {
                    $('.have_recipe_wrap, .mascot_right_wrap').css({
                        transform: 'translateX(0px)',
                        opacity: 1,
                    })
                }
                else {
                    $('.have_recipe_wrap, .mascot_right_wrap').css({
                        transform: 'translateX(1000px)',
                        opacity: 0,
                    })
                }
            }

        })

        $('.s_circle').mouseenter(function () {
            $('.s_circle').addClass(
                'animate__animated animate__tada'
            )
        })

        $('.s_circle').mouseleave(function () {
            $('.s_circle').removeClass(
                'animate__animated animate__tada'
            )
        })
    </script>