<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h2 class="display-6">Practice 01 : Store following JSON data into localstorage,read that data and
                    print it into
                    console.</h2>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h3 class="h3"> F12 on your keyboard will activate debugging.</h3>
                        <h3 class="h3">Then select "Console" in the debugger menu.</h3>
                        <h3 class="h3">Then click "Run" again.</h3>
                        <button class="btn btn-outline-info" id="btn">Run</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    var data = '{"products" : [{"id": "1","Name": "Cheese","Price": "2.5","Location": "Refrigerated foods"},{"id": "2","Name": "Crisps","Price": "3","Location": "the Snack isle"},{"id": "3","Name": "Pizza","Price": "4","Location": "Refrigerated foods"},{"id": "4","Name": "Chocolate","Price": "1.5","Location": "the Snack isle"},{"id": "5","Name": "Self-raising flour","Price": "1.5","Location": "Home baking"},{"id": "6","Name": "Ground almonds","Price": "3","Location": "Home baking"}]}'
    document.getElementById('btn').onclick = function() {

        localStorage.setItem("json_data", data);

        var retrieved_data = localStorage.getItem("json_data");

        var final = JSON.parse(retrieved_data);

        console.log(final);
    }
</script>