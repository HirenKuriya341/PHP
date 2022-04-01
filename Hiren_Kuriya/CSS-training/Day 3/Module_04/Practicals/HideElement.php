<style>
    .main {
        border: 5px solid red;
        padding: 20px;
    }

    .hide {
        border: 3px dotted blue;
        background-color: blue;
        margin: 15px;
        color: white;
        padding: 10px;
    }

    @media screen and (max-width: 800px) {
        .hide {
            display: none;
        }
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid px-3">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <h1>Hide elements with Media queries</h1>
                <div class="main">
                    <h2>Resize the screen size to 800px for Hide below division tag.</h2>
                    <div class="hide">
                        <h3> This div tag will be hidden after screen size is 800px.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>