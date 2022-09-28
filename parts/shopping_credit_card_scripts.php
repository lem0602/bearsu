<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
    $("#card_number_1").bind("keyup paste", function() {
        $("#auto_card_number_1").val($(this).val());
    });

    $("#card_number_2").bind("keyup paste", function() {
        $("#auto_card_number_2").val($(this).val());
    });

    $("#card_number_3").bind("keyup paste", function() {
        $("#auto_card_number_3").val($(this).val());
    });

    $("#card_number_4").bind("keyup paste", function() {
        $("#auto_card_number_4").val($(this).val());
    });

    $("#last_number").bind("keyup paste", function() {
        $("#auto_last_number").val($(this).val());
    });

    $("#month").change("copy paste", function() {
        $("#auto_month").val($(this).val());
    });

    $("#year").change(function() {
        $("#auto_year").val($(this).val() - 2000);
    });

    let circleNum = 0

    $('.card_wrap').click(function() {
        if (circleNum == 0) {
            $('.card_wrap').css('transform', 'rotateY(0deg)');
            circleNum = circleNum + 1;
        } else {
            $('.card_wrap').css('transform', 'rotateY(180deg)');
            circleNum = circleNum - 1;
        }
    })

    $("#last_number").click("beforeinput", function() {
        $('.card_wrap').css('transform', 'rotateY(180deg)');
    });

    $("#card_number_1,#card_number_2,#card_number_3,#card_number_4,#year,#month").click("beforeinput", function() {
        $('.card_wrap').css('transform', 'rotateY(0deg)');
    });

    //輸入想要跳下一格的class名稱
    var tablist = ["autotab"];

    //特殊功能鍵，防止修改時按了ctrl shift alt、方向鍵、del之類的被跳到下一格
    var functionkey = [8, 9, 16, 17, 18, 20, 33, 34, 35, 36, 37, 38, 39, 40, 45, 46, 93, 144];
    tablist.forEach(function(element) {
        $("." + element).on("keydown", function(event) {
            //next
            if ($(this).attr("maxLength") == $(this).val().length && (functionkey.indexOf(event.keyCode) == -1))
                $(this).nextAll("." + element).first().focus();
            //prev
            if ($(this).val().length == 0 && event.keyCode == 8) {
                $(this).prevAll("." + element).first().focus();
            }
        });
    });
</script>