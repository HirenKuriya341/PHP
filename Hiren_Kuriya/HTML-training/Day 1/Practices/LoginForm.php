<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
    <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <h1>Login Form</h1>
                <form action="">
                    <table>
                        <caption></caption>
                        <tr>
                            <th></th>
                        </tr>
                        <tr>
                            <td>
                                <label for="username">Enter Username</label>
                            </td>
                            <td></td>
                            <td>
                                <input type="text" name="username" placeholder="Username" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Enter Password</label>
                            </td>
                            <td></td>
                            <td>
                                <input type="password" name="password" id="password" placeholder="Password" required>
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