<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mizuxe | Bootstrap 5</title>
    <link rel="shortcut icon" href="/Hiren_Kuriya/Images/Radixweb.png">

    <!-- CSS Links -->
    <link rel="stylesheet" href="/Hiren_Kuriya/CSS/BMW-style.css">
    <link rel="stylesheet" href="/Hiren_Kuriya/CSS/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Hiren_Kuriya/CSS/font-awesome/css/font-awesome.min.css">

    <!-- Script links -->
    <script src="/Hiren_Kuriya/JS/js/bootstrap.bundle.min.js"></script>
</head>

<body id="home">
    <nav class="navbar navbar-expand-md navbar-light bg-light py-4 sticky-top">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="/Hiren_Kuriya/Images/BMW/bmw_logo.png" alt="logo" width="50" height="50">
                <h3 class="d-inline align-middle">BMW</h3>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#showroom" class="nav-link">Visit Showroom</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- SHOWCASE -->
    <section class="py-5" id="showcase">
        <div class="primary-overlay text-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <h1 class="display-1 mt-5 py-5">Joy, Born Again.</h1>
                        <p class="lead">
                            Your new BMW is within reach. All you need is the perfect financial solution with
                            tailor-made finance options.
                        </p>
                        <a href="#" class="btn btn-outline-secondary btn-lg text-white"><em
                                class="fa fa-arrow-right"></em> Know More</a>
                    </div>
                    <div class="col-lg-6 py-5">
                        <img src="/Hiren_Kuriya/Images/BMW/car.jpg" width="55%" alt="car" class="img-fluid rounded d-none d-lg-block">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section id="newsletter" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Name">
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control form-control-lg" placeholder="Enter Email">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-lg w-100"><em class="fa fa-envelope-open"></em>
                        Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <!-- BOXES -->
    <section class="py-5" id="boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center border-primary">
                        <div class="card-body card-1">
                            <h3 class="text-primary">Be Better</h3>
                            <p class="text-dark">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis
                                reprehenderit totam quo ex neque veniam architecto nihil unde voluptas dignissimos
                                cupiditate asperiores optio natus delectus itaque molestiae id quaerat?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-white">
                        <div class="card-body card-2">
                            <h3 class="text-white">Be Smarter</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis
                                reprehenderit totam quo ex neque veniam architecto nihil unde voluptas dignissimos
                                cupiditate asperiores optio natus delectus itaque molestiae id quaerat?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center border-primary">
                        <div class="card-body card-3">
                            <h3 class="text-primary">Be Faster</h3>
                            <p class="text-dark">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis
                                reprehenderit totam quo ex neque veniam architecto nihil unde voluptas dignissimos
                                cupiditate asperiores optio natus delectus itaque molestiae id quaerat?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-white">
                        <div class="card-body card-4">
                            <h3 class="text-white">Be Stronger</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis
                                reprehenderit totam quo ex neque veniam architecto nihil unde voluptas dignissimos
                                cupiditate asperiores optio natus delectus itaque molestiae id quaerat?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT / WHY SECTION -->
    <section class="py-5 text-center bg-light info-header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h1 class="text-primary pb-3">
                            Why Our Car?
                        </h1>
                        <p class="lead pb-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur numquam cupiditate
                            amet inventore quaerat sapiente temporibus reprehenderit nisi, sunt molestias hic eos harum
                            nihil dignissimos eius doloribus consequatur? Temporibus, aperiam?
                        </p>
                    </div>

                    <!-- ACCORDION -->
                    <div id="accordion" role="tablist">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h5 class="mb-0">
                                    <div href="#collapse1" data-bs-toggle="collapse" data-bs-parent="#accordion">
                                        <em class="fa fa-arrow-circle-down"></em> Get Inspired
                                    </div>
                                </h5>
                            </div>
                        </div>

                        <div id="collapse1" class="collapse show">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam accusamus dicta
                                nihil sequi, repudiandae minima facere doloremque! Necessitatibus laboriosam in
                                libero quisquam sequi consequatur mollitia facere obcaecati nam laudantium molestiae
                                exercitationem quidem dignissimos eum harum, tempore qui dolorem soluta! Lorem ipsum
                                dolor, sit amet consectetur adipisicing elit. Nemo quisquam aliquam ipsa molestias
                                exercitationem repellat error explicabo est optio laborum.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading2">
                            <h5 class="mb-0">
                                <div href="#collapse2" data-bs-toggle="collapse" data-bs-parent="#accordion">
                                    <em class="fa fa-arrow-circle-down"></em> Get Knowledge
                                </div>
                            </h5>
                        </div>

                        <div id="collapse2" class="collapse show">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam accusamus dicta
                                nihil sequi, repudiandae minima facere doloremque! Necessitatibus laboriosam in
                                libero quisquam sequi consequatur mollitia facere obcaecati nam laudantium molestiae
                                exercitationem quidem dignissimos eum harum, tempore qui dolorem soluta! Lorem ipsum
                                dolor, sit amet consectetur adipisicing elit. Nemo quisquam aliquam ipsa molestias
                                exercitationem repellat error explicabo est optio laborum.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading3">
                            <h5 class="mb-0">
                                <div href="#collapse3" data-bs-toggle="collapse" data-bs-parent="#accordion">
                                    <em class="fa fa-arrow-circle-down"></em> Open Your Car
                                </div>
                            </h5>
                        </div>

                        <div id="collapse3" class="collapse show">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In ullam accusamus dicta
                                nihil sequi, repudiandae minima facere doloremque! Necessitatibus laboriosam in
                                libero quisquam sequi consequatur mollitia facere obcaecati nam laudantium molestiae
                                exercitationem quidem dignissimos eum harum, tempore qui dolorem soluta! Lorem ipsum
                                dolor, sit amet consectetur adipisicing elit. Nemo quisquam aliquam ipsa molestias
                                exercitationem repellat error explicabo est optio laborum.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SHOWROOM -->
    <section class="my-5 text-center" id="showroom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="info-header mb-5">
                        <h1 class="text-primary pb-3">
                            Visit Our Showrooms
                        </h1>
                        <p class="lead pb-3">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur numquam cupiditate
                            amet inventore quaerat sapiente temporibus reprehenderit nisi, sunt molestias hic eos harum
                            nihil dignissimos eius doloribus consequatur? Temporibus, aperiam?
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="/Hiren_Kuriya/Images/BMW/bmw_logo.png" alt="" class="img-fluid w-50 rounded-circle mb-3">
                            <h3>Showroom 1</h3>
                            <h5>India - Kolkata</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga beatae minima veniam
                                debitis iste voluptatem rem. Reiciendis voluptates dicta aperiam.
                            </p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-facebook"></em></a>
                                </div>
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-twitter"></em></a>
                                </div>
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-instagram"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="/Hiren_Kuriya/Images/BMW/bmw_logo.png" alt="" class="img-fluid w-50 rounded-circle mb-3">
                            <h3>Showroom 2</h3>
                            <h5>India - Mumbai</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga beatae minima veniam
                                debitis iste voluptatem rem. Reiciendis voluptates dicta aperiam.
                            </p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-facebook"></em></a>
                                </div>
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-twitter"></em></a>
                                </div>
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-instagram"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="/Hiren_Kuriya/Images/BMW/bmw_logo.png" alt="" class="img-fluid w-50 rounded-circle mb-3">
                            <h3>Showroom 3</h3>
                            <h5>India - Chennai</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga beatae minima veniam
                                debitis iste voluptatem rem. Reiciendis voluptates dicta aperiam.
                            </p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-facebook"></em></a>
                                </div>
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-twitter"></em></a>
                                </div>
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-instagram"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="/Hiren_Kuriya/Images/BMW/bmw_logo.png" alt="" class="img-fluid w-50 rounded-circle mb-3">
                            <h3>Showroom 4</h3>
                            <h5>India - Delhi</h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga beatae minima veniam
                                debitis iste voluptatem rem. Reiciendis voluptates dicta aperiam.
                            </p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-facebook"></em></a>
                                </div>
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-twitter"></em></a>
                                </div>
                                <div class="p-4">
                                    <a href="#"><em class="fa fa-instagram"></em></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h3>Get In Touch</h3>
                    <p class="lead">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id illo laborum, qui, molestiae
                        delectus cumque rerum ipsum reiciendis dolores, corporis architecto! Harum id nisi debitis,
                        officiis similique optio mollitia cupiditate!
                    </p>
                    <form>
                        <div class="form-group">
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text">
                                    <em class="fa fa-user"></em>
                                </span>
                                <input type="text" placeholder="Name" class="form-control">
                            </div>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text">
                                    <em class="fa fa-envelope"></em>
                                </span>
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text">
                                    <em class="fa fa-pencil"></em>
                                </span>
                                <textarea class="form-control" placeholder="Message" rows="5"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="submit" class="btn btn-primary btn-lg w-100">
                    </form>
                </div>
                <div class="col-lg-3 align-self-center">
                    <img src="/Hiren_Kuriya/Images/BMW/bmw_logo.png" alt="logo" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer" class="py-5 text-white bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 ms-auto">
                    <p class="lead">
                        Copyright &copy; 2022
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>