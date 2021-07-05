<?php
include_once 'products/DataProduct.php';
include_once 'products/Product.php';
$result = DataProduct::loadData();
if (isset($_REQUEST['page'])){
    if($_REQUEST['page'] == 'delete'){
        $id = $_REQUEST['id'];
        array_splice($result,$id,1);
        DataProduct::saveData($result);
        header("location:home.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../kkk/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../kkk/css/animate.css">

    <link rel="stylesheet" href="../kkk/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../kkk/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../kkk/css/magnific-popup.css">

    <link rel="stylesheet" href="../kkk/css/aos.css">

    <link rel="stylesheet" href="../kkk/css/ionicons.min.css">

    <link rel="stylesheet" href="../kkk/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../kkk/css/jquery.timepicker.css">


    <link rel="stylesheet" href="../kkk/css/flaticon.css">
    <link rel="stylesheet" href="../kkk/css/icomoon.css">
    <link rel="stylesheet" href="../kkk/css/style.css">
</head>
<body class="goto-here">
<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                        <span class="text">+ 1235 2355 98</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                        <span class="text">youremail@email.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">Vegefoods</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="../kkk/html/index.html" class="nav-link">Home</a></li>
                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="shop.php">Shop</a>
                        <a class="dropdown-item" href="cart.php">Cart</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap hero-bread" style="background-image: url('https://data2.1freewallpapers.com/detail/berries-fruits-cutting.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Cart</span></p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>

<!--<section class="ftco-section ftco-cart">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 ftco-animate">-->
<!--                    <div class="cart-list">-->
<!--                        <table class="table">-->
<!--                            <thead class="thead-primary">-->
<!--                            <tr class="text-center">-->
<!--                                <th>&nbsp;</th>-->
<!--                                <th>&nbsp;</th>-->
<!--                                <th>Product name</th>-->
<!--                                <th>Price</th>-->
<!--                                <th>Quantity</th>-->
<!--                                <th>Total</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr class="text-center">-->
<!--                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>-->
<!---->
<!--                                <td class="image-prod">-->
<!--                                    <div class="img" style="background-image:url(images/product-3.jpg);"></div>-->
<!--                                </td>-->
<!---->
<!--                                <td class="product-name">-->
<!--                                    <h3>Bell Pepper</h3>-->
<!--                                    <p>Far far away, behind the word mountains, far from the countries</p>-->
<!--                                </td>-->
<!---->
<!--                                <td class="price">$4.90</td>-->
<!---->
<!--                                <td class="quantity">-->
<!--                                    <div class="input-group mb-3">-->
<!--                                        <input type="text" name="quantity" class="quantity form-control input-number"-->
<!--                                               value="1" min="1" max="100">-->
<!--                                    </div>-->
<!--                                </td>-->
<!---->
<!--                                <td class="total">$4.90</td>-->
<!--                            </tr>&lt;!&ndash; END TR&ndash;&gt;-->
<!---->
<!--                            <tr class="text-center">-->
<!--                                <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>-->
<!---->
<!--                                <td class="image-prod">-->
<!--                                    <div class="img" style="background-image:url(images/product-4.jpg);"></div>-->
<!--                                </td>-->
<!---->
<!--                                <td class="product-name">-->
<!--                                    <h3>Bell Pepper</h3>-->
<!--                                    <p>Far far away, behind the word mountains, far from the countries</p>-->
<!--                                </td>-->
<!---->
<!--                                <td class="price">$15.70</td>-->
<!---->
<!--                                <td class="quantity">-->
<!--                                    <div class="input-group mb-3">-->
<!--                                        <input type="text" name="quantity" class="quantity form-control input-number"-->
<!--                                               value="1" min="1" max="100">-->
<!--                                    </div>-->
<!--                                </td>-->
<!---->
<!--                                <td class="total">$15.70</td>-->
<!--                            </tr>&lt;!&ndash; END TR&ndash;&gt;-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->


<section class="ftco-section">
    <div class="container">

        <div class="row">
            <?php foreach ($result as $key=>$product): ?>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product" style="height: 300px">
                        <a href="#" class="img-prod"><img style="width: 100%" src="<?php echo $product->getImage() ?>" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Strawberry</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#F96D00"/>
        </svg>
    </div>


    <script src="../kkk/js/jquery.min.js"></script>
    <script src="../kkk/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../kkk/js/popper.min.js"></script>
    <script src="../kkk/js/bootstrap.min.js"></script>
    <script src="../kkk/js/jquery.easing.1.3.js"></script>
    <script src="../kkk/js/jquery.waypoints.min.js"></script>
    <script src="../kkk/js/jquery.stellar.min.js"></script>
    <script src="../kkk/js/owl.carousel.min.js"></script>
    <script src="../kkk/js/jquery.magnific-popup.min.js"></script>
    <script src="../kkk/js/aos.js"></script>
    <script src="../kkk/js/jquery.animateNumber.min.js"></script>
    <script src="../kkk/js/bootstrap-datepicker.js"></script>
    <script src="../kkk/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../kkk/js/google-map.js"></script>
    <script src="../kkk/js/main.js"></script>

    <script>
        $(document).ready(function () {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function (e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function (e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>
</html>