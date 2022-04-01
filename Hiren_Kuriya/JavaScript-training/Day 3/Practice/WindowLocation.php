<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../index.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="row">
                    <h1 class="display-4">Practice 01 : Use Window.location object to navigate on another page</h1>
                    <div class="col md-3"></div>
                    <div class="col md-6">
                        <div class="border my-5 p-3">
                            <h3 class="h3">Click the button to navigate on <em class="text-decoration-underline">Practice-02.php</em></h3>
                            <button class="btn btn-info" onclick="change_location()">Navigate</button>
                        </div>
                    </div>
                    <div class="col md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    function change_location() {
        window.location.href = "/Hiren_Kuriya/JavaScript-Training/Day 3/Practice/Practice-02.php";
    }
</script>