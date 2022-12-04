@extends('layouts.frontend')

@section('title')
Moyurakkhi | Checkout
@endsection


@section('content')

    <div class="py-3 mb-4 shadow-sm border-top viewbarcrumb">
        <div class="container">
            <h6 class="mb-0">
                <a class="anchor" href="{{ url('/') }}">
                    Home
                </a> /
                <a class="anchor" href="{{ url('cart') }}">
                    Cart /
                </a>
                <a class="anchor" href="">
                    Checkout
                </a>
            </h6>
        </div>
    </div>

    <div class="container my-5">
        <form action="{{ url('place-order') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control fname" value="{{ Auth::user()->name }}" name="fname" placeholder="Enter Your Fast Name">
                                    <span id="firstname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control lname" value="{{ Auth::user()->lname }}" name="lname" placeholder="Enter Your Last Name">
                                    <span id="lastname_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control email" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Your Email">
                                    <span id="email_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Phone Number</label>
                                    <input type="number" class="form-control phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Your Phone Number">
                                    <span id="phone_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Address 1</label>
                                    <input type="text" class="form-control address1" value="{{ Auth::user()->address1 }}" name="address1" placeholder="Enter Your Address 1">
                                    <span id="address1_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Address 2</label>
                                    <input type="text" class="form-control address2" value="{{ Auth::user()->address2 }}" name="address2" placeholder="Enter Your Address 2">
                                    <span id="address2_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">City</label>
                                    <input type="text" class="form-control city" value="{{ Auth::user()->city }}" name="city" placeholder="Enter Your City">
                                    <span id="city_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">State</label>
                                    <input type="text" class="form-control state" value="{{ Auth::user()->state }}" name="state" placeholder="Enter Your State">
                                    <span id="state_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Country</label>
                                    <input type="text" class="form-control country" value="{{ Auth::user()->country }}" name="country" placeholder="Enter Your Country">
                                    <span id="country_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Zip Code</label>
                                    <input type="text" class="form-control zip" value="{{ Auth::user()->zip }}" name="zip" placeholder="Enter Your Zip Code">
                                    <span id="zip_error" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Order Details</h6>
                            <hr>
                            @if ($cartitems->count() > 0)
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th class="text-center">Qty</th>
                                            <th class="text-center">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0; @endphp
                                        @foreach($cartitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td class="text-center">{{ $item->product_qty }}</td>
                                                <td class="text-center">{{ $item->products->selling_price }} Tk</td>
                                            </tr>
                                            @php $total += $item->products->selling_price * $item->product_qty ; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                                <h6 class="px-2 text-success">Grand Total - <span class="float-end me-4">{{ $total }} TK</span></h6>
                                <hr>
                                <button type="submit" class="btn btn-success w-100">Place Order | COD</button>
                                <button type="button" class="btn btn-primary mt-2 w-100 bKash_btn">Pay With bKash</button>
                            @else
                                <h4 class="text-center">No Products in Cart</h4>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
