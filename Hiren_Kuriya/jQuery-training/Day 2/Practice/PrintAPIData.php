<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 01 : Use getJSON method access this web api <em class="text-decoration-underline">https://gorest.co.in/public-api/users</em> and display
                    the result in one table.</h1>
                <div class="row">
                    <div class="col-md">
                        <div class="text-center">
                            <button class="btn btn-outline-primary mb-3" id="get-data">Get Data</button>
                        </div>
                        <table class="table table-striped table-hover table-info">
                            <caption></caption>
                            <thead>
                                <tr>
                                    <th>Sr. no.</th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="data">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script>
    $(document).ready(function() {
        $.getJSON("https://gorest.co.in/public-api/users", function(result) {
            console.log(data);
            $("#get-data").click(result.api, function(api) {
                $.each(result.data, function(index) {
                    var sr = index + 1;
                    $("#data").append("<tr><td>" + sr + "<td>" + result.data[index].id + "</td><td>" + result.data[index].name + "</td><td>" + result.data[index].email + "</td><td>" + result.data[index].gender + "</td>" + "</td><td>" + result.data[index].status + "</td></tr>");
                });
                document.getElementById('get-data').disabled = true;
            })
        })
    })
</script>