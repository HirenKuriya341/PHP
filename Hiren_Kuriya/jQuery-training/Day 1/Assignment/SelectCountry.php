<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h2 class="display-6">Assignment 01</h2>
                <div class="lead">
                    <ul>
                        <li>Put a droplist with 5 country name from list object using jquery</li>
                        <li>(Eg. India, United Kingdom..). Default value should "Please select".</li>
                        <li>Bellow droplist all country name which are in the dropdown that should display with
                            Label : "Your
                            Selected Country : ".</li>
                        <li>By default all country name should display.</li>
                        <li>Only that country name should appear which are you select from dropdown. All other label
                            should be
                            disappear.</li>
                        <li>When I select "Please select", all countries name should get displayed.</li>
                    </ul>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <ul id="list" class="list-group-numbered lead"></ul>
                    </div>
                    <div class="col-md-6">
                        <form action="javascript:void()">
                            <div class="my-3">
                                <select name="country-list" id="country-list" class="form-select">
                                    <option value="Select" selected>Select Country</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <h3 id="selected"></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>
<script>
    $(document).ready(function() {
        var countryItem = ["India", "Russia", "Isrial", "France", "Japan", "Australia", "U.S.A",
            "Germany", "South Africa", "New zealand", "U.A.E."
        ];
        var data;
        // show list in select option and in list form
        $.each(countryItem, function(index, value) {
            $("select").append($("<option value='" + value + "'></option>").text(countryItem[index]));

            data = $("<li></li>").text(countryItem[index]);
            $("#list").append(data);
        });
        // show selected list on click and show again all list when select country is seleceted
        $("#country-list").click(function() {
            if ($('#country-list').val() == "Select") {
                $("#list").show();
                nen.hide();
            } else {
                $("#list").hide();
                nen = $("#selected").html("your selected country <span class='text-primary'>" + $(this).val() + "</span>");
                nen.show();
            }
        });
    });
</script>