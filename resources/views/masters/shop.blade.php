
<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Shop - Beautiful Shop Homepage</title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="My Shop - Beautiful Shop Homepage , Responsive Bootstrap 4 template , bootstrap 4 Shop template, bootstrap4 template, E-Commerce template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" lang="en" content="Simple Bootstrap 4 Shop template , Responsive and Modern HTML5 Template made from bootstrap 4.">
    <meta name="keywords" lang="en" content="E-Commerce template, bootstrap 4 template,bootstrap 4 Shop template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="{{asset('shop/img/favicon.ico')}}" type="image/x-icon" />
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{asset('shop/dist/font-awesome/css/font-awesome.min.css')}}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('shop/css/main.min.css')}}">

</head>

<body>
<div class="loader"></div>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#" id="header-logo">
                <img src="https://raw.githubusercontent.com/orbitthemes/Orbit-Themes/master/assets/logo.png" class="img-fluid" width="200"
                     alt="Orbit Themes">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-navigation" aria-controls="top-navigation"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="top-navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success ml-lg-3" href="#">
                            <i class="fa fa-cart-plus"></i> Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="#">
                            <i class="fa fa-sign-in"></i> Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main id="main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-category">
                    <h1 class="my-4 lead">B-Shop</h1>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Category 1</a>
                        <a href="#" class="list-group-item">Category 2</a>
                        <a href="#" class="list-group-item">Category 3</a>
                        <a href="#" class="list-group-item">Category 4</a>
                        <a href="#" class="list-group-item">Category 5</a>
                        <a href="#" class="list-group-item">Category 6</a>
                        <a href="#" class="list-group-item">Category 7</a>
                    </div>
                </div>
                <div class="recommended">
                    <h2 class="my-4 lead">Recommended</h2>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Recently Viewed
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <a href="#" class="list-group-item">Best Sellers
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <a href="#" class="list-group-item">Best Of Phones
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <a href="#" class="list-group-item">Top Picks In Fashion
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 pt-lg-5">
                <div id="carousel-slide" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slide" data-slide-to="1"></li>
                        <li data-target="#carousel-slide" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="img/item-1.jpeg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/item-2.jpeg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="img/item-3.jpeg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-slide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-slide" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row pt-lg-5">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="img/item-1.jpeg" alt="Item 1">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item One</a>
                                </h4>
                                <h5>$74.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero architecto nisi iure
                                    optio aperiam ea obcaecati repellendus facilis, delectus aut doloribus eos quasi
                                    enim recusandae earum aspernatur, alias sint nobis?</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="img/item-2.jpeg" alt="Item Two">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Two</a>
                                </h4>
                                <h5>$54.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sit officia eum suscipit
                                    debitis vero nihil id consequatur, illo, mollitia labore voluptatum saepe ullam quaerat
                                    at repudiandae inventore, iusto placeat.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="img/item-3.jpeg" alt="Item 3">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Three</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit et pariatur ratione sit
                                    recusandae. Reprehenderit repellat, odit consectetur quo molestiae accusantium consequatur,
                                    adipisci dolores ipsam neque iure vitae ex velit?</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="img/item-3.jpeg" alt="Item 4">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Four</a>
                                </h4>
                                <h5>$24.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit unde provident iure,
                                    quisquam deserunt et cumque quos incidunt, magni saepe libero magnam voluptatum minus
                                    aliquid, fugiat eaque consectetur doloribus sequi!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="img/item-2.jpeg" alt="Item Five">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Five</a>
                                </h4>
                                <h5>$99.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis quos accusamus laborum
                                    quis recusandae, maxime adipisci, qui, magnam eaque deserunt eos officia veniam dolores!
                                    Reiciendis labore repellat quasi atque quam!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#">
                                <img class="card-img-top" src="img/item-1.jpeg" alt="Item 6">
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">Item Six</a>
                                </h4>
                                <h5>$1994.99</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis eligendi quod explicabo
                                    expedita, commodi possimus nobis cum, rerum adipisci veniam aliquid impedit ex quas
                                    maxime porro. Voluptatibus officiis delectus saepe!</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary scrollUp">
        <i class="fa fa-arrow-circle-o-up"></i>
    </a>
</main>
<!-- Footer -->
<footer id="footer">
    <p class="copyright">Made with
        <i class="fa fa-heart"></i> By
        <a target="_blank" title="Orbit Themes" href="http://www.orbitthemes.com">Orbit Themes</a> &copy;
        <span id="currentYear"></span> All Rights Reserved.
    </p>
    <div class="social">
        <a traget="_blank" href="https://facebook.com/orbitthemes" title="facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a traget="_blank" href="https://twitter.com/orbitthemes" title="twitter">
            <i class="fa fa-twitter"></i>
        </a>
        <a traget="_blank" href="https://plus.google.com/+orbitthemes" title="Google+" target="_blank">
            <i class="fa fa-google-plus"></i>
        </a>
        <a traget="_blank" href="https://github.com/orbitthemes" title="github" target="_blank">
            <i class="fa fa-github"></i>
        </a>
        <a traget="_blank" href="https://www.behance.net/orbitthemes" title="Behance" target="_blank">
            <i class="fa fa-behance"></i>
        </a>
        <a traget="_blank" href="https://dribbble.com/orbitthemes" title="Dribbble" target="_blank">
            <i class="fa fa-dribbble"></i>
        </a>
        <a traget="_blank" href="https://www.pinterest.com/orbitThemes/" title="Pinterest" target="_blank">
            <i class="fa fa-pinterest"></i>
        </a>
        <a traget="_blank" href="https://www.reddit.com/user/orbitthemes" title="Reddit" target="_blank">
            <i class="fa fa-reddit"></i>
        </a>
        <a traget="_blank" href="https://orbitthemes.com/blog/" title="RSS" target="_blank">
            <i class="fa fa-rss"></i>
        </a>
    </div>
</footer>
<!-- jQuery first, then Bootstrap JS. -->
<script src="{{asset('shop/dist/jquery/jquery.min.js')}}"></script>
<script src="{{asset('shop/dist/popper/popper.min.js')}}" integrity=""></script>
<script src="{{asset('shop/dist/bootstrap/js/bootstrap.min.js/')}}"></script>
<script src="{{asset('shop/js/main.min.js')}}"></script>
</body>

</html>
