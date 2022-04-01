<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
    <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Assignment 01 : Design a form for storing employee details. (EmployeeID,
                    Employee name, age, Gender, designation, salary, location, Email ID, Date of Joining and contact
                    number)</h1>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="javascript:void();">
                            <div class="form-floating mb-3">
                                <input type="text" id="emp_id" class="form-control" placeholder="Enter Employee ID">
                                <label for="emp_id">Employee ID</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="emp_name" class="form-control" placeholder="Enter Employee Name">
                                <label for="emp_name">Employee Name</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="emp_age" class="form-control" placeholder="Enter Employee Age">
                                <label for="emp_age">Employee Age</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="Male" value="Male" checked>
                                    <label class="form-check-label" for="Male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
                                    <label class="form-check-label" for="Female">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="Others" value="Others">
                                    <label class="form-check-label" for="Others">Others</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="emp_designation" class="form-control" placeholder="Enter Employee Designation">
                                <label for="emp_designation">Employee Designation</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="emp_salary" class="form-control" placeholder="Enter Employee Salary">
                                <label for="emp_salary">Employee Salary</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <select class="form-select mb-3" aria-label="Default select example" id="emp_city">
                                    <option selected>Select City</option>
                                    <option value="Rajkot">Rajkot</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Vadodara">Vadodara</option>
                                    <option value="Mahesana">Mahesana</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="emp_email" class="form-control" placeholder="Enter Employee E-mail">
                                <label for="emp_email">Employee E-mail</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="emp_joining" class="form-control" placeholder="Enter Employee Date of Joining">
                                <label for="emp_joining">Employee Date of Joining</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" id="emp_contact" class="form-control" placeholder="Enter Employee Contact Number">
                                <label for="emp_contact">Employee Contact Number</label>
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-5">
                                <button class="btn btn-success" onclick="validateEmployee()">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>

<script>
    function validateEmployee() {
        var emp_id = document.getElementById('emp_id').value;
        var emp_name = document.getElementById('emp_name').value;
        var emp_age = document.getElementById('emp_age').value;
        var emp_designation = document.getElementById('emp_designation').value;
        var emp_salary = document.getElementById('emp_salary').value;
        var emp_email = document.getElementById('emp_email').value;
        var emp_city = document.getElementById('emp_city').value;
        var emp_email = document.getElementById('emp_email').value;
        var emp_joining = document.getElementById('emp_joining').value;
        var emp_contact = document.getElementById('emp_contact').value;

        id = /^.{5}|.{5}.$/;
        age = /^[0-9]$/;
        salary = /^[0-9]$/;
        email = /^\w+@[a-z]+?\.[a-zA-Z]{2,3}$/;
        join_date = /^(?:(0[1-9]|1[012])[\-.](0[1-9]|[12][0-9]|3[01])[\-.][0-9]{4})$/;
        contact = /^[0-9]{10}$/;

        //Employee ID
        if (emp_id == "") {
            document.getElementsByTagName('span')[1].innerHTML = "This field must contain value"
        } else if (id.test(emp_id)) {
            document.getElementsByTagName('span')[1].innerHTML = "Valid"
        } else {
            document.getElementsByTagName('span')[1].innerHTML = "Id must be more than 5 digits"
        }
        // Employee Name
        if (emp_name == "") {
            document.getElementsByTagName('span')[2].innerHTML = "This field must contain value"
        } else {
            document.getElementsByTagName('span')[2].innerHTML = ""
        }
        //Employee Age 
        if (emp_age == "") {
            document.getElementsByTagName('span')[3].innerHTML = "This field must contain value"
        } else if (id.test(emp_age)) {
            document.getElementsByTagName('span')[3].innerHTML = "Valid"
        } else {
            document.getElementsByTagName('span')[3].innerHTML = "Age Must be Number"
        }
        // Employee Designation
        if (emp_designation == "") {
            document.getElementsByTagName('span')[4].innerHTML = "This field must contain value"
        } else {
            document.getElementsByTagName('span')[4].innerHTML = ""
        }
        // Employee Salary
        if (emp_salary == "") {
            document.getElementsByTagName('span')[5].innerHTML = "This field must contain value"
        } else if (salary.test(emp_salary)) {
            document.getElementsByTagName('span')[5].innerHTML = "Valid"
        } else {
            document.getElementsByTagName('span')[5].innerHTML = "Value Must be Number"
        }
        //Employee email
        if (emp_email == "") {
            document.getElementsByTagName('span')[6].innerHTML = "This field must contain value"
        } else if (email.test(emp_email)) {
            document.getElementsByTagName('span')[6].innerHTML = "Valid"
        } else {
            document.getElementsByTagName('span')[6].innerHTML = "Email must be valid"
        }
        //Employee Joining date
        if (emp_joining == "") {
            document.getElementsByTagName('span')[7].innerHTML = "This field must contain value"
        } else if (join_date.test(emp_joining)) {
            document.getElementsByTagName('span')[7].innerHTML = "Valid"
        } else {
            document.getElementsByTagName('span')[7].innerHTML = "Date must be valid"
        }
        //Employee Contact Number
        if (emp_contact == "") {
            document.getElementsByTagName('span')[8].innerHTML = "This field must contain value"
        } else if (contact.test(emp_contact)) {
            document.getElementsByTagName('span')[8].innerHTML = "Valid"
        } else {
            document.getElementsByTagName('span')[8].innerHTML = "Not Valid"
        }
    }
</script>