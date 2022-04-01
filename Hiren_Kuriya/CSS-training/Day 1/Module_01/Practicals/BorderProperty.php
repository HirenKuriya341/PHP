<style>
    .para1 {
        border: 10px solid red;
        margin: 20px;
        padding: 20px;
    }

    .para2 {
        border: 10px dotted black;
        margin: 20px;
        padding: 20px;
    }

    .para3 {
        border: 10px dashed blue;
        margin: 20px;
        padding: 20px;
    }

    .para4 {
        border: 10px double pink;
        margin: 20px;
        padding: 20px;
    }

    .para5 {
        border: 10px ridge violet;
        margin: 20px;
        padding: 20px;
    }

    .para6 {
        border: 10px groove aqua;
        margin: 20px;
        padding: 20px;
    }

    .para7 {
        border: 10px inset yellow;
        margin: 20px;
        padding: 20px;
    }

    .para8 {
        border: 10px outset green;
        margin: 20px;
        padding: 20px;
    }

    .para9 {
        border-top: 10px solid red;
        border-right: 10px dotted black;
        border-bottom: 10px dashed blue;
        border-left: 10px double pink;
        margin: 20px;
        padding: 20px;
    }

    .para10 {
        border: none;
        margin: 20px;
        padding: 20px;
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div>
                    <h1>Border the Paragraph</h1>
                    <p class="para1">
                        This is paragraph with <strong>Solid</strong> border. <br>
                    </p>
                    <p class="para2">
                        This is paragraph with <strong>Dotted</strong> border. <br>
                    </p>
                    <p class="para3">
                        This is paragraph with <strong>Dashed</strong> border. <br>
                    </p>
                    <p class="para4">
                        This is paragraph with <strong>Double</strong> border. <br>
                    </p>
                    <p class="para5">
                        This is paragraph with <strong>Ridge</strong> border. <br>
                    </p>
                    <p class="para6">
                        This is paragraph with <strong>Groove</strong> border. <br>
                    </p>
                    <p class="para7">
                        This is paragraph with <strong>Inset</strong> border. <br>
                    </p>
                    <p class="para8">
                        This is paragraph with <strong>Outset</strong> border. <br>
                    </p>
                    <p class="para9">
                        This is paragraph with <strong>Mix</strong> border. <br>
                    </p>
                    <p class="para10">
                        This is paragraph with <strong>None</strong> border. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>