<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Profile | Bootstrap 5</title>
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
                        <a href="index.php" class="nav-link">Dashboard</a>
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
                    <h1><em class="fa fa-user"></em> Edit Profile</h1>
                </div>
            </div>
        </div>
    </header>

    <section id="profile" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 ms-auto">
                    <a href="index.php" class="btn btn-light w-100">
                        <em class="fa fa-arrow-left"></em> Back to Dashboard
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#updatePassword">
                        <em class="fa fa-lock"></em> Change Password
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROFILE -->
    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4><em class="fa fa-user"></em> Edit Profile</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" value="Hiren Kuriya" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">E-mail</label>
                                    <input type="text" value="hirenkuriya@gmail.com" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="bio">Bio</label>
                                    <textarea name="editor1" class="form-control">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, aut voluptate quis ipsa labore harum, nobis sunt accusamus fuga assumenda, non commodi omnis voluptatibus expedita? Culpa omnis et placeat est provident. Incidunt aspernatur nihil recusandae? Cumque quis mollitia reprehenderit sint, illum corrupti voluptas tenetur, odit iusto ex velit eius. In.
                                    </textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Your Avatar</h3>
                    <img src="/Hiren_Kuriya/Images/Admin_Panel-images/Avatar.png" alt="Avatar" class="d-block img-fluid rounded-3 mb-5">
                    <button class="btn btn-outline-warning w-100 mb-5">Edit Image</button>
                    <button class="btn btn-outline-danger w-100 mb-5">Delete Image</button>
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

    <!-- ADD UPDATE PASSWORD MODAL -->
    <div class="modal fade" id="updatePassword" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
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
                    <button type="button" class="btn btn-outline-success">Update Password</button>
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