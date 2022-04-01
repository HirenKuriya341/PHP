<?php include('header.php'); ?>

<!-- carousel -->
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo $main_link ?>/Images/header-1.webp" class="d-block w-100" alt="header-1">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $main_link ?>/Images/header-2.webp" class="d-block w-100" alt=header-2>
        </div>
        <div class="carousel-item">
            <img src="<?php echo $main_link ?>/Images/header-3.jpg" class="d-block w-100" alt="header-3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- languages -->
<div class="container my-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card p-1 border border-light shadow">
                <img src="<?php echo $main_link ?>/Images/HTML.png" class="card-img-top" height="250px" width="auto" alt="html">
                <div class="card-body">
                    <h3 class="card-title">HTML</h3>
                    <p class="card-text text-justify lh-sm">HTML stands for HyperText Markup Language. It is used to
                        design web pages using a markup language. HTML is the combination of Hypertext and Markup
                        language. Hypertext defines the link between the web pages. </p>
                    <a href="<?php echo $main_link ?>/HTML-training/html.php" class="btn btn-info">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-1 border border-light shadow">
                <img src="<?php echo $main_link ?>/Images/CSS.png" class="card-img-top" height="250px" width="auto" alt="html">
                <div class="card-body">
                    <h3 class="card-title">CSS</h3>
                    <p class="card-text text-justify lh-sm">CSS (Cascading Style Sheets) is a stylesheet language used to design the webpage to make it attractive. The reason of using CSS is to simplify the process of making web pages presentable. CSS allows you to apply styles to web pages.</p>
                    <a href="<?php echo $main_link ?>/CSS-training/css.php" class="btn btn-info">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-1 border border-light shadow">
                <img src="<?php echo $main_link ?>/Images/Bootstrap-icons.png" class="card-img-top" height="250px" width="auto" alt="html">
                <div class="card-body">
                    <h3 class="card-title">Bootstrap</h3>
                    <p class="card-text text-justify lh-sm"> Bootstrap is a free and open-source tool collection for creating responsive websites and web applications. It is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.</p>
                    <a href="<?php echo $main_link ?>/Bootstrap-training/bootstrap.php" class="btn btn-info">Visit</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-4">
            <div class="card p-1 border border-light shadow">
                <img src="<?php echo $main_link ?>/Images/JavaScript.png" class="card-img-top" height="250px" width="auto" alt="html">
                <div class="card-body">
                    <h3 class="card-title">JavaScript</h3>
                    <p class="card-text text-justify lh-sm"> Bootstrap is a free and open-source tool collection for creating responsive websites and web applications. It is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.</p>
                    <a href="<?php echo $main_link ?>/JavaScript-training/javascript.php" class="btn btn-info">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-1 border border-light shadow">
                <img src="<?php echo $main_link ?>/Images/jquery.png" class="card-img-top" height="250px" width="auto" alt="html">
                <div class="card-body">
                    <h3 class="card-title">jQuery</h3>
                    <p class="card-text text-justify lh-sm"> Bootstrap is a free and open-source tool collection for creating responsive websites and web applications. It is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.</p>
                    <a href="<?php echo $main_link ?>/jQuery-training/jquery.php" class="btn btn-info">Visit</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card p-1 border border-light shadow">
                <img src="<?php echo $main_link ?>/Images/php.png" class="card-img-top" height="250px" width="auto" alt="html">
                <div class="card-body">
                    <h3 class="card-title">PHP</h3>
                    <p class="card-text text-justify lh-sm"> PHP is an acronym for "PHP: Hypertext Preprocessor". PHP files can contain text, HTML, CSS, JavaScript, and PHP code. PHP code & scripts is executed on the server, and the result is returned to the browser as plain HTML.</p>
                    <a href="<?php echo $main_link ?>/jQuery-training/php.php" class="btn btn-info disabled">Visit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>