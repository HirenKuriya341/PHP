<style>
    .breakpoints {
        background-color: green;
        border: 5px solid green;
        color: white;
        padding: 10px;
    }

    @media screen and (max-width: 1200px) {
        .breakpoints {
            background-color: orange;
            border: 5px solid green;
            padding: 10px;
        }
    }

    @media screen and (max-width: 900px) {
        .breakpoints {
            background-color: yellow;
            border: 5px solid orange;
            padding: 10px;
            color: black;
        }
    }

    @media screen and (max-width: 600px) {
        .breakpoints {
            background-color: red;
            border: 5px solid yellow;
            padding: 10px;
        }
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid px-3">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <div class="header">
                    <h1>Media queries with breakpoint</h1>
                </div>
                <div class="breakpoints">
                    <h2>Resize the screen it will change the CSS of this division tag.</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>