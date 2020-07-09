@extends('frontend.layouts.app')
@section('slider')
    @include('frontend.partials.slider')
@endsection
@section('content')

<!--product start-->
<section>
    <div class="container-fluid px-lg-8">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8 col-md-10">
                <div class="mb-8">
                    <!-- <h6 class="text-primary mb-1">
                        — New Collection
                    </h6> -->
                    <h2 class="mb-0">Trending Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="lar la-heart"></i>
                    </button>
                    <a class="card-img-hover d-block" href="product-left-image.html">
                        <img class="card-img-top card-img-back" src="{{asset('frontend/images/product/01.jpg')}}" alt="...">
                        <img class="card-img-top card-img-front" src="{{asset('frontend/images/product/02.jpg')}}" alt="...">
                    </a>
                    <div class="card-info">
                        <div class="card-body">
                            <div class="product-title"><a class="link-title" href="product-left-image.html">Women Lather
                                    Jacket</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$35.00</del>
                                    $25.00</span>
                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top"
                                    title="Compare" type="button"><i class="las la-random"></i>
                                </button>
                                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i
                                        class="las la-shopping-cart mr-1"></i>
                                </button>
                                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                                    title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i
                                            class="las la-eye"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-8 mt-md-0">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="lar la-heart"></i>
                    </button>
                    <a class="card-img-hover d-block" href="product-left-image.html">
                        <img class="card-img-top card-img-back" src="{{asset('frontend/images/product/03.jpg')}}" alt="...">
                        <img class="card-img-top card-img-front" src="{{asset('frontend/images/product/04.jpg')}}" alt="...">
                    </a>
                    <div class="card-info">
                        <div class="card-body">
                            <div class="product-title"><a class="link-title" href="product-left-image.html">Women
                                    Sweater</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$24.00</del>
                                    $18.00</span>
                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top"
                                    title="Compare" type="button"><i class="las la-random"></i>
                                </button>
                                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i
                                        class="las la-shopping-cart mr-1"></i>
                                </button>
                                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                                    title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i
                                            class="las la-eye"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-8 mt-lg-0">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="lar la-heart"></i>
                    </button>
                    <a class="card-img-hover d-block" href="product-left-image.html">
                        <img class="card-img-top card-img-back" src="{{asset('frontend/images/product/05.jpg')}}" alt="...">
                        <img class="card-img-top card-img-front" src="{{asset('frontend/images/product/06.jpg')}}" alt="...">
                    </a>
                    <div class="card-info">
                        <div class="card-body">
                            <div class="product-title"><a class="link-title" href="product-left-image.html">Gold Framed
                                    Sunglasses</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$12.00</del>
                                    $9.00</span>
                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top"
                                    title="Compare" type="button"><i class="las la-random"></i>
                                </button>
                                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i
                                        class="las la-shopping-cart mr-1"></i>
                                </button>
                                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                                    title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i
                                            class="las la-eye"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-8 mt-lg-0">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="lar la-heart"></i>
                    </button>
                    <a class="card-img-hover d-block" href="product-left-image.html">
                        <img class="card-img-top card-img-back" src="{{asset('frontend/images/product/07.jpg')}}" alt="...">
                        <img class="card-img-top card-img-front" src="{{asset('frontend/images/product/08.jpg')}}" alt="...">
                    </a>
                    <div class="card-info">
                        <div class="card-body">
                            <div class="product-title"><a class="link-title" href="product-left-image.html">Unpaired
                                    Running Shoe</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$32.00</del>
                                    $26.00</span>
                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top"
                                    title="Compare" type="button"><i class="las la-random"></i>
                                </button>
                                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i
                                        class="las la-shopping-cart mr-1"></i>
                                </button>
                                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                                    title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i
                                            class="las la-eye"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-8">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="lar la-heart"></i>
                    </button>
                    <a class="card-img-hover d-block" href="product-left-image.html">
                        <img class="card-img-top card-img-back" src="{{asset('frontend/images/product/09.jpg')}}" alt="...">
                        <img class="card-img-top card-img-front" src="{{asset('frontend/images/product/10.jpg')}}" alt="...">
                    </a>
                    <div class="card-info">
                        <div class="card-body">
                            <div class="product-title"><a class="link-title" href="product-left-image.html">Luxury
                                    Fashion Bag</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$19.00</del>
                                    $13.00</span>
                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top"
                                    title="Compare" type="button"><i class="las la-random"></i>
                                </button>
                                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i
                                        class="las la-shopping-cart mr-1"></i>
                                </button>
                                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                                    title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i
                                            class="las la-eye"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-8">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="lar la-heart"></i>
                    </button>
                    <a class="card-img-hover d-block" href="product-left-image.html">
                        <img class="card-img-top card-img-back" src="{{asset('frontend/images/product/11.jpg')}}" alt="...">
                        <img class="card-img-top card-img-front" src="{{asset('frontend/images/product/12.jpg')}}" alt="...">
                    </a>
                    <div class="card-info">
                        <div class="card-body">
                            <div class="product-title"><a class="link-title" href="product-left-image.html">Bright
                                    Hipster Cloth</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$42.00</del>
                                    $37.00</span>
                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top"
                                    title="Compare" type="button"><i class="las la-random"></i>
                                </button>
                                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i
                                        class="las la-shopping-cart mr-1"></i>
                                </button>
                                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                                    title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i
                                            class="las la-eye"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-8">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="lar la-heart"></i>
                    </button>
                    <a class="card-img-hover d-block" href="product-left-image.html">
                        <img class="card-img-top card-img-back" src="{{asset('frontend/images/product/13.jpg')}}" alt="...">
                        <img class="card-img-top card-img-front" src="{{asset('frontend/images/product/14.jpg')}}" alt="...">
                    </a>
                    <div class="card-info">
                        <div class="card-body">
                            <div class="product-title"><a class="link-title" href="product-left-image.html">Men's Brand
                                    Tshirts</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$18.00</del>
                                    $15.00</span>
                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top"
                                    title="Compare" type="button"><i class="las la-random"></i>
                                </button>
                                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i
                                        class="las la-shopping-cart mr-1"></i>
                                </button>
                                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                                    title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i
                                            class="las la-eye"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 mt-8">
                <div class="card product-card">
                    <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left"
                        title="Add to wishlist"><i class="lar la-heart"></i>
                    </button>
                    <a class="card-img-hover d-block" href="product-left-image.html">
                        <img class="card-img-top card-img-back" src="{{asset('frontend/images/product/15.jpg')}}" alt="...">
                        <img class="card-img-top card-img-front" src="{{asset('frontend/images/product/16.jpg')}}" alt="...">
                    </a>
                    <div class="card-info">
                        <div class="card-body">
                            <div class="product-title"><a class="link-title" href="product-left-image.html">Crewneck
                                    Sweatshirt</a>
                            </div>
                            <div class="mt-1"> <span class="product-price"><del class="text-muted">$26.00</del>
                                    $22.00</span>
                                <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i
                                        class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-transparent border-0">
                            <div class="product-link d-flex align-items-center justify-content-center">
                                <button class="btn btn-compare" data-toggle="tooltip" data-placement="top"
                                    title="Compare" type="button"><i class="las la-random"></i>
                                </button>
                                <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i
                                        class="las la-shopping-cart mr-1"></i>
                                </button>
                                <button class="btn btn-view" data-toggle="tooltip" data-placement="top"
                                    title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i
                                            class="las la-eye"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--product end-->

@endsection