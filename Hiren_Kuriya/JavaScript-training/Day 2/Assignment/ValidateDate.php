<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Assignment 01 : Date entered by the user should be checked for whether it is a Valid Date or
                    not.</h1>
                <div class="row">
                    <div class="col-md-8">
                        <form action="javascript:void()" class="form-control py-5">
                            <div class="form-group">
                                <label for="validDate">Enter Date in MM-DD-YYYY
                                    formate only</label>
                                <input type="text" placeholder="MM-DD-YYYY" id="validDate" class="form-control" required autofocus>
                            </div>
                            <button class="btn btn-outline-primary my-2" onclick="validateDate()">Check</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <h1 class="h1 text-decoration-underline">Output</h1>
                        <h4 class="h4 pt-5" id="output"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>

<script type="text/javascript">
    date_formate = /^(?:(0[1-9]|1[012])[\-.](0[1-9]|[12][0-9]|3[01])[\-.][0-9]{4})$/;;

    function validateDate() {
        date = document.getElementById('validDate').value;
        if (!(date_formate.test(date))) {
            document.getElementById('output').innerHTML = "<p class='text-danger'>Date is INVALID</p>";
        } else {
            validData = date.split("-");
            mm = parseInt(validData[0]);
            dd = parseInt(validData[1]);
            yyyy = parseInt(validData[2]);

            if ((mm == 1 || mm == 3 || mm == 5 || mm == 7 || mm == 8 || mm == 10 || mm == 12) && dd > 31) {
                document.getElementById('output').innerHTML = "<p class='text-danger'>INVALID Day of Month</p>";
            } else if ((mm == 4 || mm == 6 || mm == 9 || mm == 11) && dd > 30) {
                document.getElementById('output').innerHTML = "<p class='text-danger'>INVALID Day of Month</p>";
            } else if (mm == 2 && dd > 29 && yyyy % 4 == 0) {
                document.getElementById('output').innerHTML = "<p class='text-danger'>INVALID Day of February Month for Leap Year</p>";
            } else if (mm == 2 && dd > 28 && yyyy % 4 != 0) {
                document.getElementById('output').innerHTML = "<p class='text-danger'>INVALID Day of February Month for Non-leap Year</p>";
            } else {
                document.getElementById('output').innerHTML = "<p class='text-success'>Date is VALID</p>";
            }
        }
    }
</script>