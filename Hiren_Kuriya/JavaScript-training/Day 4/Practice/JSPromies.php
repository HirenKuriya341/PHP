<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h2 class="h2">Practice 03 : Make a function that takes in a single parameter and returns a new
                    promise. using setTimeout, after 500 milliseconds, the promise will either resolve or reject. if the input is a string, the
                    promise resolves with that reverse string . if the input is anything but a string it rejects with that
                    same input call the function wrong Input.</h2>
                <div class="row">
                    <form action="javascript:void();" class="p-4">
                        <div class="mb-2 form-floating">
                            <input type="text" class="form-control" id="string_value" placeholder="Enter String" autofocus>
                            <label for="string_value">Enter String</label>
                        </div>
                        <span class="text-danger fw-bold" id="result-2"></span>
                        <div class="my-3">
                            <button class="btn btn-success" onclick="myFunction()">Check</button>
                        </div>
                    </form>
                    <h2 class="text-success fw-bold" id="result-1"></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    // function myFunction() {
    //     let myPromise = new Promise(function (resolve, reject) {
    //         let string = document.getElementById('string_value').value;

    //         setTimeout(
    //             function () {
    //                 RegExp = /[^0-9]/;
    //                 if ((RegExp.test(string))) {
    //                     resolve(
    //                         string.split("").reverse().join("")
    //                     );
    //                 }
    //                 else {
    //                     reject("Invalid String");
    //                 }
    //             }, 500
    //         )

    //     }).then(
    //         function (trueValue) {
    //             document.getElementById('result').innerHTML = trueValue;
    //         },
    //         function (falseValue) {
    //             document.getElementById('result').innerHTML = falseValue;
    //         }
    //     );
    // }
    function myFunction() {
        let newPromise = new Promise(function(resolve, reject) {
            var string_value = document.getElementById('string_value').value;

            setTimeout(function() {
                RegExp = /[^0-9]/;
                if ((RegExp.test(string_value))) {
                    resolve(string_value.split("").reverse().join(""));
                } else {
                    reject("Enter String first");
                }
            }, 500)
        }).then((resolve) => {
            document.getElementById('result-1').innerHTML = resolve;
            document.getElementById('result-2').innerHTML = "";
            alert("success");
        }, (reject) => {
            document.getElementById('result-2').innerHTML = reject;
            document.getElementById('result-1').innerHTML = "";
            alert("fail");
        })
    }
</script>