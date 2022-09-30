<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script>
    function area() {
        var county_select = document.getElementById('county_select');
        var district_select = document.getElementById('district_select');
        console.log('county_select', county_select.value);
        console.log('area', district_select.value);
        location = './map.php?county='+county_select.value+'&area=' + district_select.value;
    }
</script>