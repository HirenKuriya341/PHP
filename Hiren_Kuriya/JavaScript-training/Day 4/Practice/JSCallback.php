<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 01 : Define a function called callback which receives an
                    argument and prints the square of
                    that number.</h1>
                <div class="row">
                    <div class="col-md-12">
                        <span>Callback</span>
                        <ul>
                            <li>A callback is a function passed as an argument to another function</li>
                            <li>This technique allows a function to call another function</li>
                            <li>A callback function can run after another function has finished</li>
                            <li>JavaScript functions are executed in the sequence they are called.</li>
                        </ul>
                        <div class="text-center">
                            <h2>
                                play 1 will call <strong>fisrt()</strong> function then <strong>second()</strong> function.
                            </h2>
                            <button class="btn btn-info" onclick="play_1()">Play 1</button>
                            <h2>
                                play 2 will call <strong>second()</strong> function then <strong>first()</strong> function.
                            </h2>
                            <button class="btn btn-info" onclick="play_2()">Play 2</button>
                        </div>
                        <h3 class="h3 p-5 text-center border border-danger my-1" id="demo">Output</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    function display(print) {
        document.getElementById('demo').innerHTML = print;
    }

    function first() {
        display("Good Morning...!");
    }

    function second() {
        display("JavaScript Callback functionality...");
    }

    function play_1() {
        first();
        second();
    }

    function play_2() {
        second();
        first();
    }
</script>