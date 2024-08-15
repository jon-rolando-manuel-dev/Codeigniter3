<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>Catribution</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>

        <!-- Custom styles for this template -->
        <link href="heroes.css" rel="stylesheet">
    </head>

    <body>
        <main>
            <nav class="py-2 bg-light border-bottom">
                <div class="container d-flex flex-wrap">
                    <ul class="nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link link-dark px-2">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('register'); ?>" class="nav-link link-dark px-2">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container col-xl-10 col-xxl-8 px-4 py-5">
                <div class="row align-items-center g-lg-5 py-5">
                    <div class="col-lg-7 text-center text-lg-start">
                        <h1 class="display-1 fw-bold lh-1 mb-3">
                            Catribution
                        </h1>

                        <!-- <p class="col-lg-10 fs-4">
                            Below is an example form built entirely with Bootstrap’s form controls. 
                            Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.
                        </p> -->
                    </div>
                    
                    <div class="col-md-10 mx-auto col-lg-5">
                        <form class="p-4 p-md-5 border rounded-3 bg-light">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <div class="checkbox mb-3">
                                <label>
                                <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary" type="submit">
                                Sign up
                            </button>
                            
                            <hr class="my-4">

                            <small class="text-muted">
                                By clicking Sign up, you agree to the terms of use.
                            </small>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>