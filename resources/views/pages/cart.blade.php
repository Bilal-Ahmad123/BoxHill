@extends('layout.app')

@include('dashboard')

@section('content')
    <h1>Items bought by The user</h1>

    @foreach ($items as $item)
        @if ($item->item_quantity != 0)
            <div class="column">
                <div class="row">
                    <div class="col-md-3"> <a href="#"><img src={{ asset($item->picture_link) }} alt="Logo"></a>
                    </div>
                </div>
            </div>
            <span class="h5">Name:{{ $item->item_name }}</span>
            <span class="h4">Quantity:{{ $item->item_quantity }}</span>
            <br>
            <button> <a href="{{ route('cart.destroy', ['id' => $item->id]) }}" class="btn btn-danger">Remove Item -1</a>


                <button> <a href="{{ route('cart.update', ['id' => $item->id]) }} " class="btn btn-primary">Add Item +1</a>
                </button>
        @endif
        <br>
    @endforeach
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
