<div class="navmember ">
    <ul id="navmember" class="navmember1 d-flex d-md-block">
        <li class="navmember_item  m1 <?php if($pageName == 'member') {echo 'on' ;} ?> ">
            <a href="./member.php">會員資料 </a>
        </li>
        <li class="navmember_item m2 <?php if($pageName == 'order-record') {echo 'on' ;} ?>">
            <a href="./Order-record.php">訂單記錄</a>
        </li>
        <li class="navmember_item m2 <?php if($pageName == '') {echo 'on' ;} ?>">
            <a href="./recipe_collect.php">我的食譜 </a>
        </li>
        <li class="navmember_item m3 <?php if($pageName == 'map_collect') {echo 'on' ;} ?>">
            <a href="./map_collect.php">收藏 </a>
        </li>
    </ul>
</div>



<script>
    var navmember = document.querySelectorAll('#navmember > li');

    for (let i = 0; i < navmember.length; i++) {
        const element = navmember[i];
        element.onclick = function() {
            console.log('aaa');
        }
    }
</script>