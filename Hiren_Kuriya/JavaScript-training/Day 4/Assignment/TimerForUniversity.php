<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h2 class="display-6">Assignment 01 : University of Mumbai needs to set an online exam for their students.
                    For that they need to set a timer for three hours. After 3 hours exams should be finished.</h2>
                <hr>
                <div class="row text-center text-danger">
                    <div class="col-md-4">
                        <h2 class="text-success text-uppercase fw-bolder">Hours</h2>
                        <hr>
                        <h3 id="hour">Hour</h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-success text-uppercase fw-bolder">Minutes</h2>
                        <hr>
                        <h3 id="minute">Minute</h3>
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-success text-uppercase fw-bolder">Seconds</h2>
                        <hr>
                        <h3 id="second">Second</h3>
                    </div>
                    <div class="p-5">
                        <button class="btn btn-warning w-75" onclick="timer()">Start Time</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    function timer() {
        var currentTime = new Date();

        var now = currentTime.setHours(currentTime.getHours() + 3);

        var x = setInterval(
            function() {
                total = new Date().getTime();

                distance = now - total;

                var hour = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minute = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var second = Math.floor(distance % (1000 * 60) / 1000);

                document.getElementById('hour').innerHTML = hour;
                document.getElementById('minute').innerHTML = minute;
                document.getElementById('second').innerHTML = second;

                if (distance < 0) {
                    clearInterval(x);
                    alert("Time Over");
                }
            }, 1000
        )
    }
</script>