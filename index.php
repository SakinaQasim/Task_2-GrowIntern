<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fruitables - Vegetable Website </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--  Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center text-danger">
        <div class="spinner-grow " role="status"></div>
    </div>
    <!-- Spinner End -->


    <?php include 'header.php' ?>


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title text-danger " id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center ">
                    <div class="input-group w-75 mx-auto d-flex ">
                        <input type="search text-danger" class="form-control p-3 " placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3 text-warning"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->
    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3  dark-red-text">100% Organic Foods</h4>
                    <h1 class="mb-5 display-3 dark-yellow-text">Organic Veggies & Fruits Foods</h1>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-2 border-warning w-75 py-3 px-4 rounded-pill" type="number" placeholder="Search">
                        <button type="submit" class="btn  border-2  py-3 px-4 position-absolute rounded-pill text-white h-100 btn-red-bg " style="top: 0; right: 25%;">Submit Now</button>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active rounded">
                                <img src="img/hbb.jpg" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Fruites</a>
                            </div>
                            <div class="carousel-item rounded">
                                <img src="img/hbb1.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">Vegetables</a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next " type="button" data-bs-target="#carouselId" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center  rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-danger mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5 class="text-warning">Free Shipping</h5>
                            <p class="mb-0 ">Free on order over $300</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-danger mb-5 mx-auto">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5 class="text-warning">Security Payment</h5>
                            <p class="mb-0">100% security payment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-danger mb-5 mx-auto">
                            <i class="fas fa-exchange-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5 class="text-warning">30 Day Return</h5>
                            <p class="mb-0">30 day money guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-danger mb-5 mx-auto">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5 class="text-warning">24/7 Support</h5>
                            <p class="mb-0">Support every time fast</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <div class="tab-class text-center">
                <div class="row g-4">
                    <div class="col-lg-4 text-start">
                        <h1 class="text-warning">Our Organic Products</h1>
                    </div>
                    <div class="col-lg-8 text-end">
                        <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 130px;">All Products</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 130px;">Vegetables</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 130px;">Fruits</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                    <span class="text-dark" style="width: 130px;">Bread</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                    <span class="text-dark" style="width: 130px;">Meat</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/grapess.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Grapes</h4>
                                                <p>Grapes are a rich source of antioxidants, vitamins C and K, and minerals like potassium and copper fantasy taste.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.336.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/carrots.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Carrots</h4>
                                                <p>Carrots offer a delightful taste and texture, with a rich source of antioxidants, minerals like potassium and copper.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.252.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fresh-meat.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Meat</h4>
                                                <p>From tender steaks to savory roasts, meat lovers revel in the rich flavors and hearty textures that only meat can provide.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.2,352.48 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/mango.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Mangos</h4>
                                                <p>The vibrant hues of golden yellow, deep orange, and blush red adorn mangoes, adding visual delight to their irresistible appeal.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.1,479.30 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/bread.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Brown Slid Bread</h4>
                                                <p>Brown bread, often referred to as whole wheat bread, is a nutritious and wholesome staple enjoyed by people around the world.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.150.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/red-peppers.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Red Peppers</h4>
                                                <p>Red peppers, also known as red bell peppers or sweet peppers, are vibrant and flavorful vegetables that offer a range of culinary.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.240.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/chicken.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Chicken Meat</h4>
                                                <p>Chicken soup with hearty chunks of meat and vegetables warms the soul and comforts during chilly days.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.760.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/white bread.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Loaf Bread</h4>
                                                <p>Freshly baked loaf bread, with its golden crust and soft interior, is a comforting staple on breakfast tables worldwide.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.888.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/carrots.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Carrots</h4>
                                                <p>Carrots offer a delightful taste and texture, with a rich source of antioxidants, minerals like potassium and copper.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.252.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded ssposition-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/red-peppers.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Red Peppers</h4>
                                                <p>Red peppers, also known as red bell peppers or sweet peppers, are vibrant and flavorful vegetables that offer a range of culinary.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.240.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/onions.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Oninons</h4>
                                                <p>Caramelized onions, with their rich sweetness and tender texture, enhance the savory depth of dishes like soups, stews, and pasta.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.1,650.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/potatoes.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Potatoes</h4>
                                                <p>Hearty potato soup, simmered with vegetables and broth, warms the soul with its comforting flavors and creamy consistency</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.51.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/tomatoes.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Tomatoes</h4>
                                                <p>Tomatoes are rich in lycopene, a powerful antioxidant known for its potential health benefits, including supporting heart health.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.215.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/peas.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Green Peas</h4>
                                                <p>Peas and carrots, a classic combination, come together in hearty stews and comforting pot pies, showcasing their harmonious flavors.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.400.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/brinjal.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Brinjal</h4>
                                                <p>Crispy brinjal fritters, coated in a seasoned batter and deep-fried to golden perfection, make for irresistible appetizers or snacks.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.85.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger">Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/freshcapscium.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Vegetable</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Capsicum</h4>
                                                <p>Roasted capsicum soup, blended with creamy textures and aromatic spices, warms the soul on chilly days with its comforting flavors</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.185.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/oranges.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Oranges</h4>
                                                <p>Orange marmalade, made from cooked orange peel and juice, is a delicious spread for toast, muffins, and pastries.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.150.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/apple.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Apple</h4>
                                                <p>Apple strudel, a pastry filled with spiced apple slices and raisins, is a delightful treat often enjoyed with a scoop of vanilla ice cream</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.500.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/grapess.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Grapes</h4>
                                                <p>Grapes are a rich source of antioxidants, vitamins C and K, and minerals like potassium and copper fantasy taste.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.336.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/mango.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Mangos</h4>
                                                <p>The vibrant hues of golden yellow, deep orange, and blush red adorn mangoes, adding visual delight to their irresistible appeal.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.1,479.30 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/bananas.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Bananas</h4>
                                                <p>Sliced bananas, added to cereal, oatmeal, or yogurt, provide a delicious and energy-boosting breakfast topping.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.105.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/kiwi.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Kiwis</h4>
                                                <p>Kiwis, with their fuzzy brown exterior and vibrant green flesh speckled with tiny black seeds, are a unique and flavorful fruit.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.300.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/freshcherries.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Cherries</h4>
                                                <p>Cherry preserves or jams, made from cooked cherries and sugar, are perfect for spreading on toast, scones, cakes,or pastries.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.378.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/strawberries.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruit</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Strawberries</h4>
                                                <p>Strawberry shortcake, with fluffy biscuits, whipped cream, and sliced strawberries, is a classic and irresistible dessert.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.800.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/white bread.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Loaf Bread</h4>
                                                <p>Freshly baked loaf bread, with its golden crust and soft interior, is a comforting staple on breakfast tables worldwide.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.1,399.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/Potato bread.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Potato bread</h4>
                                                <p> Potato bread is known for its soft and moist crumb, making it a favorite among bread enthusiasts who enjoy a tender texture.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.1,099.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/Pita Bread.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Pita Bread</h4>
                                                <p>Pita bread is unique for its pocketed structure, created during baking when the dough puffs up, forming an interior pocket.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.599.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/pizza bread.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Pizza Bread</h4>
                                                <p>Besides traditional pizzas, pizza bread can also be used for making flatbreads, calzones, pizza rolls, and other creative variations.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.600.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/Baguette.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Baguette</h4>
                                                <p>From picnics to elegant dinners, the baguette's charm lies in its ability to elevate any dining experience with its artisanal appeal.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.1,599.00/ kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/turkishbagel-.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Bagel</h4>
                                                <p>Bagels come in various flavors such as plain, sesame, poppy seed, everything, and cinnamon raisin, catering to a wide range of taste preference.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.399.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/pastry-dough.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Flatbread</h4>
                                                <p>Flatbread toppings range from simple herbs and olive oil to more elaborate combinations like cheeses, meats, vegetables, and spreads.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.250.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/bread.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Bread</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Rye bread</h4>
                                                <p>Health benefits of rye bread include higher fiber content compared to white bread, which may aid in digestion and promote a feeling of fullness.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.150.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/chicken leg.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Chicken Legs</h4>
                                                <p>From family gatherings to casual barbecues, chicken legs are a popular choice, loved by both kids and adults alike.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.469.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/chicken.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Chicken Meat</h4>
                                                <p>Chicken soup with hearty chunks of meat and vegetables warms the soul and comforts during chilly days.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.760.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/lamb1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Lamb Meat</h4>
                                                <p>From tender steaks to savory roasts, meat lovers revel in the rich flavors and hearty textures that only meat can provide.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.2,352.48 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/Chopped.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Minced Meat</h4>
                                                <p>From tender steaks to savory roasts, meat lovers revel in the rich flavors and hearty textures that only meat can provide.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.2,352.48 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/fresh-meat.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Beef</h4>
                                                <p>From tender steaks to savory roasts, meat lovers revel in the rich flavors and hearty textures that only meat can provide.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.2,352.48 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/chicken-offal.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Chicken offal</h4>
                                                <p>Chicken offal includes organs such as the liver, heart,and sometimes the neck and feet, depending on cultural cuisines.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.999.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/goat meat.19960.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger">Goat Meat</h4>
                                                <p>Goat meat is leaner than many other red meats, making it a healthier choice with lower levels of saturated fats.</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.760.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="img/Boneless chicken.19976.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Meat</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h4 class="text-danger"> Boneless Chicken </h4>
                                                <p>With its versatility, convenience, and delicious taste, boneless chicken remains a popular choice for home cooks .</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rs.736.00 / kg</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i> Show More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->


    <!-- Vesitable Shop Start-->
    <div class="container-fluid vesitable py-5">
        <div class="container py-5">
            <h1 class="mb-0 text-warning">Fresh Organic Vegetables</h1>
            <div class="owl-carousel vegetable-carousel justify-content-center">
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/parsley.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom">
                        <h4 class="text-danger">Parsely</h4>
                        <p>Dried parsley can be used as a convenient alternative when fresh parsley is not available, though the fresh herb provides more robust flavor.</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Rs.40.00 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/cabbage.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom">
                        <h4 class="text-danger">Cabbage</h4>
                        <p>Cabbage can be stored in the refrigerator for several weeks if kept whole and wrapped tightly in plastic wrap or stored in a perforated plastic bag.</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Rs.60.00 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/corns.jpg" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom">
                        <h4 class="text-danger">Corns</h4>
                        <p>Sweet corn, a variety known for its high sugar content, is commonly eaten as a vegetable and used in salads, soups, and casseroles.</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Rs.80.00 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/garlic.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom">
                        <h4 class="text-danger">Garlic</h4>
                        <p>Garlic is used in various forms, including fresh cloves, minced garlic, garlic powder, garlic paste, and roasted garlic, offering versatility in cooking.</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Rs.100.00 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/mushrooms.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom">
                        <h4 class="text-danger">Mushrooms</h4>
                        <p>Available in a wide variety of shapes, sizes, and colors, mushrooms are used in culinary dishes worldwide, adding depth and umami flavors.</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Rs.90.00 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/pumpkins.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom">
                        <h4 class="text-danger">Pumpkin</h4>
                        <p>Roasted pumpkin slices or cubes can be added to salads, pasta dishes, curries, and risottos, adding a naturally sweet and earthy flavor.</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Rs.60.00 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/beetroot.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom">
                        <h4 class="text-danger">Beetroot</h4>
                        <p>Beetroot juice is enjoyed as a refreshing and nutritious beverage, sometimes mixed with other fruits and vegetables for added flavor and nutrients</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Rs.50.00 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="border border-warning rounded position-relative vesitable-item">
                    <div class="vesitable-img">
                        <img src="img/ginger2.jpg" class="img-fluid w-100 rounded-top" alt="">
                    </div>
                    <div class="text-white bg-danger px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;">Vegetable</div>
                    <div class="p-4 rounded-bottom">
                        <h4 class="text-danger">Ginger</h4>
                        <p>Ginger, scientifically known as Zingiber officinale, is a flowering plant whose rhizome (root) is widely used as a spice and medicinal herb</p>
                        <div class="d-flex justify-content-between flex-lg-wrap">
                            <p class="text-dark fs-5 fw-bold mb-0">Rs.66.00 / kg</p>
                            <a href="#" class="btn border border-secondary rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vesitable Shop End -->


    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-warning my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-danger">Fresh Exotic Fruits</h1>
                        <p class="fw-normal display-3 text-white mb-4">in Our Store</p>
                        <p class="mb-4 text-dark">At FruVegHub, we take pride in offering a wide variety of fruits, vegetables, and grocery essentials to meet all your kitchen needs.</p>
                        <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-white py-3 px-5">BUY</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/baner-3.jpg" class="img-fluid w-100 rounded" alt="">
                        <div class="d-flex align-items-center justify-content-center bg-danger rounded-circle position-absolute" style="width: 140px; height: 140px; top: 0; left: 0;">
                            <h1 style="font-size: 100px; color:azure;">1</h1>
                            <div class="d-flex flex-column">
                                <span class="h2 mb-0 text-white">50$</span>
                                <span class="h4 text-white mb-0">kg</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Bestsaler Product Start -->
    <div class="container-fluid py-5 ">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-4 text-warning">Bestseller Products</h1>
                <p>Discover our top-selling fresh produce and pantry essentials curated for quality and taste perfection.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/cabbage.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5 text-danger">Organic Cabbage</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">60.00 Rs</h4>
                                <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/strawberries.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5 text-danger"> Sweet Strawberries</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">800.00 Rs</h4>
                                <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/Boneless chicken.19976.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5 text-danger">Boneless chicken</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">736.00 Rs</h4>
                                <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/beetroot.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5 text-danger">Beetroot</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">50.00 Rs</h4>
                                <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/bread.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5 text-danger">Rye Bread</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">150.00 Rs</h4>
                                <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="p-4 rounded bg-light">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <img src="img/turkishbagel-.jpg" class="img-fluid rounded-circle w-100" alt="">
                            </div>
                            <div class="col-6">
                                <a href="#" class="h5 text-danger">Bagel</a>
                                <div class="d-flex my-3">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4 class="mb-3">399.00 Rs</h4>
                                <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/mushrooms.jpg" class="img-fluid rounded" alt="">
                        <div class="py-4">
                            <a href="#" class="h5 text-danger">Mushrooms</a>
                            <div class="d-flex my-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">90.00 Rs</h4>
                            <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/kiwi.jpg" class="img-fluid rounded" alt="">
                        <div class="py-4">
                            <a href="#" class="h5 text-danger">Kiwis</a>
                            <div class="d-flex my-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">300.00 Rs</h4>
                            <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/mango.jpg" class="img-fluid rounded" alt="">
                        <div class="py-4">
                            <a href="#" class="h5 text-danger">Mangoes</a>
                            <div class="d-flex my-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">1,479.30 Rs</h4>
                            <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/lamb1.jpg" class="img-fluid rounded" alt="">
                        <div class="py-4">
                            <a href="#" class="h5 text-danger">Lamb Meat</a>
                            <div class="d-flex my-3 justify-content-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h4 class="mb-3">1,479.30 Rs</h4>
                            <a href="#" class="btn border border-warning rounded-pill px-3 text-danger"><i class="fa fa-shopping-bag me-2 text-danger"></i>Show More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->


    <!-- Fact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="bg-light p-5 rounded">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-danger"></i>
                            <h4>satisfied customers</h4>
                            <h1>1963</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-danger"></i>
                            <h4>quality of service</h4>
                            <h1>99%</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-danger"></i>
                            <h4>quality certificates</h4>
                            <h1>33</h1>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="counter bg-white rounded p-5">
                            <i class="fa fa-users text-danger"></i>
                            <h4>Available Products</h4>
                            <h1>789</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact Start -->


    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-warning">Our Testimonial</h4>
                <h1 class="display-5 mb-5 text-dark">Our Client Saying!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-danger position-absolute" style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Shopping at FruVegHub feels like a culinary adventure. Their curated selection of best-sellers inspires me to try new recipes and flavors with confidence.
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/portrait1.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Rubina</h4>
                                <p class="m-0 pb-3">housewife</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-danger position-absolute" style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">FruVegHub has become my go-to grocery store.Their best-sellers section makes it easy to find quality products, and the staff is always helpful and friendly.
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/portrait2.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Sarah</h4>
                                <p class="m-0 pb-3">Doctor</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-danger position-absolute" style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">Shopping at FruVegHub is a delightful experience. Their best-selling items are not only delicious but also affordable, making it a win-win every time I visit!
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/portrait3.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Osama</h4>
                                <p class="m-0 pb-3">Engineer</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative ">
                        <i class="fa fa-quote-right fa-2x text-danger position-absolute" style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">FruVegHub is my happy place! The best-seller products always meet my expectations for freshness and taste. It's where quality and convenience meet.
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/portrait4.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Umaima</h4>
                                <p class="m-0 pb-3">Housewife</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                    <i class="fas fa-star text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tastimonial End -->


    <?php include 'footer.php' ?>




    <!-- Back to Top -->
    <a href="#" class="btn btn-danger border-3 border-secondary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!--  Javascript -->
    <script src="js/main.js"></script>
</body>

</html>