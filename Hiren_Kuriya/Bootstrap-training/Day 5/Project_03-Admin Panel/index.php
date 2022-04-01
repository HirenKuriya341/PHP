<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Dashboard | Bootstrap 5</title>
    <link rel="shortcut icon" href="/Hiren_Kuriya/Images/Radixweb.png">

    <!-- CSS Links -->
    <link rel="stylesheet" href="/Hiren_Kuriya/CSS/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Hiren_Kuriya/CSS/font-awesome/css/font-awesome.min.css">

    <!-- Script links -->
    <script src="/Hiren_Kuriya/JS/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark py-0">
        <div class="container">
            <a href="index.php" class="navbar-brand">Radix</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="index.php" class="nav-link active">Dashboard</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="posts.php" class="nav-link">Posts</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="categories.php" class="nav-link">Categories</a>
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
    <header id="main-header" class="py-2 bg-primary text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><em class="fa fa-gear"></em> Dashboard</h1>
                </div>
            </div>
        </div>
    </header>

    <section id="action" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addPostModal">
                        <em class="fa fa-plus"></em> Add Post
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                        <em class="fa fa-plus"></em> Add Category
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <em class="fa fa-plus"></em> Add User
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- POSTS -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Posts</h4>
                        </div>
                        <table class="table table-striped">
                            <caption></caption>
                            <thead class="thead-inverse">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date Posted</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Post One</td>
                                    <td>Web Development</td>
                                    <td>July 12, 2020</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <em class="fa fa-angle-double-right"></em> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Post Two</td>
                                    <td>Tech Gadget</td>
                                    <td>July 14, 2020</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <em class="fa fa-angle-double-right"></em> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Post Three</td>
                                    <td>Business</td>
                                    <td>July 16, 2020</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <em class="fa fa-angle-double-right"></em> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Post Four</td>
                                    <td>Web Development</td>
                                    <td>July 20, 2020</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <em class="fa fa-angle-double-right"></em> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Post Five</td>
                                    <td>Health & Wellness</td>
                                    <td>July 20, 2020</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <em class="fa fa-angle-double-right"></em> Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Post Six</td>
                                    <td>Tech Gadget</td>
                                    <td>July 22 , 2020</td>
                                    <td>
                                        <a href="details.php" class="btn btn-secondary">
                                            <em class="fa fa-angle-double-right"></em> Details
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center bg-primary text-light mb-3">
                        <div class="card-body">
                            <h3>Posts</h3>
                            <h1 class="display-3">
                                <em class="fa fa-pencil"></em> 6
                            </h1>
                            <a href="posts.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card text-center bg-success text-light mb-3">
                        <div class="card-body">
                            <h3>Categories</h3>
                            <h1 class="display-3">
                                <em class="fa fa-folder-open"></em> 4
                            </h1>
                            <a href="categories.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>
                    </div>
                    <div class="card text-center bg-warning text-light mb-3">
                        <div class="card-body">
                            <h3>Users</h3>
                            <h1 class="display-3">
                                <em class="fa fa-users"></em> 2
                            </h1>
                            <a href="users.php" class="btn btn-outline-light btn-sm">View</a>
                        </div>
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

    <!-- ADD POST MODAL -->
    <div class="modal fade" id="addPostModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary">

                    <h5 class="modal-title" id="staticBackdropLabel">Add Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="category">Category</label>
                            <select class="form-control">
                                <option value="Web Development">Web Development</option>
                                <option value="Tech Gadget">Tech Gadget</option>
                                <option value="Business">Business</option>
                                <option value="Health & Wellness">Health & Wellness</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="file">Image Upload</label>
                            <input type="file" class="form-control">
                            <sma class="form-text text-muted">Max Size 3 MB</sma>
                        </div>
                        <div class="form-group mb-3">
                            <label for="body">Body</label>
                            <textarea name="editor1" class="form-control"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD CATEGORY MODAL -->
    <div class="modal fade" id="addCategoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-success">

                    <h5 class="modal-title" id="staticBackdropLabel">Add Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-success">Add</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ADD USER MODAL -->
    <div class="modal fade" id="addUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" placeholder="Name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" placeholder="example@email.com" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Passwrod</label>
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="confirm-passwrod">Confirm Password</label>
                            <input type="password" placeholder="Confirm Password" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-warning">Add</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>