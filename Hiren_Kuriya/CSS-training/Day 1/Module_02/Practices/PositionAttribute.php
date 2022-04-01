<style>
    .static-div {
        position: static;
        border: 2px solid;
    }

    .relative-div {
        position: relative;
        border: 2px solid;
    }

    .fixed-div {
        position: fixed;
        padding: 10px;
        border: 2px solid;
        height: max-content;
        width: 200px;
        right: 50px;
        top: 50px;
        background-color: aquamarine;
    }

    .relative-division {
        position: relative;
        border: 2px solid red;
        height: 500px;
    }

    .absolute-div {
        position: absolute;
        border: 2px solid blue;
        right: 0;
        bottom: 0;
    }

    .sticky-div {
        position: sticky;
        border: 2px solid red;
        top: 0px;
        background-color: aquamarine;
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <h1>position properties static, relative, fixed and absolute.</h1>
                <div class="sticky-div">
                    <h3>This is sticky division.</h3>
                    <p>This division will stay stable when page will scroll.</p>
                </div>
                <div class="static-div">
                    <h3>This division is in Static position.</h3>
                    <p>An element with position: static; is not positioned in any special way.</p>
                </div>
                <br>
                <div class="relative-div">
                    <h3>This division is in relative position.</h3>
                    <p>An element with relative position positioned relative to its normal page.</p>
                </div>
                <br>
                <div class="fixed-div">
                    <h3>This division is in fixed position.</h3>
                    <p>An element with position: fixed; is positioned relative to the viewport, which means it
                        always
                        stays in the
                        same place even if the page is scrolled:</p>
                </div>
                <br>
                <div class="relative-division">
                    <h3>This is Relative division.</h3>
                    <div class="absolute-div">
                        <h3>This is absolute division.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>