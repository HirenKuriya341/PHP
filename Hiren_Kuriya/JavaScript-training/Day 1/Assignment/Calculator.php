<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Assignment : 01 Calucator Using Javascript.</h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="javascript:void()">
                            <div class="mb-3 form-floating">
                                <input type="number" class="form-control" name="num1" id="num1" placeholder="Enter Number 1" required>
                                <label for="num1">Please enter first number</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="number" class="form-control" name="num2" id="num2" placeholder="Enter Number 2" required>
                                <label for="num2">Please enter second number : </label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="calculator" value="addition" class="form-check-input" id="addition" required>
                                <label class="form-check-label" for="addition">Addition</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="calculator" value="subtraciton" class="form-check-input" id="subtraciton" required>
                                <label for="subtraciton">Subtraction</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="calculator" value="multiplication" class="form-check-input" id="multiplication" required>
                                <label for="multiplication">Multiplication</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" name="calculator" value="division" class="form-check-input" id="division" required>
                                <label for="division">Division</label>
                            </div>
                            <div class="mb-3 justify-evenly">
                                <button type="submit" class="btn btn-success" onclick="calculation()">Submit</button>
                                <button type="reset" class="btn btn-danger" onclick="reset()">Reset</button>
                            </div>
                        </form>
                        <div>
                            <h1 class="display-6">Result : <span id="result" class="text-decoration-underine h3"></span></h1>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>

<script type="text/javascript">
    function calculation() {
        var number1, number2, calc;
        number1 = parseInt(document.getElementById('num1').value);
        number2 = parseInt(document.getElementById('num2').value);

        calc = document.getElementsByName('calculator');

        for (var check of calc) {
            if (check.checked) {
                operation = check.value;
            }
        }
        var result;
        if (operation === 'addition') {
            result = number1 + number2;
            document.getElementById('result').innerHTML = 'Addition :- ' + result;
        }
        if (operation === 'subtraciton') {
            result = number1 - number2;
            document.getElementById('result').innerHTML = 'Subtraction :- ' + result;
        }
        if (operation === 'multiplication') {
            result = number1 * number2;
            document.getElementById('result').innerHTML = 'Multiplication :- ' + result;
        }
        if (operation === 'division') {
            result = number1 / number2;
            document.getElementById('result').innerHTML = 'Division :- ' + result;
        }
    }

    function reset() {
        document.getElementById('num1').value = "";
        document.getElementById('num2').value = "";
        calc = document.getElementsByName('calculator');

        for (var check of calc) {
            man.checked = false;
        }
        document.getElementById('result').innerHTML = "";
    }
</script>