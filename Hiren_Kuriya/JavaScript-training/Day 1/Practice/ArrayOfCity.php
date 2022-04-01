<?php include('../../../header.php') ?>
<div class="container-fluid px-3">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="row">
                    <h2 class="display-4">Practice 02 : Declare array with 5 city names and iterate these values
                        with the help
                        of loop and display it with alert.</h2>
                    <hr>
                </div>
                <h2>Click the button to show the list.</h2>
                <button class="btn btn-info" onclick="cityList()">Click me!</button>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>

<script>
    function cityList() {
        city = ["Rajkot", "Ahmedabad", "Surat", "Katchh", "Jamnagar"];

        for (i = 0; i < city.length; i++) {
            window.alert(city[i]);
        }
    }
</script>