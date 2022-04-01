<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h2 class="display-6">Practice 02 : Explain difference between var and let keyword using example.
                </h2>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-hover table-striped">
                            <caption></caption>
                            <tr>
                                <th>let keyword</th>
                                <th>var keyword</th>
                            </tr>
                            <tr>
                                <td>Variables defined with <em>let</em> cannot be redeclared but can be update.</td>
                                <td>Variables defined with <em>var</em> can be redeclared and update.</td>

                            </tr>
                            <tr>
                                <td>Variables defined with <em>let</em> must be Declared before use.</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Variables defined with <em>let</em> have Block Scope.</td>
                                <td>Variables declared with the <em>var</em> keyword have not any block scope.</td>
                            </tr>
                            <tr>
                                <td colspan="2">Variables declared inside a { } block can be accessed from outside
                                    the block.
                                </td>
                            </tr>
                        </table>

                        <hr>
                        <div class="row text-center">
                            <h4 class="h4">Check the functionality of VAR & LET</h4>
                            <div class="col-md-6">
                                <button class="btn btn-info w-75" onclick="Var()">check for Var keyword</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info w-75" onclick="Let()">check for Let keyword</button>
                            </div>
                        </div>

                        <div class="row">
                            <p class="text-center">Value of var a Outside : <span id="result1"></span></p>
                            <div class="col-md-6">
                                <p>Value of var a where a is declared : <span id="result2"></span></p>
                                <p>Value of var a where a is not declared : <span id="result3"></span></p>
                            </div>
                            <div class="col-md-6">
                                <p>Value of let a where a is declared :<span id="result4"></span></p>
                                <p>Value of let a where a is not declared :<span id="result5"></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    var a = 100;
    document.getElementById('result1').innerHTML = a;

    function varAgain() {
        a = 50;
        document.getElementById('result2').innerHTML = a;
    }

    function Var() {
        varAgain();
        document.getElementById('result3').innerHTML = a;
    }

    function letAgain() {
        let a = 2000;
        document.getElementById('result4').innerHTML = a;
    }

    function Let() {
        letAgain();
        document.getElementById('result5').innerHTML = a;
    }
</script>