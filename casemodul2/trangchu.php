<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Royal shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">





    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
<!--    <script src="js/js.js"></script>-->
    <meta name="theme-color" content="#7952b3">


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


</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img width="50px" src="logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">SẢN PHẨM MỚI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">BÁN CHẠY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">KHUYẾN MÃI</a>
                </li>
           
            </ul>
            <form action="#" class="d-flex" method="get">
                <input type="text" class="form-control me-2" id="search-name" placeholder="Search" name="search-name">
<!--                <button class="btn btn-outline-success ml-2" type="submit" >Search</button>-->
<!--                <button style="padding-right: 200px"><i style="" class="fas fa-search "></i></button>-->
                <button style="margin-right: 200px" class="btn btn-outline-success ml-2" type="submit" ><i style="" class="fas fa-search "></i></button>

            </form>
            <form action="#" class="d-flex" method="get">

                <a class="btn btn-outline-success ml-5" href="app/View/frontend/signup/signup.php?page=signup-user">signup</a>
                <a class="btn btn-outline-success ml-5" href="app/View/frontend/login/login.php?page=login">login</a>
            </form>

        </div>
    </div>
</nav>

<main>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="height: 350px" src="app/View/frontend/index/image/images.jpeg" class="d-block w-100" alt="...">
            </div>
            <div  class="carousel-item">
                <img style="height: 350px" src="app/View/frontend/index/image/hn.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img style="height: 350px" src="app/View/frontend/index/image/nh.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php if (isset($products)) {
                foreach ($products as $product) :?>
<!--                <tr>-->
                <div class="col">
                    <div class="card shadow-sm" style="height: 500px">
<!--                        <svg class="bd-placeholder-img card-img-top"   >-->
<!--                            <rect width="100%" height="100%" fill="#55595c"/>-->
                            <img style="height: 350px" src="<?php echo $product->getImage() ?>" alt="">
                        </svg>
<!--                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="" alt="">-->

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
<!--                </tr>-->
                <?php endforeach;
                } ?>
            </div>
        </div>
    </div>

</main>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>

    </div>
</footer>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
<script src="js/js.js"></script>
</html>
