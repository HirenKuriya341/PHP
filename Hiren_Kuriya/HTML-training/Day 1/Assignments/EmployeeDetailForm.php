<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-sm-9">
            <div class="data">
                <h1>Employee Details</h1>
                <form for="employee-form">
                    <table>
                        <caption></caption>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-name">Enter Name of Employee : </label>
                            </td>
                            <td></td>
                            <td>
                                <input type="text" id="employee-name" name="employee-name" placeholder="Enter Name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-age">Enter Age of Employee : </label>
                            </td>
                            <td></td>
                            <td>
                                <input type="number" id="employee-age" name="employee-age" placeholder="Enter Age" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-gender">Select Gender of Employee : </label><br>
                            </td>
                            <td></td>
                            <td>
                                <input type="radio" id="employee-gender" name="employee-gender">
                                <label for="male">Male</label>
                                <input type="radio" id="employee-gender" name="employee-gender">
                                <label for="female">Female</label>
                                <input type="radio" id="employee-gender" name="employee-gender">
                                <label for="other">Other</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-designation">Enter Designation of Employee : </label>
                            </td>
                            <td></td>
                            <td>
                                <input type="text" name="employee-designation" id="employee-designation" placeholder="Enter Designation" required>
                                <datalist>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="Ms.">Ms.</option>
                                </datalist>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-salary">Enter Salary of Employee : </label>
                            </td>
                            <td></td>
                            <td>
                                <input type="number" id="employee-salary" name="employee-salary" placeholder="Enter Salary" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-location">Enter Location of Employee : </label>
                            </td>
                            <td></td>
                            <td>
                                <input type="text" name="employee-location" id="employee-location" placeholder="Enter Location" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-email">Enter E-mail ID of Employee: </label>
                            </td>
                            <td></td>
                            <td>
                                <input type="email" name="employee-email" id="employee-email" placeholder="Enter E-mail ID" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-joining-date">Enter Joining Date of Employee : </label>
                            </td>
                            <td></td>
                            <td>
                                <input type="date" name="employee-joining-date" id="employee-joining-date" placeholder="Enter Joining Date" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="employee-contact">Enter Contact No. of Employee : </label>
                            </td>
                            <td></td>
                            <td>
                                <input type="number" name="employee-contact" id="employee-contact" placeholder="Enter Contact No." maxlength="10" minlength="10" required>
                            </td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit">Submit</button>
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
</body>

</html>