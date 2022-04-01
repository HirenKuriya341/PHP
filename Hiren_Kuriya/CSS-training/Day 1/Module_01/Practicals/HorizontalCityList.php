<style>
    .city-list {
        display: flex;
        list-style-type: none;
    }

    .city-list li {
        padding-left: 40px;
    }
</style>
<?php include('../../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="data">
                <div>
                    <h1>City List in Horizontal order using <u><strong>Display</strong></u> Property.</h1>
                    <ul class="city-list">
                        <li>Rajkot</li>
                        <li>Ahemdabad</li>
                        <li>Morbi</li>
                        <li>Jamnagar</li>
                        <li>Katch</li>
                        <li>Porbandar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../../footer.php') ?>