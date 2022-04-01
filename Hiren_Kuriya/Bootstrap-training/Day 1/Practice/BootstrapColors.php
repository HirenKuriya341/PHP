<style>
    .colors {
        height: 200px;
        width: 200px;
    }
</style>
<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Bootstrap Different Colors</h1>
                    <div class="theme-colors row">
                        <h2>Theme Colors</h2>
                        <div class="bg-primary colors col-md-3 m-1">
                            <p>Primary</p>
                        </div>
                        <div class="bg-danger colors col-md-3 m-1">
                            <p>Danger</p>
                        </div>
                        <div class="bg-dark colors col-md-3 m-1">
                            <p>Dark</p>
                        </div>
                        <div class="bg-success colors col-md-3 m-1">
                            <p>Success</p>
                        </div>
                        <div class="bg-warning colors col-md-3 m-1">
                            <p>Warning</p>
                        </div>
                        <div class="bg-info colors col-md-3 m-1">
                            <p>Info</p>
                        </div>
                        <div class="bg-secondary colors col-md-3 m-1">
                            <p>Secondary</p>
                        </div>
                        <div class="bg-light colors col-md-3 m-1">
                            <p style="color: black;">Light</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>