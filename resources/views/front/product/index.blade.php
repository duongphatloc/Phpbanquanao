@extends('layouts.app')
@section('title', 'product')
@section('body')

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text" />
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            @foreach ($guarded['products'] as $product)
                                <div class="list-group list-group-collapse list-group-sm list-group-tree"
                                    id="list-group-men" data-children=".sub-men">



                                    <a href="#" class="list-group-item list-group-item-action">
                                        {{ $product->getProductCategory->getName() }}<small class="text-muted">(150)
                                        </small></a>


                                </div>
                            @endforeach
                        </div>
                        <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly
                                        style="border: 0; color: #fbb714; font-weight: bold" />
                                    <button class="btn hvr-hover" type="submit">Filter</button>
                                </p>
                            </div>
                        </div>
                        <div class="filter-brand-left">
                            <div class="title-left">
                                <h3>Brand</h3>
                            </div>
                            <div class="brand-box">
                                <ul>
                                    <li>
                                        {{-- @foreach ($guarded['products'] as $product)
                    @if ($product->brand()->getName())

                      <div class="radio radio-danger">
                        <input
                          name="survey"
                          id="Radios1"
                          value="Yes"
                          type="radio"
                        />
                        <label for="Radios1">{{$product->brand()->getName()}}  </label>
                      </div>
                      @endif
                     
                 @endforeach --}}




                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control"
                                        data-placeholder="$ USD">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Popularity</option>
                                        <option value="2">High Price → High Price</option>
                                        <option value="3">Low Price → High Price</option>
                                        <option value="4">Best Selling</option>
                                    </select>
                                </div>
                                <p>Showing all 4 results</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab">
                                            <i class="fa fa-th"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab">
                                            <i class="fa fa-list-ul"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row product-categorie-box">

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">

                                        @foreach ($guarded['products'] as $product)
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">

                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="sale">Sale</p>
                                                        </div>
                                                        @if ($product->getImage())
                                                            <img src="front/img/products/{{ $product->getImage() }}"
                                                                class="img-fluid" alt="Image" />
                                                        @endif
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li>
                                                                    <a data-toggle="tooltip" data-placement="right"
                                                                        title="View"><i class="fas fa-eye"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip"
                                                                        data-placement="right" title="Compare"><i
                                                                            class="fas fa-sync-alt"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip"
                                                                        data-placement="right" title="Add to Wishlist"><i
                                                                            class="far fa-heart"></i></a>
                                                                </li>
                                                            </ul>

                                                            <p class="card-text">
                                                            <form
                                                                action="{{ route('front.cart.cart.add', ['id' => $product->getId()]) }}"
                                                                method="POST">
                                                                <div class="row">
                                                                    @csrf
                                                                    <div class="col-auto">
                                                                        <div class="input-group col-auto">
                                                                            <div class="input-group-text">Quantity</div>
                                                                            <input type="number" min="1"
                                                                                max="10"
                                                                                class="form-control quantity-input"
                                                                                name="quantity" value="1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <button class="btn bg-primary text-white"
                                                                            type="submit">Add to cart</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            </p>


                                                        </div>

                                                    </div>


                                                    <div class="why-text">
                                                        <h4>{{ $product->getName() }}</h4>
                                                        <h4>{{ $product->getDescription() }}</h4>
                                                        <h5>{{ $product->getPrice() }}</h5>
                                                        <h5></h5>
                                                    </div>


                                                </div>

                                            </div>
                                        @endforeach




                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Shop Page -->

        @endsection
