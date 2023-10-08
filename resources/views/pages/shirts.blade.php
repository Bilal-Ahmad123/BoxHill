@extends('layout.app')

@include('dashboard')

@section('content')
    <header id="first-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1>BOXHILL</h1>
                </div>
                <div class="col-md-4 search">
                    <input type="search" placeholder="What are you looking for?" />
                </div>
            </div>
        </div>
    </header>

    <nav>
        <ul>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="./labmid.html">
                            <li>Home</li>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <li>Contact Us</li>
                    </div>
                    <div class="col-md-3">
                        <li>Help</li>
                    </div>
                    <div class="col-md-3">
                        <li>Categories</li>
                    </div>
                </div>
            </div>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 class="glasses-h1">All Shirts</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row categories">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://cdn.shopify.com/s/files/1/0646/2563/9639/collections/Red_Navy_Blue_Checkered_Shirt_Brumano_Pakistan_1.jpg?v=1667051158"
                    class="img-thumbnail" alt="..." />
                <h5>Brown Striped Button Shirt</h5>

                <h4>Price: 10$</h4>
                <form name="glasses1" id="GinzaGoldDiningArmchair" method="post"
                    action="{{ route('member.store', ['id' => 'BrownBoldStripedButtonShirt']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity"
                            id="BrownBoldStripedButtonShirt" name="quantity" />
                        <button class="cart-button btn btn-info" type="submit">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://cdn.shopify.com/s/files/1/0646/2563/9639/products/Black-Blue-Viscose-Printed-Half-Sleeve-Shirt-Brumano-Pakistan-2_400x.jpg?v=1656324029"
                    class="img-thumbnail" alt="..." />
                <h5>Grey Checkered Shirt</h5>
                <h4>Price: 20$</h4>
                <form name="glasses1" id="GinzaGoldDiningArmchair" method="post"
                    action="{{ route('member.store', ['id' => 'GreyTealBlueCheckeredShirt']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity"
                            id="GreyTealBlueCheckeredShirt" name="quantity" />
                        <button class="cart-button btn btn-info" type="submit"">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://cdn.shopify.com/s/files/1/0646/2563/9639/products/Dark-Maroon-Herringbone-Pattern-Formal-Shirt-Brumano-Pakistan-1-1_400x.jpg?v=1656323924"
                    class="img-thumbnail" alt="..." />
                <h5>Pink Checkered Shirt</h5>
                <h4>Price: 30$</h4>
                <form name="glasses1" id="GinzaGoldDiningArmchair" method="post"
                    action="{{ route('member.store', ['id' => 'PinkGreyCheckeredShirt']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity"
                            id="PinkGreyCheckeredShirt" name="quantity" />
                        <button class="cart-button btn btn-info" type="submit"">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://cdn.shopify.com/s/files/1/0646/2563/9639/products/Blue-Vibrant-Floral-Printed-Shirt-Brumano-Pakistan-1_400x.jpg?v=1656324092"
                    class="img-thumbnail" alt="..." />
                <h5>Blue Vibrant Floral Shirt</h5>
                <h4>Price: 40$</h4>
                <form name="glasses1" id="BlueVibrantFloralPrintedShirt" method="post"
                    action="{{ route('member.store', ['id' => 'BlueVibrantFloralPrintedShirt']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity"
                            id="BlueVibrantFloralPrintedShirt" name="quantity" />
                        <button class="cart-button btn btn-info" type="submit"">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <button onclick="carts()">Cart</button>
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
