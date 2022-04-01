<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-6">Practice 01 : Create one paragraph, add some dummy text and apply blue
                    background color
                    using jquery
                </h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 my-5">
                        <p class="para text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adicta?</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script type="text/javascript">
    $(document).ready(function() {
        $("p.para").css({
            "background-color": "blue",
            "font-size": 30
        }).text("Hello world!");
    });
</script>