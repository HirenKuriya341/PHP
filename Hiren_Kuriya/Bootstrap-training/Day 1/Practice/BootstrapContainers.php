<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <h1 class="display-1">Containers</h1>
                <h6 class="display-6">
                    Containers are a fundamental building block of Bootstrap that contain, pad, and align your
                    content within a
                    given device or viewport.
                </h6>
                <br>
                <hr>
                <hr>
                <div class="container">
                    <h5 class="text-dark">This content is written in <em class="text-info">.container </em>class.
                    </h5>
                    <h5>.container, which sets a max-width at each responsive breakpoint</h5>
                    <h5>Our default .container class is a responsive, fixed-width container, meaning its max-width
                        changes at each
                        breakpoint.</h5>
                </div>
                <br>
                <hr>
                <div class="container-fluid">
                    <h5 class="text-dark">This content is written in <em class="text-info">.container-fluid
                        </em>class.</h5>
                    <h5>.container-fluid, which is width: 100% at all breakpoints</h5>
                    <h5>Use .container-fluid for a full width container, spanning the entire width of the viewport.
                    </h5>
                </div>
                <br>
                <hr>
                <div class="container-sm">
                    <h5 class="text-dark">We can use <em class="text-success">sm, md, lg, xl and xxl</em> in
                        container also.</h5>
                    <h5>.container-{breakpoint}, which is width: 100% until the specified breakpoint</h5>
                    <h5>This content is written in <em class="text-info">.container-sm </em>class.It will use 100%
                        width until
                        576px.
                    </h5>
                    <h5>
                        <div class="container-sm">100% wide until small breakpoint</div>
                        <div class="container-md">100% wide until medium breakpoint</div>
                        <div class="container-lg">100% wide until large breakpoint</div>
                        <div class="container-xl">100% wide until extra large breakpoint</div>
                        <div class="container-xxl">100% wide until extra extra large breakpoint</div>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>