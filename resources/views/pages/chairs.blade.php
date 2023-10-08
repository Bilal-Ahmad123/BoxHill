@extends('layout.app')

@include('dashboard')

@section('content')
    <header id="first-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <h1>BOXHILL</h1>
                </div>
                <div class="col-sm-12 col-md-4 search">
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
                <h1 class="glasses-h1">All Chairs</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row categories">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1580742487-resize.jpg?crop=1xw:1xh;center,top&resize=480:*"
                    class="img-thumbnail" alt="..." />
                <h5>Ginza Gold Dining</h5>
                <h4>Price: 400$</h4>
                <form name="glasses1" id="GinzaGoldDiningArmchair" method="post"
                    action="{{ route('member.store', ['id' => 'GinzaGoldDiningArmchair']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity"
                            id="GinzaGoldDiningArmchair" name="quantity" />
                        <button class="cart-button btn btn-info 1" type="submit" id="1">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-outdoor-chairs-1646349644.jpg?crop=0.505xw:1.00xh;0.236xw,0&resize=640:*"
                    class="img-thumbnail" alt="..." />
                <h5>Rubik Luxury Dining</h5>
                <h4>Price: 500$</h4>
                <form name="glasses1" id="RubikLuxuryDiningLounge" method="post"
                    action="{{ route('member.store', ['id' => 'RubikLuxuryDiningLounge']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity" name="quantity"
                            id="RubikLuxuryDiningLounge" />
                        <button class="cart-button btn btn-info 1" type="submit" id="1">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1613647858-JeromeDeskChair.jpg?crop=0.910xw:0.910xh;0.0689xw,0.0833xh&resize=768:*"
                    class="img-thumbnail" alt="..." />
                <h5>Tulip Padded Dining Chair</h5>
                <h4>Price: 600$</h4>
                <form name="glasses1" id="TulipPaddedDiningChair" method="post"
                    action="{{ route('member.store', ['id' => 'TulipPaddedDiningChair']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity"
                            id="TulipPaddedDiningChair" name="quantity" />
                        <button class="cart-button btn btn-info" type="submit"">
                            Add to Cart
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1647381285-5059413396021_1_640x640.jpg?crop=1xw:1.00xh;center,top&resize=768:*"
                    class="img-thumbnail" alt="..." />
                <h5>Ester Gold Velvet Chair</h5>
                <h4>Price: 700$</h4>
                <form name="glasses1" id="EsterGoldVelvetChair" method="post"
                    action="{{ route('member.store', ['id' => 'EsterGoldVelvetChair']) }}">

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                        <input type="number" max="100" min="0" placeholder="quantity" id="EsterGoldVelvetChair"
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
