<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/e6f005dbaa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Color shop</title>
    <style>
            body{
            margin: 0;
            padding: 0;
            }
            .wrapper{
                height: auto;
                width: 90%;
                margin: 0 auto;
            }
            .header{
                height: 300px;
                width: 100%;
            }
            .menu{
                height: auto;
                width: 100%;
            }

            .main{
                height: auto;
                width: 100%;
            }

            .maincontent{
                height: 800px;
                width: 78%;
                margin-top: 5px;
                margin-left:5px;
                float: right;
            }

            .footer{
                height: auto;
                width: 100%;
                background-color: rebeccapurple;
            }
            .dropdown-content {
            display: none;
            position: absolute;
            }
            .dropdown-content a {
            padding: 12px 16px;
            display: block;
            text-decoration: none;
            min-width: 200px;
            }
            .dropdown:hover .dropdown-content {
                display: block;
            }
            .card{
                height: 300px;
            }
            .card >img{
                height: 200px;
                width: 200px;
            }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../bai1//img//logo.png" alt="" srcset="" width="50" height="50"></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true"> 
                                <i class="fa-solid fa-user"></i> 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Đăng Nhập</a></li>
                                <li><a class="dropdown-item" href="#"> Đăng kí</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div>
        <div class="header">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active imges" data-bs-interval="10000">
                        <img src="../bai1/img/banner/banner1.png" alt="" srcset="" width="100%" height="350" >
                    </div>
                    <div class="carousel-item imges" data-bs-interval="2000">
                        <img src="../bai1/img/banner/banner2.png" alt="" srcset="" width="100%" height="350">
                    </div>
                    <div class="carousel-item imges">
                        <img src="../bai1/img/banner/banner3.png" alt="" srcset=""width="100%" height="350">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>   
        </div>
        <div class="menu sticky-top">
            <nav class="navbar navbar-expand-lg navbar-light  bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <p><a style="text-decoration: none" href="#">Ốp lưng</a></p>
                                <p><a style="text-decoration: none" href="#">Tai phone</a></p>
                                <p><a style="text-decoration: none" href="#">Cáp sạc</a></p>
                                <p><a style="text-decoration: none" href="#">Sạc dự phòng</p>
                                <p><a style="text-decoration: none" href="#">Kính cường lực</p>
                                <div class="dropdown">
                                    <button class="dropbtn">Khác</button>
                                    <div class="dropdown-content">
                                        <a href="#">Gậy tự sướng</a>
                                        <a href="#">Loa  bluetooth</a>
                                        <a href="#">Giá đỡ điện thoại</a>
                                    </div>
                                </div>
                            </ul>
                        </li>   
                        <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main">
            <div class="row">
                <div class="col-2" >
                    <p><a style="text-decoration: none" href="#">Ốp lưng</a></p>
                    <p><a style="text-decoration: none" href="#">Tai phone</a></p>
                    <p><a style="text-decoration: none" href="#">Cáp sạc</a></p>
                    <p><a style="text-decoration: none" href="#">Sạc dự phòng</p>
                    <p><a style="text-decoration: none" href="#">Kính cường lực</p>
                    <div class="dropdown">
                        <button class="dropbtn">Khác</button>
                        <div class="dropdown-content">
                            <a href="#">Gậy tự sướng</a>
                            <a href="#">Loa  bluetooth</a>
                            <a href="#">Giá đỡ điện thoại</a>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="row row-cols-2 row-cols-md-4 g-4">
                        <div class="col">
                            <div class="card">
                            <img src="./img//tainghe//tainghe1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thêm vào giỏ hàng</a>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="./img//tainghe//tainghe2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thêm vào giỏ hàng</a>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="./img//tainghe//tainghe3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thêm vào giỏ hàng</a>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="./img//tainghe//tainghe4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thêm vào giỏ hàng</a>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="./img//tainghe//tainghe5.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thêm vào giỏ hàng</a>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="./img//tainghe//tainghe6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thêm vào giỏ hàng</a>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="./img//tainghe//tainghe7.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thêm vào giỏ hàng</a>
                            </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <img src="./img//tainghe//tainghe8.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Thêm vào giỏ hàng</a>
                            </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <footer class="text-center text-lg-start bg-light text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            </section>
                <div class="d-flex justify-content-center pt-3">
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            <section class="">
                <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                    </div>
                </div>
                </div>
            </section>
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            </footer>
        </div>
    </div>
    <script src="../bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>