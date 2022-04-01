<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../index.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 02 : Use Window.history object to move to previous url in the history list</h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="border my-5 p-3">
                            <h3 class="h3">Click the button to Go Back Page.
                            </h3>
                            <button class="btn btn-info" onclick="change_location()">History</button>
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
    function change_location() {
        window.history.back();
    }
</script>