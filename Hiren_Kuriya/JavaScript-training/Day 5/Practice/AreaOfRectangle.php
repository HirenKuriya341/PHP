<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="display-6 mb-5">Practice 02 : Using Function Constructor, find the area of rectangle
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        <h3 class="h3">Enter Length & Width to find Area of Rectangle (Length X Width)</h3>
                        <form action="javascript:void()">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 input-group">
                                        <label for="length" class="input-group-text">Length</label>
                                        <input type="number" class="form-control" id="length" placeholder="Enter Length (cm)" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 input-group">
                                        <label for="width" class="input-group-text">Width</label>
                                        <input type="number" class="form-control" id="width" placeholder="Enter width (cm)">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-outline-primary w-100" id="find">Find</button>
                            <div class="h2 mt-5">Area of Rectangle : <span id="result" class="text-decoration-underline">______</span> cm<sup>2</sup></div>
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
    let area;
    area = new Function("len", "wid", "return len * wid");

    document.getElementById('find').onclick = function() {
        var len, wid;
        len = document.getElementById('length').value;
        wid = document.getElementById('width').value;
        document.getElementById('result').innerHTML = area(len, wid);
    }
</script>