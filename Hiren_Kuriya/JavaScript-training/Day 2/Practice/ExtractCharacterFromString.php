<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 03 : Write a JavaScript function to extract a specified number of
                    characters from
                    a string.</h1>
                <hr>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="javascript:void()">
                            <div class="mb-3 form-floating">
                                <input type="text" id="string" class="form-control" placeholder="Enter String" required autofocus>
                                <label for="string">Enter String</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="number" id="range-1" class="form-control" placeholder="Enter starting Range" required>
                                <label for="string">Enter index From where to extract the string</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="number" id="range-2" class="form-control" placeholder="Enter ending Range" required>
                                <label for="string">Enter ending index upto extract the string</label>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="checkme()">Submit</button>
                        </form>
                        <hr>
                        <h3>Result : <span style="color: red; text-decoration: underline;" id="result"></span></h3>
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
        var string = document.getElementById('string').value;
        var range1 = parseInt(document.getElementById('range-1').value);
        var range2 = parseInt(document.getElementById('range-2').value);

        if (string.length < range1) {
            alert("Starting Range is invalid.");
        } else if ((string.length - range1) < range2) {
            alert("Ending Range is invalid.");
        } else {
            result = string.substr(range1, range2);

            document.getElementById('result').innerHTML = result;
        }
    }
</script>