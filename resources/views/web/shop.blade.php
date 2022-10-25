@extends('._layout.layout')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
</head>
<body>

<!--PreLoader-->
<div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div>
<!--PreLoader Ends-->

<!-- header -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="index.blade.php">
                            <img src="{{asset('/images/logo/logo.png')}}" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="current-list-item"><a href="#">Thương Hiệu</a>
                                <ul class="sub-menu">
                                    <ul>
                                        <li><a title="Các hãng bán chạy">Các hãng bán chạy</a></li>
                                        <li style="list-style: none;"><a title="Daniel Wellington (DW)" href="#"
                                                                         class="item-link">Daniel Wellington (DW)</a>
                                        </li>
                                        <li style="list-style: none;"><a title="Seiko" href="#"
                                                                         class="item-link">Seiko</a></li>
                                        <li style="list-style: none;"><a href="#" class="item-link">Saga</a></li>
                                        <li style="list-style: none;"><a href="#" class="item-link">Sokolov</a></li>
                                        <li style="list-style: none;"><a title="Casio" href="#"
                                                                         class="item-link">Casio</a></li>
                                        <li style="list-style: none;"><a title="Citizen" href="#" class="item-link">Citizen</a>
                                        </li>
                                        <li style="list-style: none;"><a title="Orient" href="#" class="item-link">Orient</a>
                                        </li>
                                        <li style="list-style: none;"><a title="Olym Pianus – Olympia Star" href="#"
                                                                         class="item-link">OP</a></li>
                                    </ul>
                                    <ul>
                                        <li><a title="Khuyên dùng">Khuyên dùng</a></li>
                                        <li style="list-style: none;"><a title="G-Shock" href="#" class="item-link"
                                                                         data-wpel-link="internal">G-Shock</a></li>
                                        <li style="list-style: none;"><a href="#" class="item-link"
                                                                         data-wpel-link="internal">Baby-G</a></li>
                                        <li style="list-style: none;"><a title="#" class="item-link"
                                                                         data-wpel-link="internal">Fossil</a></li>
                                        <li style="list-style: none;"><a title="#" class="item-link"
                                                                         data-wpel-link="internal">Skagen</a></li>
                                        <li style="list-style: none;"><a title="#" class="item-link"
                                                                         data-wpel-link="internal">Michael Kors</a></li>
                                        <li style="list-style: none;"><a title="#" class="item-link"
                                                                         data-wpel-link="internal">Candino</a></li>
                                        <li style="list-style: none;"><a href="#" class="item-link"
                                                                         data-wpel-link="internal">SR Watch</a></li>
                                    </ul>
                                    <ul>
                                        <li><a title="Các dòng đặt biệt" href="#">Các dòng đặt biệt</a></li>
                                        <li style="list-style: none;"><a
                                                title="Đồng Hồ Phiên Bản Giới Hạn (Litmited Edition)" href="#"
                                                data-wpel-link="internal">Limited Edition</a></li>
                                        <li style="list-style: none;"><a href="#" class="item-link"
                                                                         data-wpel-link="internal">Đồng Hồ Quân Đội</a>
                                        </li>
                                        <li style="list-style: none;"><a href="#" class="item-link"
                                                                         data-wpel-link="internal">Đồng Hồ Điện Tử</a>
                                        </li>
                                        <li style="list-style: none;"><a title="Đồng Hồ Đính Kim Cương" href="#"
                                                                         data-wpel-link="internal">Đồng Hồ Đính Kim
                                                Cương</a></li>
                                        <li style="list-style: none;"><a target="_blank" href="#"
                                                                         data-wpel-link="internal"><i
                                                    class="fa fa-0"></i>Đồng Hồ Xà Cừ</a></li>
                                        <li style="list-style: none;"><a href="#" class="item-link"
                                                                         data-wpel-link="internal">Đồng Hồ Trẻ Em</a>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li><a title="Các hãng Thụy sĩ" href="#">Swiss Made (Thụy Sỹ)</a></li>
                                        <ul>
                                            <li style="list-style: none;"><a title="Longines" href="#" class="item-link"
                                                                             data-wpel-link="internal">Longines</a></li>
                                            <li style="list-style: none;"><a title="Đồng Hồ Doxa" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Doxa</a></li>
                                            <li style="list-style: none;"><a title="Tissot" href="#" class="item-link"
                                                                             data-wpel-link="internal">Tissot</a></li>
                                            <li style="list-style: none;"><a title="Đồng hồ Rado" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Rado</a></li>
                                            <li style="list-style: none;"><a title="Đồng Hồ Movado" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Movado</a></li>
                                            <li style="list-style: none;"><a title="Đồng Hồ Frederique Constant"
                                                                             href="#" class="item-link"
                                                                             data-wpel-link="internal">Frederique
                                                    Constant</a></li>
                                        </ul>

                                    </ul>

                                    <ul>
                                        <li><a title="Hãng Thụy sĩ khác" href="#">#</a></li>
                                        <ul>
                                            <li

                                                style="list-style: none;"><a title="Đồng Hồ CalVin Klein"
                                                                             href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Calvin Klein</a>
                                            </li>
                                            <li

                                                style="list-style: none;"><a title="Đồng Hồ Bulova"
                                                                             href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Bulova</a></li>
                                            <li

                                                style="list-style: none;"><a title="Claude Bernard"
                                                                             href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Claude
                                                    Bernard</a></li>
                                            <li
                                                style="list-style: none;"><a title="Đồng hồ Mido"
                                                                             href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Mido</a></li>
                                        </ul>

                                    </ul>

                                </ul>
                            </li>
                            <li class="current-list-item"><a title="Nam" href="#">Nam</a>
                                <ul class="sub-menu">
                                    <ul>
                                        <li><a title="Gía">Khoảng giá</a></li>
                                        <ul>
                                            <li><a title="dưới 2tr">Dưới 2tr</a></li>
                                            <li><a title="2tr - 3tr">2tr - 3tr</a></li>
                                            <li><a title="3tr - 4tr">3tr - 4tr</a></li>
                                            <li><a title="4tr - 5tr">4tr -5tr</a></li>
                                            <li><a title="trên 5tr">Trên 5tr</a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li><a title="Chất liệu dây">Chất liệu dây</a></li>
                                        <ul>
                                            <li><a title="dây kim loại">Dây kim loại</a></li>
                                            <li><a title="dây da">Dây da</a></li>
                                            <li><a title="dây nhựa/cao su">Dây nhựa / cao su</a></li>
                                            <li><a title="dây titanium">Dây titanium</a></li>
                                            <li><a title="dây vải">Dây vải</a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li><a title="Thương hiệu hot">Thương hiệu hot</a></li>
                                        <ul>
                                            <li><a title="casio">Casio<span class="badge bg-danger">Hot</span></a></li>
                                            <li><a title="cetizen">Cetizen</a></li>
                                            <li><a title="Doxa">Doxa</a></li>
                                            <li><a title="Seiko">Seiko</a></li>
                                            <li><a title="Tissot">Tissot</a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li><a title="Các hãng Thụy sĩ" href="#">Swiss Made (Thụy Sỹ)</a></li>
                                        <ul>
                                            <li style="list-style: none;"><a title="Đồng Hồ Doxa" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Doxa</a></li>
                                            <li style="list-style: none;"><a title="Tissot" href="#" class="item-link"
                                                                             data-wpel-link="internal">Tissot</a></li>
                                            <li style="list-style: none;"><a title="Đồng hồ Rado" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Rado</a></li>
                                            <li style="list-style: none;"><a title="Đồng Hồ Movado" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Movado</a></li>
                                            <li style="list-style: none;"><a title="Đồng Hồ Frederique Constant"
                                                                             href="#" class="item-link"
                                                                             data-wpel-link="internal">Frederique
                                                    Constant</a></li>
                                            <li style="list-style: none;"><a title="Đồng Hồ Cavin klenin(CK)"
                                                                             href="#" class="item-link"
                                                                             data-wpel-link="internal">Cavin
                                                    klenin(CK)</a></li>

                                        </ul>

                                    </ul>
                                    <ul>
                                        <li><a title="Các dòng đặc biệt" href="#">Các dòng đặt biệt</a></li>
                                        <ul>
                                            <li style="list-style: none;"><a title="Đồng Hồ siêu mỏng" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Đồng hồ siêu
                                                    mỏng</a></li>
                                            <li style="list-style: none;"><a title="Đồng hồ đính kim cương" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Đồng hồ đính kim
                                                    cươn</a></li>
                                            <li style="list-style: none;"><a title="Đồng hồ lộ máy" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Đồng hồ lộ máy
                                                    (SKELETON)</a></li>
                                            <li style="list-style: none;"><a title="Đồng Hồ vàng 18k" href="#"
                                                                             class="item-link"
                                                                             data-wpel-link="internal">Đồng hồ vàng
                                                    18k</a></li>
                                            <li style="list-style: none;"><a title="Đồng Hồ Phiên Bản giới hạn"
                                                                             href="#" class="item-link"
                                                                             data-wpel-link="internal">Đồng hồ phiên bản
                                                    giới hạn
                                                    Constant</a></li>

                                        </ul>

                                    </ul>


                                </ul>


                            </li>
                            <li class="current-list-item"><a title="Nữ" href="#">Nữ</a>
                                <ul class="sub-menu">
                                    <ul>
                                        <li><a title="Gía">Khoảng giá</a></li>
                                        <ul>
                                            <li><a title="dưới 2tr">Dưới 2tr</a></li>
                                            <li><a title="2tr - 3tr">2tr - 3tr</a></li>
                                            <li><a title="3tr - 4tr">3tr - 4tr</a></li>
                                            <li><a title="4tr - 5tr">4tr -5tr</a></li>
                                            <li><a title="trên 5tr">Trên 5tr</a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li><a title="Chất liệu dây">Chất liệu dây</a></li>
                                        <ul>
                                            <li><a title="dây kim loại">Dây kim loại</a></li>
                                            <li><a title="dây da">Dây da</a></li>
                                            <li><a title="dây nhựa/cao su">Dây nhựa / cao su</a></li>
                                            <li><a title="dây titanium">Dây titanium</a></li>
                                            <li><a title="dây vải">Dây vải</a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li><a title="Thương hiệu hot">Thương hiệu hot</a></li>
                                        <ul>
                                            <li><a title="Saga">Saga <span class="badge bg-warning">NEW</span></a></li>
                                            <li><a title="Sokolov">Sokolov <span class="badge bg-warning">NEW</span></a></li>
                                            <li><a title="Casio">Casio</a></li>
                                            <li><a title="Cetizen">Cetizen</a></li>
                                            <li><a title="Doxa">Doxa <span class="badge bg-danger">NEW</span></a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <img src="assets/img/Dong-Ho-Nu-1.jpg" style="justify-content: center">
                                    </ul>

                                </ul>
                            </li>
                            <li class="current-list-item"><a title="Couple" href="#">Cặp đôi</a>
                                <ul class="sub-menu">
                                    <ul>
                                        <li><a title="Gía">Khoảng giá</a></li>
                                        <ul>
                                            <li><a title="dưới 2tr">Dưới 2tr</a></li>
                                            <li><a title="2tr - 3tr">2tr - 3tr</a></li>
                                            <li><a title="3tr - 4tr">3tr - 4tr</a></li>
                                            <li><a title="4tr - 5tr">4tr -5tr</a></li>
                                            <li><a title="trên 5tr">Trên 5tr</a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li><a title="Chất liệu dây">Chất liệu dây</a></li>
                                        <ul>
                                            <li><a title="dây kim loại">Dây kim loại</a></li>
                                            <li><a title="dây da">Dây da</a></li>
                                            <li><a title="dây nhựa/cao su">Dây nhựa / cao su</a></li>
                                            <li><a title="dây titanium">Dây titanium</a></li>
                                            <li><a title="dây vải">Dây vải</a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <li><a title="Thương hiệu hot">Thương hiệu hot</a></li>
                                        <ul>
                                            <li><a title="Casio">Casio</a></li>
                                            <li><a title="Cetizen">Cetizen </a></li>
                                            <li><a title="Seiko">Seiko</a></li>
                                            <li><a title="G-sock & Baby">G-sock & Baby</a></li>
                                            <li><a title="Skagen">Skagen</a></li>
                                        </ul>
                                    </ul>
                                    <ul>
                                        <img src="assets/img/dong-ho-doi-menu.jpg" alt="">

                                    </ul>
                                </ul>
                            </li>
                            <li class="current-list-item"><a title="Couple" href="#">Trang Sức</a>
                                <ul class="sub-menu1">
                                    <li><a title="Nhẫn" href="#">Nhẫn</a></li>
                                    <li><a  title="Dây Chuyền" href="#">Dây Chuyền</a></li>
                                    <li><a  title="Vòng Tay, Lắc tay" href="#">Vòng Tay, Lắc tay</a></li>
                                    <li><a  title="Bông tay" href="#">Bông tay</a></li>

                                </ul>
                            <li><a href="">Dịch vụ</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li>
                                <div class="header-icons">
                                    <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                    <a class="user" href="resources/views/layouts/login.blade.php"><i class="far fa-user"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Search For:</h3>
                        <input type="text" placeholder="Keywords">
                        <button type="submit">Search <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search arewa -->

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Fresh and Organic</p>
                    <h1>Shop</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".strawberry">Strawberry</li>
                        <li data-filter=".berry">Berry</li>
                        <li data-filter=".lemon">Lemon</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row product-lists">
            <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
                    </div>
                    <h3>Strawberry</h3>
                    <p class="product-price"><span>Per Kg</span> 85$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center berry">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
                    </div>
                    <h3>Berry</h3>
                    <p class="product-price"><span>Per Kg</span> 70$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center lemon">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
                    </div>
                    <h3>Lemon</h3>
                    <p class="product-price"><span>Per Kg</span> 35$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="assets/img/products/product-img-4.jpg" alt=""></a>
                    </div>
                    <h3>Avocado</h3>
                    <p class="product-price"><span>Per Kg</span> 50$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="assets/img/products/product-img-5.jpg" alt=""></a>
                    </div>
                    <h3>Green Apple</h3>
                    <p class="product-price"><span>Per Kg</span> 45$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="assets/img/products/product-img-6.jpg" alt=""></a>
                    </div>
                    <h3>Strawberry</h3>
                    <p class="product-price"><span>Per Kg</span> 80$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end products -->

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/1.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/2.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/3.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/4.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->

<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">About us</h2>
                    <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Get in Touch</h2>
                    <ul>
                        <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                        <li>support@fruitkha.com</li>
                        <li>+00 111 222 3333</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Pages</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Shop</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">Subscribe</h2>
                    <p>Subscribe to our mailing list to get the latest updates.</p>
                    <form action="index.blade.php">
                        <input type="email" placeholder="Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
                    Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                </p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
