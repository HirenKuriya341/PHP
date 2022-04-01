<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Login | Bootstrap 5</title>
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
            </div>
        </div>
    </nav>

    <!-- MAIN HEADER -->
    <header id="main-header" class="py-2 bg-primary text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><em class="fa fa-users"></em> Radixians</h1>
                </div>
            </div>
        </div>
    </header>

    <section id="action" class="py-4 mb-4 bg-light">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>

    <!-- LOGIN -->
    <section id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Admin Login</h4>
                        </div>
                        <div class="card-body">
                            <form action="index.php">
                                <div class="form-group mb-3">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="passwrod">Passwrod</label>
                                    <input type="password" class="form-control">
                                </div>
                                <input type="submit" class="btn btn-primary w-100" value="Login">
                            </form>
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

    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
</body>

</html>