<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="display-6 mb-5">Practice 05 : Using Function Apply pass employee object to a function
                    defined in the
                    function.</div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        Click the button to get the data <br><br>
                        <button class="btn btn-info" id="emp1">Employee 1</button>
                        <button class="btn btn-info" id="emp2">Employee 2</button>
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
    var employee1, employee2, emp;
    employee1 = {
        field_name: "IT Engineer",
        address: "Rajkot",
        designation: "Web Developer"
    }
    employee2 = {
        field_name: "Computer Engineer",
        address: "Ahmedabad",
        designation: "Software Developer"
    }

    emp = {
        emp_data: function(name, company, date) {
            return "Field Name : " + this.field_name + "<br>Address :  " + this.address + "<br> Designation : " + this.designation + "<br> Name : " + name + "<br> Company : " + company;
        }
    }

    document.getElementById('emp1').onclick = function() {
        document.getElementById('data').innerHTML = emp.emp_data.apply(employee1, ["Hiren", "Radixweb Pvt. Ltd."]);
    }
    document.getElementById('emp2').onclick = function() {
        document.getElementById('data').innerHTML = emp.emp_data.apply(employee2, ["Prem", "Acty System"]);
    }
</script>