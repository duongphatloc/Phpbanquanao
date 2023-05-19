@extends('layouts.app')
@section('title', 'Cart')
@section('body')

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th>ID</th>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                   
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guarded['products'] as $product)
                                    <tr>
                                      <td class="price-pr">
                                        <p>{{ $product->getId() }}</p>
                                    </td>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                                <img class="img-fluid" src="front/img/products/{{ $product->getImage() }}"
                                                    alt="" />
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="#"> {{ $product->getName() }} </a>
                                        </td>
                                        <td class="price-pr">
                                            <p>{{ $product->getPrice() }}</p>
                                        </td>
                                        <td class="quantity-box">
                                            <input
                                              
                                                size="4"
                                                value="{{ session('products')[$product->getId()] }}"
                                              
                                             
                                              />
                                            
                                        </td>

                                        <td class="remove-pr">
                                            <a href="{{ route('front.cart.cart.delete') }}">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code"
                                type="text" />
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">
                                    Apply Coupon
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit" />
                    </div>
                </div> --}}
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        {{-- <div class="d-flex">
                <h4>Sub Total</h4>
                <div class="ml-auto font-weight-bold">$ 130</div>
              </div>
              <div class="d-flex">
                <h4>Discount</h4>
                <div class="ml-auto font-weight-bold">$ 40</div>
              </div>
              <hr class="my-1" />
              <div class="d-flex">
                <h4>Coupon Discount</h4>
                <div class="ml-auto font-weight-bold">$ 10</div>
              </div>
              <div class="d-flex">
                <h4>Tax</h4>
                <div class="ml-auto font-weight-bold">$ 2</div>
              </div> --}}
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold">Free</div>
                        </div>
                        <hr />
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5">{{ $guarded['total'] }}</div>
                        </div>
                        <hr />
                    </div>
                </div>
                @if(count($guarded['products'])>0)
                <div class="col-12 d-flex shopping-box">
                    <a href="{{ route('front.cart.purchase')}}" class="ml-auto btn hvr-hover">purchase</a>
                </div>

                <div class="col-12 d-flex shopping-box">
                    <a href="{{ route('front.checkout')}}" class="ml-auto btn hvr-hover">Checkout</a>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End Cart -->

@endsection
