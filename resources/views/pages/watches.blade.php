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
                <h1 class="glasses-h1">All Watches</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row categories">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://ae01.alicdn.com/kf/H77cdd4f1b4d44afcb3b07b975066f3bdy/2020-Minimalist-Men-s-Fashion-Ultra-Thin-Watches-ple-Men-Business-Stainless-Steel-Mesh-Belt-Quartz.jpg"
                    class="img-thumbnail" alt="..." />
                <h5>SVESTON LALA 360</h5>
                <h4>Price: 100$</h4>
                <form name="glasses1" id="GinzaGoldDiningArmchair" method="post"
                    action="{{ route('member.store', ['id' => 'SVESTONLALA360']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity" id="SVESTONLALA360"
                            name="quantity" />
                        <button class="cart-button btn btn-info" type="submit">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://static-01.daraz.pk/p/d49c09bd3cab5b4e6d9296de04beba20.jpg" class="img-thumbnail"
                    alt="..." />
                <h5>SVESTON BOOMSTON</h5>
                <h4>Price: 200$</h4>
                <form name="glasses1" id="GinzaGoldDiningArmchair" method="post"
                    action="{{ route('member.store', ['id' => 'SVESTONBOOMSTON']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity" id="SVESTONBOOMSTON"
                            name="quantity" />
                        <button class="cart-button btn btn-info" type="submit"">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://static-01.daraz.pk/p/e180816eb0b92bd5abf09b6fe3ae46cb.jpg" class="img-thumbnail"
                    alt="..." />
                <h5>HERITAGE 1921</h5>
                <h4>Price: 300$</h4>
                <form name="glasses1" id="HERITAGE1921" method="post"
                    action="{{ route('member.store', ['id' => 'HERITAGE1921']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity" id="HERITAGE1921"
                            name="quantity" />
                        <button class="cart-button btn btn-info" type="submit"">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://static-01.daraz.pk/p/6eeb712cd836b4343cb3503d35ec6e30.jpg" class="img-thumbnail"
                    alt="..." />
                <h5>AIR-KING</h5>
                <h4>Price: 400$</h4>
                <form name="glasses1" id="HERITAGE1921" method="post"
                    action="{{ route('member.store', ['id' => 'AIRKING']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity" id="AIRKING"
                            name="quantity" />
                        <button class="cart-button btn btn-info" type="submit"">
                            Add to Cart
                        </button>
                    </div>
                </form>
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
