<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
    <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h2 class="display-6">Practice 03 : Clicking on a particular radio button should display the related
                    technology name besides label : “You have selected : “.</h2>
                <hr>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="javascript:void()">
                            <div class="my-2">
                                <h2 class="mb-5">Please select your technology</h2>
                                <div class="ml-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="language" id="PHP" value="PHP">
                                    <label for="PHP" class="form-check-label">PHP</label>
                                </div>
                                <div class="ml-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="language" id="ASP.Net" value="ASP.Net">
                                    <label for="ASP.Net" class="form-check-label">ASP.Net</label>
                                </div>
                                <div class="ml-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="language" id="ASP" value="ASP">
                                    <label for="ASP" class="form-check-label">ASP</label>
                                </div>
                                <div class="ml-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="language" id="JSP" value="JSP">
                                    <label for="JSP" class="form-check-label">JSP</label>
                                </div>
                                <div class="ml-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="language" id="PERL" value="PERL">
                                    <label for="PERL" class="form-check-label">PERL</label>
                                </div>
                                <div class="ml-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="language" id="Cold_Fusion" value="Cold Fusion">
                                    <label for="Cold_Fusion" class="form-check-label">Cold Fusion</label>
                                </div>
                                <div class="ml-2 form-check-inline">
                                    <input type="radio" class="form-check-input" name="language" id="Others" value="Others">
                                    <label for="Others" class="form-check-label">Others</label>
                                </div>
                            </div>
                        </form>
                        <h5 class="pt-4">You have selected <span id="selected_language" class="text-secondary">______</span>
                            Language.</h5>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<?php include('../../../footer.php') ?>
<script>
    $(document).ready(function() {
        $("input[type='radio']").click(function() {
            var result = $("input[type='radio']:checked").val();
            $("#selected_language").text(result);
            alert("Selected Language " + result);
        })
    });
</script>