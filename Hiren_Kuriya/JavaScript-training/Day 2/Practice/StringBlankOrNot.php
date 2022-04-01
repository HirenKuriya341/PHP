<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
    <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="row">
                    <h1 class="display-6">Practice 01 : Write a JavaScript function to check whether a string is
                        blank or not
                    </h1>
                    <hr class="text-danger">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="javascript:void()">
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" name="num1" id="check_string" placeholder="Enter String" autofocus>
                                <label for="check_string">Enter String</label>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success" onclick="checkme()">Check me!</button>
                                <hr>
                                <h3 style="color: red;" id="output"></h3>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    function checkme() {
        var CheckingString = document.getElementById('check_string').value;
        if (CheckingString.length === 0) {
            document.getElementById('output').innerHTML = "<u>Blank</u>.";
        } else {
            document.getElementById('output').innerHTML = "<u>Not blank</u>.";
        }
    }
</script>