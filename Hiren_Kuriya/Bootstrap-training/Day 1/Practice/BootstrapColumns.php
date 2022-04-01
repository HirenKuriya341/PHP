<style>
    .col-css {
        background-color: antiquewhite;
        padding: 10px;
        text-align: center;
        border: 1px solid gray;
    }

    .row-css {
        background-color: silver;
        height: 200px;
        margin: 10px;
    }
</style>
<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
    <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Columns</h1>
                    <h6 class="display-6">Learn how to modify columns with a handful of options for alignment,
                        ordering, and
                        offsetting thanks to our flexbox grid system. Plus, see how to use column classes to manage
                        widths of
                        non-grid elements.</h6>
                    <hr>
                    <hr><br>
                    <h4>Alignment</h4>
                    <h5>Vertical Alignment</h5>
                    <h6><em>class => <strong>align-items-start</strong></em> align column in vertical manner on
                        top(start)</h6>
                    <div class="container">
                        <div class="row row-css align-items-start">
                            <div class="col col-css">
                                1
                            </div>
                            <div class="col col-css">
                                2
                            </div>
                            <div class="col col-css">
                                3
                            </div>
                        </div>
                    </div>
                    <h6><em>class => <strong><u>align-items-center</u></strong></em> align column in vertical manner
                        on center
                    </h6>
                    <div class="container">
                        <div class="row row-css align-items-center">
                            <div class="col col-css">
                                1
                            </div>
                            <div class="col col-css">
                                2
                            </div>
                            <div class="col col-css">
                                3
                            </div>
                        </div>
                    </div>
                    <h6><em>class => <strong><u>align-items-end</u></strong></em> align column in vertical manner on
                        bottom(end)
                    </h6>
                    <div class="container">
                        <div class="row row-css align-items-end">
                            <div class="col col-css">
                                1
                            </div>
                            <div class="col col-css">
                                2
                            </div>
                            <div class="col col-css">
                                3
                            </div>
                        </div>
                    </div>
                    <hr>
                    <hr><br>
                    <h4>Mix</h4>
                    <div class="container">
                        <div class="row row-css">
                            <div class="col col-css align-self-start">
                                1 - align-self-start
                            </div>
                            <div class="col col-css align-self-center">
                                2 - align-self-center
                            </div>
                            <div class="col col-css align-self-end">
                                3 - align-self-end
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>