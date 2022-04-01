<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="row">
                    <h1 class="display-6">Practice 01 : Accept three numbers from the user using prompt, find the
                        greater of these the numbers and do the sum of that numbers which are greater than 40.</h1>
                    <hr>
                    <div>
                        <button class="btn btn-outline-primary" onclick="largestNumber()">Find</button>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h4>1<sup>st</sup> Number</h4>
                            <h1 id="first"></h1>
                        </div>
                        <div class="col-md-4">
                            <h4>2<sup>nd</sup> Number</h4>
                            <h1 id="second"></h1>
                        </div>
                        <div class="col-md-4">
                            <h4>3<sup>rd</sup> Number</h4>
                            <h1 id="third"></h1>
                        </div>
                        <div class="border border-success rounded">
                            <h4 id="result"></h4>
                            <h4>Addition of Number Greater than 40 : <span id="sum" class="text-primary h2">0</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>

<script>
    function largestNumber(num1, num2, num3) {
        var firstNum, secondNum, thirdNum, sum;
        firstNum = window.prompt("Enter 1st Number : ");
        secondNum = window.prompt("Enter 2nd Number : ");
        thirdNum = window.prompt("Enter 3rd Number : ");

        var num1 = parseInt(firstNum);
        var num2 = parseInt(secondNum);
        var num3 = parseInt(thirdNum);

        document.getElementById('first').innerHTML = num1;
        document.getElementById('second').innerHTML = num2;
        document.getElementById('third').innerHTML = num3;
        if (num1 >= num2 && num1 >= num3) {
            document.getElementById('result').innerHTML = "1<sup>st</sup> Number (" + num1 + ") is Greatest of all numbers.";
        } else if (num2 >= num1 && num2 >= num3) {
            document.getElementById('result').innerHTML = "2<sup>nd</sup> Number (" + num2 + ") is Greatest of all numbers.";
        } else {
            document.getElementById('result').innerHTML = "3<sup>rd</sup> Number (" + num3 + ") is Greatest of all numbers."
        }

        sum = 0;
        array = [num1, num2, num3];
        max = array[0];
        for (i = 0; i < 3; i++) {
            if (max > array[i + 1]) {
                max = array[i + 1];
            }
            if (array[i] >= 40) {
                sum = sum + array[i];
            }
        }
        document.getElementById('sum').innerHTML = sum;
    }
</script>