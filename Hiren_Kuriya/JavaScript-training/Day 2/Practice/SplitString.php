<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 02 : Write a JavaScript function to split a string and convert it
                    into an array
                    of words</h1>
                <hr>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form action="javascript:void()">
                            <div class="mb-3 form-floating">
                                <input type="text" placeholder="Enter String" class="form-control" name="string_value" id="string_value" required>
                                <label for="string_value">Split The String in array</label>
                            </div>
                            <button type="submit" class="btn btn-primary" id="button" onclick="split_string()">Split
                                string</button>
                        </form>
                        <ol id="output"></ol>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>

<script type="text/javascript">
    function split_string() {
        var string_value, splited_string;
        string_value = document.getElementById('string_value').value;
        splited_string = string_value.split(" ");
        for (i in splited_string) {
            document.getElementById('output').innerHTML += "<li>" + splited_string[i] + "</li>";
        }
        document.getElementById('button').disabled = true;
    }
</script>