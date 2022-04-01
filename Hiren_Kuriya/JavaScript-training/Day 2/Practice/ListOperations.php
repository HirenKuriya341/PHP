<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="row">
                    <h1 class="display-6">Practice 05 : Try some operation with list like push, pop, shifting, deleting element.</h1>
                    <hr>
                    <div class="col-md-3">
                        <h4>
                            <ol id="data"></ol>
                        </h4>
                    </div>
                    <div class="col-md-6 border border-dark rounded">
                        <form action="javascript:void()" class="text-center">
                            <h2 class="text-center" for="operation">Select Operation : </h2><br>
                            <div class="mb-2">
                                <input type="radio" class="form-control-check" id="push" name="operation" value="PUSH">
                                <label for="push">PUSH</label>
                            </div>
                            <div class="mb-2">
                                <input type="radio" class="form-control-check" id="pop" name="operation" value="POP">
                                <label for="pop">POP</label>
                            </div>
                            <div class="mb-2">
                                <input type="radio" class="form-control-check" id="shift" name="operation" value="SHIFT">
                                <label for="shift">SHIFT</label>
                            </div>
                            <div class="mb-2">
                                <input type="radio" class="form-control-check" id="delete" name="operation" value="DELETE">
                                <label for="delete">DELETE</label>
                            </div>
                            <div class="text-center mb-2">
                                <button type="submit" class="btn btn-info" onclick="array_operations()">Perform</button>
                            </div>
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
    var list_items = ["First", "second", "Third", "Fourth", "Fifth", "Sixth", "Seventh", "Eighth", "Ninth", "Tenth"];

    function display() {
        document.getElementById('data').innerHTML = "";
        for (i = 0; i < list_items.length; i++) {
            if (list_items[i] == undefined) {
                continue;
            }
            document.getElementById('data').innerHTML += "<li>" + list_items[i] + "</li>";
        }
    }

    function array_operations() {
        calc = document.getElementsByName('operation');

        for (var check of calc) {
            if (check.checked) {
                operation = check.value;
            }
        }

        switch (operation) {
            case "POP":
                alert(list_items.pop());
                display();
                break;
            case "PUSH":
                push_value = window.prompt("Enter Value to Push inside List");
                list_items.push(push_value);
                display();
                break;
            case "SHIFT":
                alert(list_items.shift());
                display();
                break;
            case "DELETE":
                delete_value = window.prompt("Enter Position to Delete List Item");
                if (delete_value > list_items.length) {
                    alert("Enter Valid Value")
                }
                delete list_items[delete_value];
                display();
                break;
        }
    }
</script>