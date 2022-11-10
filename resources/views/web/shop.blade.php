@extends('._layout.layout')
@section('title', 'shop')

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
                        <li v-for="category of categories" v-text="category.categoryName"></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="items">
            <div class="row product-lists">
                <div v-for="product of products" class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single_product.blade.php">
                                <!-- <img 
                                v-bind:src="'/images/products/' + product.image"
                                class="product_img" alt=""> -->
                                <img v-bind:src="'/images/products/none.png'"
                                class="product_img" alt="">
                            </a>
                        </div>
                        <h3 v-text="product.productName"></h3>
                        <p class="product-price" v-html="`<span>Per Kg</span>`+product.price"></p>
                        <a class="cart-btn btnAddToCart"><i class="fas fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                    </div>
                </div>
            </div>  
        </section>        

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    <ul>
                        <li><a @click="previous()">Prev</a></li>
                        <li v-for="i in totalPage":key="i">
                            <a v-if="page == i" class="active" v-text="i"></a>
                            <a v-if="page != i" v-text="i"></a>
                        </li>
                        <li><a @click="next()">Next</a></li>
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
                        <img src="{{asset('images/company-logos/1.png')}}" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="{{asset('images/company-logos/2.png')}}" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="{{asset('images/company-logos/3.png')}}" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="{{asset('images/company-logos/4.png')}}" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="{{asset('images/company-logos/5.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->
@endsection

@section('vue')
<script>
    const {
        createApp
    } = Vue
    createApp({
        data() {
            return {
            page:1,
            size:6,
            totalPage:0,
            products: [],
            categories: [],
            errors: []
            }
        },
        created() {
            axios.get('https://watchshop-doan.herokuapp.com/api/product/free/get-all/'+this.page+'/'+this.size)
                .then(response => {                    
                    console.log(response);
                    this.page=1;
                    this.totalPage=response.data.totalPage;
                    this.products=response.data.data;
                    
                })
                axios.get('http://watchshop-doan.herokuapp.com/api/categories/free/get-all/1/100')
                        .then(response => {
                            console.log("categories:",response);
                            this.categories=response.data;
                            console.log("this.categories:",this.categories);
                        })
            },
        methods: {
            next() {
                if(this.page < this.totalPage){
                    this.page+=1;
                }else{
                    this.page=1;
                }  
                axios
                .get('http://watchshop-doan.herokuapp.com/api/product/free/get-all/'+this.page+'/'+this.size)
                .then(response => {
                    console.log(response);
                    this.totalPage=response.data.totalPage;
                    this.products=response.data.data;
                })                   
            },
            previous() {
                if(this.page > 0){
                    this.page-=1;
                }else{
                    this.page=this.totalPage;
                }
                axios
                .get('https://watchshop-doan.herokuapp.com/api/product/free/get-all/'+this.page+'/'+this.size)
                .then(response => {
                    console.log(response);
                    this.totalPage=response.data.totalPage;
                    this.products=response.data.data;
                })                
            }
        },
    }).mount('#app')
</script>
@endsection