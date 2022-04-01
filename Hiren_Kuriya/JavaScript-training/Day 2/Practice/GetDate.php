<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 04 : Write a JavaScript function to get the current date</h1>
                <div class="row">
                    <div class="col-md-3 text-dark">
                        <h4 id="result" class="my-4"></h4>
                        <h4 id="result1" class="my-4"></h4>
                    </div>
                    <div class="col-md-6">
                        <h3>Click the buttons to show <span style="text-decoration: underline;">Results</span></h3>
                        <button onclick="full_date()" class="btn btn-primary mb-3 w-100">I will give you Full Date
                            and time as
                            well</button>
                        <hr>
                        <button onclick="date()" class="btn btn-primary mb-3 w-100">i will give you only
                            Date</button>
                        <hr>
                        <div class="col inline-block">
                            <button onclick="only_date()" class="btn btn-info mb-3">i will give you date</button>
                            <button onclick="only_month()" class="btn btn-info mb-3">i will give you month</button>
                            <button onclick="only_year()" class="btn btn-info mb-3">i will give you year</button>
                        </div>
                        <hr>
                        <p class="border border-info fw-bolder p-3 rounded">var VARIABLE_NAME = new date(YEAR,
                            MONTH, DATE, HOUR,
                            MINUTES, SECONDS)</p>
                        <ul>
                            <li>Specifying a month higher than 11, will not result in an error but add the overflow
                                to the next
                                year:</li>
                            <li>Specifying a day higher than max, will not result in an error but add the overflow
                                to the next
                                month:</li>
                            <li>6 numbers specify year, month, day, hour, minute, second:</li>
                            <li>5 numbers specify year, month, day, hour, and minute:</li>
                            <li>4 numbers specify year, month, day, and hour:</li>
                            <li class="text-warning">You cannot omit month. If you supply only one parameter it will
                                be treated
                                as milliseconds.</li>
                        </ul>
                        <button onclick="define_date()" class="btn btn-info mb-3">i will give specified date and
                            time</button>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    const d = new Date();

    function define_date() {
        const new_date = new Date(2001, 3, 30, 12, 00, 00);
        document.getElementById("result").innerHTML = new_date.toDateString();
        document.getElementById("result1").innerHTML = new_date.toTimeString();
    }

    function full_date() {
        document.getElementById("result").innerHTML = d;
    }

    function date() {
        document.getElementById("result").innerHTML = d.toDateString();
    }

    function only_date() {
        document.getElementById("result").innerHTML = d.getDate();
    }

    function only_month() {
        document.getElementById("result").innerHTML = d.getMonth() + 1;
    }

    function only_year() {
        document.getElementById("result").innerHTML = d.getFullYear();
    }
</script>