<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Categories | Bootstrap 5</title>
    <link rel="shortcut icon" href="/Hiren_Kuriya/Images/Radixweb.png">

    <!-- CSS Links -->
    <link rel="stylesheet" href="/Hiren_Kuriya/CSS/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Hiren_Kuriya/CSS/font-awesome/css/font-awesome.min.css">

    <!-- Script links -->
    <script src="/Hiren_Kuriya/JS/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark py-0" aria-label="">
        <div class="container">
            <a href="index.php" class="navbar-brand">Radix</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="index.php" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="posts.php" class="nav-link">Posts</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="categories.php" class="nav-link active">Categories</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="users.php" class="nav-link">Users</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown mr-3">
                        <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle">
                            <em class="fa fa-user"></em> Welcome Hiren
                        </a>
                        <div class="dropdown-menu">
                            <a href="profile.php" class="dropdown-item">
                                <em class="fa fa-user-circle"></em> Profile
                            </a>
                            <a href="settings.php" class="dropdown-item">
                                <em class="fa fa-gear"></em> Settings
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">
                            <em class="fa fa-user-times"></em> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MAIN HEADER -->
    <header id="main-header" class="py-2 bg-success text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><em class="fa fa-folder"></em> Categories</h1>
                </div>
            </div>
        </div>
    </header>

    <section id="action" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ms-auto">
                    <div class="input-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-success">Search</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATEGORIES -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Categories</h4>
                        </div>
                        <table class="table table-striped">
                            <caption></caption>
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Date Posted</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Web Development</td>
                                    <td>July 12, 2020</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Tech Gadget</td>
                                    <td>July 14, 2020</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Business</td>
                                    <td>July 16, 2020</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Web Development</td>
                                    <td>July 20, 2020</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Health & Wellness</td>
                                    <td>July 20, 2020</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Tech Gadget</td>
                                    <td>July 22 , 2020</td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="ml-4" aria-label="">
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="main-footer" class="bg-dark text-light mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">Copyright &copy; 2022 RadixWeb</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>