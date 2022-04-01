<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 02 : There is one Hide/show the text inside the #helpText span
                    element when the user`s mouse passes over the text.</h1>
                <hr>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="my-2">
                            <h5><em>Click</em> Events</h5>
                            <div class="button btn btn-outline-success" id="click-show">Click to Show</div>
                            <div class="button btn btn-outline-danger" id="click-hide">Click to Hide</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="data p-2 border border-warning">
                            <p class="lead">Mouse hover to <strong>Hide</strong> me</p>
                            <p class="lead">Mouse out to <strong>Show</strong> me</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="my-2">
                            <h5><em>mouseenter</em> & <em>mouseleave</em> Events</h5>
                            <div class="button btn btn-outline-success" id="hover-show">Hover to Show</div>
                            <div class="button btn btn-outline-danger" id="hover-hide">Hover to Hide</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(".data").mouseenter(function() {
            $(".data").hide();
        });
        $(".data").mouseleave(function() {
            $(".data").show();
        });
        $("#hover-show").mouseenter(function() {
            $(".data").show();
        });
        $("#hover-hide").mouseenter(function() {
            $(".data").hide();
        });
        $("#click-show").click(function() {
            $(".data").show();
        });
        $("#click-hide").click(function() {
            $(".data").hide();
        });
    });
</script>