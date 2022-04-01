<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h2 class="display-6">Practice 01 : Using Function Expression, find the area of circle</h2>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-center">
                        <h3 class="h3">Enter Radius (in cm) to find Area of Circle (&pi;r<sup>2</sup>)</h3>
                        <form action="javascript:void()">
                            <div class="mb-3 input-group">
                                <label for="radius" class="input-group-text">Radius</label>
                                <input type="number" class="form-control" id="radius" placeholder="Enter Radius" autofocus>
                            </div>
                            <button class="btn btn-outline-primary w-100" id="find">Find</button>
                            <div class="h5 my-3">Area of Circle : <span id="result" class="text-decoration-underline text-primary fw-bold">______</span> cm<sup>2</sup></div>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    const pi = 3.14;
    const area = function(radius) {
        return (pi * radius * radius);
    }

    document.getElementById('find').onclick = function() {
        let radius = document.getElementById('radius').value;
        document.getElementById('result').innerHTML = area(radius).toFixed(3);
    };
</script>