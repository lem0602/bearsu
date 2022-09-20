
<script>
    $.get('add-to-cart-api.php', function(data){
        countCartObj(data);
    }, 'json');

    function countCartObj(data){
        let total = 0;
        for(let i in data){
            total += data[i];
        }
        $('.cart-count').text(total);
    }
</script>