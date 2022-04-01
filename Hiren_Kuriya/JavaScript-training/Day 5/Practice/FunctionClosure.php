<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="display-6 mb-5">Practice 06 : Explain Function closure with practical.</div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        <button class="btn btn-outline-primary" id="btn">Clouser</button>
                        <h2 class="h2 my-3" id="result">Click the Button</h2>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    const closure = (function() {
        var a = 0;
        return function() {
            a = a + 1;
            return "You Clicked Button <h1 class='text-danger'>" + a + "</h1> times.";
        }
    }());

    document.getElementById('btn').onclick = function() {
        document.getElementById('result').innerHTML = closure();
    }
</script>