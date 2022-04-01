<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h2 class="display-6">Practice 02 : Keep JSON Data into a file, using Web Fetch API read that data.
                </h2>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <button class="btn btn-info" id="btn">Read Data</button>
                        <h2 class="h2">JSON Data from file</h2>
                        <table class="table table-hover table-striped table-info">
                            <caption></caption>
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Location</th>
                            </thead>
                            <tbody id="result">

                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    async function json_data() {
        var data = await fetch('JSON_Data.json');
        var value = await data.json();
        var id = 0;
        for (i = 0; i < value.products.length; i++) {
            id += 1;
            document.getElementById("result").innerHTML += "<tr><td>" + id + "</td><td>" + value.products[i].Name + "</td><td>" + value.products[i].Price + "</td><td>" + value.products[i].Location + "</td></tr>";
        }
    }
    document.getElementById('btn').onclick = function() {
        json_data();
        document.getElementById('btn').disabled = true;
    };
</script>