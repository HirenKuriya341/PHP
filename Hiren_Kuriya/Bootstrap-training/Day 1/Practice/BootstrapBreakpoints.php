<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Breakpoints</h1>
                    <h4 class="text-success">
                        <strong>Breakpoints are the building blocks of responsive design.</strong> Use them to control
                        when your
                        layout can be
                        adapted at a particular viewport or device size.
                    </h4>
                    <h4 class="text-dark">
                        <strong>Use media queries to architect your CSS by breakpoint.</strong> Media queries are a
                        feature of CSS
                        that allow you to
                        conditionally apply styles based on a set of browser and operating system parameters. We most
                        commonly use
                        min-width in our media queries.
                    </h4>
                    <h4 class="text-warning">
                        <strong>Mobile first, responsive design is the goal.</strong> Bootstrap’s CSS aims to apply the
                        bare minimum
                        of styles to
                        make a layout work at the smallest breakpoint, and then layers on styles to adjust that design
                        for larger
                        devices. This optimizes your CSS, improves rendering time, and provides a great experience for
                        your visitors
                    </h4>
                    <br>
                    <h3>Different Available Breakpoints</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4">Breakpoints</div>
                            <div class="col-xxl-4">Class</div>
                            <div class="col-xxl-4">Dimentions</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xxl-4">X-small</div>
                            <div class="col-xxl-4"><em>None</em></div>
                            <div class="col-xxl-4">
                                < 576px</div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-4">small</div>
                                <div class="col-xxl-4">sm</div>
                                <div class="col-xxl-4"> >= 576px</div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-4">Medium</div>
                                <div class="col-xxl-4">md</div>
                                <div class="col-xxl-4"> >= 768px</div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-4">Large</div>
                                <div class="col-xxl-4">lg</div>
                                <div class="col-xxl-4"> >= 992px</div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-4">Extra Large</div>
                                <div class="col-xxl-4">xl</div>
                                <div class="col-xxl-4"> >=1200px</div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-4">Extra Extra Large</div>
                                <div class="col-xxl-4">xxl</div>
                                <div class="col-xxl-4"> >=1400</div>
                            </div>
                        </div>
                        <br>
                        <h3>Media Queries</h3>
                        <div class="content">
                            <h5>Min-width</h5>
                            <p>@include media-breakpoint-up(sm) { ... } :- Change size "sm" accordingly</p>
                            <hr>
                            <h5>Max-width</h5>
                            <p>@include media-breakpoint-down(sm) { ... } :- Change size "sm" accordingly</p>
                            <hr>
                            <h5>Single Breakpoint</h5>
                            <p>@include media-breakpoint-only(sm) { ... } :- Change size "sm" accordingly</p>
                            <hr>
                            <h5>Between Breakpoints</h5>
                            <p>@media (min-width: 768px) and (max-width: 1199.98px) { ... } :- Change size accordingly
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>