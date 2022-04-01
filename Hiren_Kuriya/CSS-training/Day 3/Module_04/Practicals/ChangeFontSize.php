<style>
    .main {
        border: 3px solid red;
        background-color: yellow;
        padding: 15px;
    }

    .main h2 {
        font-size: 30px;
    }

    @media screen and (max-width: 900px) {
        .main h2 {
            font-size: 15px;
        }

        .main {
            border: 5px solid yellow;
            background-color: red;
        }
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid px-3">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <h1>Change Font size with Media Queries</h1>
                <div class="main">
                    <h2>Change the screen size to 600px to see the higher size fonts.</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>