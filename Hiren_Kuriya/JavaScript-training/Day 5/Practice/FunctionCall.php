<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="display-6 mb-5">Practice 04 : Using Function call create employee object with field
                    Name, Address and Designation and pass it to function.</div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        Click the button to get the data
                        <button class="btn btn-info" id="emp">Check</button>
                        <div class="my-5">
                            <h3 id="data"></h3>
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
    const employee = {
        field_Name: "IT engineer",
        Address: "Rajkot",
        Designation: "Web developer",
        Emp_data: function() {
            return "Field Name : " + this.field_Name + "<br>Address :  " + this.Address + "<br> Designation : " + this.Designation;
        }
    }

    document.getElementById('emp').onclick = function() {
        document.getElementById('data').innerHTML = employee.Emp_data();
    }
</script>