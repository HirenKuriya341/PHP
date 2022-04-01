<?php include('../../../header.php') ?>
<div class="container-fluid py-5">
    <div class="row">
        <?php include('../../sidebar.php') ?>
        <div class="col-lg-9">
            <div class="file-data">
                <div class="container">
                    <h1 class="display-1">Cards</h1>
                    <h6 class="display-6"> Bootstrap’s cards provide a flexible and extensible content container
                        with multiple
                        variants and options.</h6>
                    <hr><br>
                    <hr>
                    <div class="row">
                        <div class="card" style="width: 18rem;">
                            <img src="nature.jpg" alt="">
                            <div class="card-body">
                                <h1 class="h4">Card</h1>
                                <p>This is card body. Give width to the card tag as per requirement.</p>
                                <button class="btn btn-outline-primary">Go</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="card" style="width: 18rem;">
                            <img src="nature.jpg" alt="">
                            <div class="card-body">
                                <h1 class="h4">Card with list</h1>
                                <p>Card with list items.</p>
                            </div>
                            <ul class="list-unstyled list-group-flush">
                                <li class="list-group-item">List 1</li>
                                <li class="list-group-item">List 2</li>
                                <li class="list-group-item">List 3</li>
                                <li class="list-group-item">List 4</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Featured</h5>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Quote
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>A well-known quote, contained in a blockquote element.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('../../../footer.php') ?>