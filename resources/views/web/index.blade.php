@extends('._layout.layout')
@section('title','Home')

@section('content')
<!--PreLoader-->
@include('_partials.loader')
<!--PreLoader Ends-->
<!-- header -->
@include('_partials.header')
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
<!-- end search area -->

<!-- hero area -->
<header class="header header-db position-relative">
    <section class="text-header w-100 position-absolute wow animate__slideInLeft">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Fresh & Organic</p>
                            <h1>Delicious Seasonal Fruits</h1>
                            <div class="hero-btns">
                                <a @click="login123()" class="boxed-btn">Fruit Collection</a>
                                <a href="{{route('contact')}}" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <ul class="hero__img_list">
        <li class="hero__img_item">
            <img class="sp-hidden" src="{{ asset('images/bg-header/bg-2.png') }}" alt="">
        </li>
        <li class="hero__img_item">
            <img class="sp-hidden" src="{{ asset('images/bg-header/bg-1.png') }}" alt="">
        </li>
        <li class="hero__img_item">
            <img class="sp-hidden" src="{{ asset('images/bg-header/bg-3.png') }}" alt="">
        </li>
        <li class="hero__img_item">
            <img class="sp-hidden" src="{{ asset('images/bg-header/bg-4.png') }}" alt="">
        </li>
        <li class="hero__img_item">
            <img class="sp-hidden" src="{{ asset('images/bg-header/bg-5.png') }}" alt="">
        </li>

    </ul>
    <div class="gradient w-100 h-50 position-absolute"></div>
</header>
<!-- end hero area -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>When order over $75</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>24/7 Support</h3>
                        <p>Get support all day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Refund</h3>
                        <p>Get refund within 3 days!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                        beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="{{ asset('images/products/product-img-1.jpg') }}" alt=""></a>

                    </div>
                    <h3>Strawberry</h3>
                    <p class="product-price"><span>Per Kg</span> 85$ </p>
                    <a href="cart/cart.blade.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="{{ asset('images/products/product-img-2.jpg')}}" alt=""></a>
                    </div>
                    <h3>Berry</h3>
                    <p class="product-price"><span>Per Kg</span> 70$ </p>
                    <a href="cart/cart.blade.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single_product.blade.php"><img src="{{ asset('images/products/product-img-3.jpg')}}" alt=""></a>
                    </div>
                    <h3>Lemon</h3>
                    <p class="product-price"><span>Per Kg</span> 35$ </p>
                    <a href="cart/cart.blade.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product section -->

<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-lg-6">
                <div class="image">
                    <div class="price-box">
                        <div class="inner-price">
                            <span class="price">
                                <strong>30%</strong> <br> off per kg
                            </span>
                        </div>
                    </div>
                    <img src="{{ asset('images/a.jpg')}}" alt="">
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-lg-6">
                <h3><span class="orange-text">Deal</span> of the month</h3>
                <h4>Hikan Strwaberry</h4>
                <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique!
                    Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem
                    accusant
                </div>
                <!--Countdown Timer-->
                <div class="time-counter">
                    <div class="time-countdown clearfix" data-countdown="2020/2/01">
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Days</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Hours</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Mins</div>
                        </div>
                        <div class="counter-column">
                            <div class="inner"><span class="count">00</span>Secs</div>
                        </div>
                    </div>
                </div>
                <a href="cart/cart.blade.php" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
            </div>
        </div>
    </div>
</section>
<!-- end cart banner section -->

<!-- testimonail-section -->
<div class="testimonail-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="{{ asset('images/avaters/avatar1.png')}}" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Saira Hakim <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="{{ asset('images/avaters/avatar2.png')}}" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>David Niph <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="{{ asset('images/avaters/avatar3.png')}}" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Jacob Sikim <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end testimonail-section -->

<!-- advertisement section -->
<div class="abt-section mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="abt-bg">
                    <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <p class="top-sub">Since Year 1999</p>
                    <h2>We are <span class="orange-text">Fruitkha</span></h2>
                    <p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel
                        nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed,
                        interdum velit. Nam eu molestie lorem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat
                        veritatis minus, et labore minima mollitia qui ducimus.</p>
                    <a href="about.blade.php" class="boxed-btn mt-4">know more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end advertisement section -->

<!-- shop banner -->
<section class="shop-banner">
    <div class="container">
        <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
        <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
        <a href="shop.blade.php" class="cart-btn btn-lg">Shop Now</a>
    </div>
</section>
<!-- end shop banner -->

<!-- latest news -->
<div class="latest-news pt-150 pb-150">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                        beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-news">
                    <a href="single_news.blade.php">
                        <div class="latest-news-bg news-bg-1"></div>
                    </a>
                    <div class="news-text-box">
                        <h3><a href="single_news.blade.php">You will vainly look for fruit on it in autumn.</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                        </p>
                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent vitae mattis nunc, egestas viverra eros.</p>
                        <a href="single_news.blade.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-news">
                    <a href="single_news.blade.php">
                        <div class="latest-news-bg news-bg-2"></div>
                    </a>
                    <div class="news-text-box">
                        <h3><a href="single_news.blade.php">A man's worth has its season, like tomato.</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                        </p>
                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent vitae mattis nunc, egestas viverra eros.</p>
                        <a href="single_news.blade.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-latest-news">
                    <a href="single_news.blade.php">
                        <div class="latest-news-bg news-bg-3"></div>
                    </a>
                    <div class="news-text-box">
                        <h3><a href="single_news.blade.php">Good thoughts bear good fresh juicy fruit.</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                        </p>
                        <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                            Praesent vitae mattis nunc, egestas viverra eros.</p>
                        <a href="single_news.blade.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="single_news.blade.php" class="boxed-btn">More News</a>
            </div>
        </div>
    </div>
</div>
<!-- end latest news -->


@endsection

@section('vue')
<script>
    const {
        createApp
    } = Vue
    createApp({
        mounted() {
            axios
                .get('http://watchshop-doan.herokuapp.com/api/product/free/get-all/1/10', {
                    "page" :1,
                    "size": 5
                })
                .then(response => {console.log(response)})
        },
        methods: {
            shownumber() {
                console.log(123);
            },
            login123() {
                axios
                    .get('http://52.20.194.189:8080/api/admin/warehouse/get-all-product?page=1&size=5', {
                        headers: {
                            'X-Content-Type-Options': 'nosniff',
                            'X-XSS-Protection': '1; mode=block',
                            'Cache-Control': 'no-cache, no-store, max-age=0, must-revalidate',
                            'Pragma': 'no-cache',
                            'Expires': '0',
                            'X-Frame-Options': 'DENY',
                            'Content-Type': 'application/json',
                            'Transfer-Encoding': 'chunked',
                            'Date': 'Sat, 05 Nov 2022 08:33:59 GMT',
                            'Keep-Alive': 'timeout=60',
                            'Connection': 'keep-alive',
                        }
                        // "username": this.username,
                        // "password": this.passwor
                        // headers: {
                        //     'lang': 'en',
                        //     'versioncode': '11',
                        //     'clienttype': 'ios_jike_default'
                        // }
                    })
                    .then(response => (
                        console.log(response)
                    )).catch(error => console.log(error))
            },
        },
    }).mount('#app')
</script>
@endsection