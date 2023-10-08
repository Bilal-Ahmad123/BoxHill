@extends('layout.app')

@section('content')
    <div id="stock-div">
        <p id="stock-p">All In Stock</p>
    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> × </a>
        <a href="#Glasses">Glasses</a>
        <a href="#Chairs">Watches</a>
        <a href="#Shirts">Chairs</a>
        <a href="#Watches">Shirts</a>
    </div>

    <header id="first-header">
        <div class="container">
            <div class="row sticky-row">
                <div class="col-md-8">
                    <h1>BOXHILL</h1>
                </div>
                <div class="col-md-4 search">
                    <input type="search" placeholder="What are you looking for?" />
                    <button onclick="location.href='{{ url('cart') }}'">
                        <i class="fa fa-shopping-cart" style="font-size: 24px">
                            <a href="{{ url('cart.show') }}"></a>
                        </i>
                    </button>
                </div>
            </div>
        </div>
    </header>



    <div class="image">
        <img src="https://cdn.shopify.com/s/files/1/0020/9417/0221/files/Boxhill-with-fire_1583x636_crop_center.jpg?v=1661894554"
            alt="" srcset="" class="img-fluid" />
        <h1 class="modern">Prepare for Fall with <br />Modern Style</h1>
    </div>

    <div class="container pictures">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <a href='/glasses' id="Glasses">
                    <img src="https://oss-us.xorder.com.cn/globale/image/US_Los_Angeles/2063/oss/alibabaproduct/8edd8bb4d7fdee7eab491179838d6889.jpg?x-oss-process=image/resize,m_pad,h_500,w_500/format,webp"
                        class="img-thumbnail" alt="..." />
                </a>
                <h5> Glasses</h5>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="/chairs" id="Chairs">
                    <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/screen-shot-2022-02-28-at-1-40-21-pm-1646077250.png?crop=1.00xw:1.00xh;0,0&resize=640:*"
                        class="img-thumbnail" alt="..." />
                </a>
                <h5>Chairs</h5>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="/shirts" id="Shirts">
                    <img src="https://static-01.daraz.pk/p/a5d35ba48848ad1505231d4b080d9a08.jpg" class="img-thumbnail"
                        alt="..." />
                </a>
                <h5>Shirts</h5>
            </div>

            <div class="col-sm-6 col-md-3">
                <a href="/watches" id="Watches">
                    <img src="https://cdn.shopify.com/s/files/1/0003/5815/4293/products/Lala360sainless2_1200x.png?v=1658699137"
                        class="img-thumbnail" alt="..." />
                </a>
                <h5>Watches</h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 jumbotrons">
                <div class="jumbotron">
                    <div>
                        <h6 class="boxhill-header">BoxHill Trade</h6>
                        <p>
                            We are devoted to supporting trade professionals who seek the
                            best quality design and materials for outdoor projects.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <div>
                        <h6 class="boxhill-header">Design Services</h6>
                        <p>
                            Get help selecting products that fit your space and climate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-div">
            <div class="container">
                <div class="row footer">
                    <div class="col-sm-12 col-md-6">
                        <ul class="footer-li">
                            <li class="services"><b>Services</b></li>
                            <li>E-Commerce Store</li>
                            <li>Products</li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <ul class="footer-li">
                            <li class="about"><b>About</b></li>
                            <li>Company</li>
                            <li>Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <h6>Copyright © 2022 Boxhill & Co., LLC.</h6>
        </div>
    </footer>
@endsection
