<style>
    .container1 {
        border: 2px solid blue;
        margin: 10px;
        padding: 20px;
        height: 370px;
        color: black;
        font-size: 30px;
        font-weight: 600;
    }

    .left-div {
        float: left;
        width: 30%;
        height: 300px;
        border: 2px solid red;
        padding: 100px 50px;
        margin: 10px;
    }

    .left-div:hover {
        color: white;
        background-color: red;
    }

    .center-div {
        float: left;
        width: 30%;
        height: 300px;
        border: 2px solid green;
        padding: 100px 50px;
        margin: 10px;
    }

    .center-div:hover {
        color: white;
        background-color: green;
    }

    .right-div {
        float: left;
        width: 30%;
        height: 300px;
        border: 2px solid blue;
        padding: 100px 50px;
        margin: 10px;
    }

    .right-div:hover {
        color: white;
        background-color: blue;
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <h1>Parent div should contain 3 div inside. Div should be arranged in following manner.</h1>
                <div class="container1">
                    <div class="left-div">
                        Left Division
                    </div>
                    <div class="center-div">
                        Center Division
                    </div>
                    <div class="right-div">
                        Right Division
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>