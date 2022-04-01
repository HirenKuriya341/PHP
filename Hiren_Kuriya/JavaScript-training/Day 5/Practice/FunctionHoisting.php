<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="display-6 mb-5">Practice 03 : Explain usage of Function Hosting using example</div>
                <div class="row">
                    <ul class="px-4">
                        <li>Hoisting is JavaScript's default behavior of moving declarations to the top.</li>
                        <li>A variable can be declared after it has been used.</li>
                        <li>A variable can be used before it has been declared.</li>
                        <li>Variables defined with <em>let</em> and <em>const</em> are hoisted to the top of the
                            block, but not
                            initialized.</li>
                    </ul>
                </div>
                <button class="btn btn-outline-primary" id="demo">Click</button>
                <p class="m-5 p-2" id="demo1"></p>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    hoisting();

    function hoisting() {
        a = 3 * 5;
        document.getElementById('demo').onclick = function() {
            document.getElementById('demo1').innerHTML = "Hoisting Function value : " + a;
        }
    }
</script>