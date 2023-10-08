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

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <h1 class="glasses-h1">All Glasses</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row categories">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <img src="https://glassesmart.pk/wp-content/uploads/2021/09/Tom-Ford-Ft-5608-Back-1-350x233.webp"
                    class="img-thumbnail" alt="..." />
                <h5>Rayban 2140</h5>
                <h4>Price: 10$</h4>
                <form name="glasses2" id="Rayban2140" method="post"
                    action="{{ route('member.store', ['id' => 'Rayban2140']) }}>

                    @csrf
                    <!-- {{ csrf_field() }} -->
                    <div class="values">
                    <input type="number" max="100" min="0" placeholder="quantity" id="name"
                        name="quantity" />

                    <button class="cart-button btn btn-info 1" type="submit" id="ajaxSubmit">
                        Add to Cart
                    </button>
            </div>
            </form>
        </div>
        <div class="col-xs-12
                            col-sm-6 col-md-3">
            <img src="https://glassesmart.pk/wp-content/uploads/2022/06/RB-2180-1-350x233.webp" class="img-thumbnail"
                alt="..." />
            <h5>Prada 2125</h5>
            <h4>Price: 20$</h4>
            <form name="glasses2" id="Prada2125" method="post" action="{{ route('member.store', ['id' => 'Prada2125']) }}">

                @csrf
                <!-- {{ csrf_field() }} -->
                <div class="values">
                    <input type="number" max="100" min="0" placeholder="quantity" id="Prada2125"
                        name="quantity" />

                    <button class="cart-button btn btn-info 1" type="submit" id="2">
                        Add to Cart
                    </button>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="https://glassesmart.pk/wp-content/uploads/2021/09/Tom-Ford-Ft-5608-Back-1-350x233.webp"
                class="img-thumbnail" alt="..." />
            <h5>Aariz 009</h5>
            <h4>Price: 30$</h4>
            <form name="glasses2" id="Prada2125" method="post" action="{{ route('member.store', ['id' => 'Aariz009']) }}">

                @csrf
                <!-- {{ csrf_field() }} -->
                <div class="values">
                    <input type="number" max="100" min="0" placeholder="quantity" id="Aariz 009"
                        name="quantity" />
                    <button class="cart-button btn btn-info 3" id="3" type="submit">
                        Add to Cart
                    </button>
                </div>
            </form>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <img src="https://glassesmart.pk/wp-content/uploads/2021/07/Porsche1983-1-350x233.webp" class="img-thumbnail"
                alt="..." />
            <h5>Rayban C1991</h5>
            <h4>Price: 40$</h4>
            <form name="glasses2" method="post" action="{{ route('member.store', ['id' => 'RaybanC1991']) }}">

                @csrf
                <!-- {{ csrf_field() }} -->
                <div class="values">
                    <input type="number" max="100" min="0" placeholder="quantity" id="Rayban C1991"
                        name="quantity" />
                    <button class="cart-button btn btn-info 4" id="4" type="submit"">
                        Add to Cart
                    </button>
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
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#ajaxSubmit').click(function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: '{{ URL::route('member.store', 'Rayban2140') }}',
                    dataType: 'json',
                    quantity: $('#quantity').val(),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log('response');

                    }
                });
            });
        });
    </script>
@endsection
