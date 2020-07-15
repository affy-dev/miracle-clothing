@extends('frontend.layouts.app')
@section('slider')
@include('frontend.partials.slider')
@endsection
@section('content')


<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Blog Card -->
                <div class="card border-0 bg-transparent">
                    <div class="card-body pt-5 px-0">
                        <h2>
                            Introduction
                        </h2>
                        <p>
                            Miracle Clothing Pvt. Ltd. was established with a vision to contribute to the evolving world of
                            fashion clothing. The company was started by a young and dynamic professionals eager to put
                            their creative ideas & skills to concrete form. This is result of sheer hard work and
                            determination that the company has succeeded in creating its own niche in highly fashion and
                            quality sensitive countries like U.K., EU, USA and South Africa.
                            Miracle Clothing is a complained factory and registered under SEDEX
                            Sedex Company Ref no.: ZC3596652
                            Sedex Site Ref no.: ZP3596679
                            Miracle Clothing believes in total quality management, design innovations, competitive
                            pricing, timely deliveries, flexibility and team-work , adaptation to new designs, colors &
                            technology and to achieve this it has a highly skilled and trained staff.
                            The product range includes all types of All types School, Corporate and Industrial uniforms.
                            made from All Wool, Poly Wool, Poly- viscose with or without Lycra and Cotton fabrics.
                            The company works hand in hand with nature and is very environment conscious,
                            which is why it produces Eco friendly products. It avoids use of AZO dyes and the
                            packing is done with special warnings.
                            With performance driven and reliable service, customer’s business needs are constantly
                            achieved. Our management team has a broad international experience and it is divided into
                            specialized teams to focus on each customer segment in order to deliver customers sourcing
                            objectives.
                        </p>
                    </div>
                </div>
                <!-- End Blog Card -->
            </div>
        </div>
    </div>
</section>

<section style="padding: 0rem 0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 mr-auto">
        <div class="shadow p-5">
          <div>
            
            <h2 class="mb-0">What do we manufacture!</h2>
          </div>
          
          
        </div>
      </div>
      <div class="col-lg-6 mt-5 mt-lg-0">
        <div class="owl-carousel no-pb owl-2 owl-loaded owl-drag" data-dots="false" data-nav="true" data-items="2" data-md-items="2" data-sm-items="1">
          
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-277px, 0px, 0px); transition: all 0.25s ease 0s; width: 1943px;"><div class="owl-item cloned" style="width: 277.5px;"><div class="item">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"><i class="lar la-heart"></i>
              </button>
              <a class="card-img-hover d-block" href="product-left-image.html">
                <img class="card-img-top card-img-back" src="{{asset('frontend/images/furniture/product/05.jpg')}}" alt="...">
                <img class="card-img-top card-img-front" src="{{asset('frontend/images/furniture/product/06.jpg')}}" alt="...">
              </a>
              <div class="card-info">
                <div class="card-body">
                  <div class="product-title"><a class="link-title" href="product-left-image.html">Uniform</a>
                  </div>
                  <!-- <div class="mt-1"> <span class="product-price"><del class="text-muted">$42.00</del> $37.00</span>
                    <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                    </div>
                  </div> -->
                </div>
                <!-- <div class="card-footer bg-transparent border-0">
                  <div class="product-link d-flex align-items-center justify-content-center">
                    <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="" type="button" data-original-title="Compare"><i class="las la-random"></i> 
                    </button>
                    <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                    </button>
                    <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                    </button>
                  </div>
                </div> -->
              </div>
            </div>
          </div></div><div class="owl-item cloned active" style="width: 277.5px;"><div class="item">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"><i class="lar la-heart"></i>
              </button>
              <a class="card-img-hover d-block" href="product-left-image.html">
                <img class="card-img-top card-img-back" src="{{asset('frontend/images/furniture/product/13.jpg')}}" alt="...">
                <img class="card-img-top card-img-front" src="{{asset('frontend/images/furniture/product/02.jpg')}}" alt="...">
              </a>
              <div class="card-info">
                <div class="card-body">
                  <div class="product-title"><a class="link-title" href="product-left-image.html">Apparels</a>
                  </div>
                  <!-- <div class="mt-1"> <span class="product-price"><del class="text-muted">$18.00</del> $15.00</span>
                    <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                    </div>
                  </div> -->
                </div>
                <!-- <div class="card-footer bg-transparent border-0">
                  <div class="product-link d-flex align-items-center justify-content-center">
                    <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="" type="button" data-original-title="Compare"><i class="las la-random"></i> 
                    </button>
                    <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                    </button>
                    <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                    </button>
                  </div>
                </div> -->
              </div>
            </div>
          </div></div>
          <div class="owl-item active" style="width: 277.5px;"><div class="item">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"><i class="lar la-heart"></i>
              </button>
              <a class="card-img-hover d-block" href="product-left-image.html">
                <img class="card-img-top card-img-back" src="{{asset('frontend/images/furniture/product/14.jpg')}}" alt="...">
                <img class="card-img-top card-img-front" src="{{asset('frontend/images/furniture/product/15.jpg')}}" alt="...">
              </a>
              <div class="card-info">
                <div class="card-body">
                  <div class="product-title"><a class="link-title" href="product-left-image.html">PPE Kits, Suits and Gowns</a>
                  </div>
                  <!-- <div class="mt-1"> <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                    <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                    </div>
                  </div> -->
                </div>
                <!-- <div class="card-footer bg-transparent border-0">
                  <div class="product-link d-flex align-items-center justify-content-center">
                    <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="" type="button" data-original-title="Compare"><i class="las la-random"></i> 
                    </button>
                    <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                    </button>
                    <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                    </button>
                  </div>
                </div> -->
              </div>
            </div>
          </div></div>


          <div class="owl-item active" style="width: 277.5px;"><div class="item">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="Add to wishlist"><i class="lar la-heart"></i>
              </button>
              <a class="card-img-hover d-block" href="product-left-image.html">
                <img class="card-img-top card-img-back" src="{{asset('frontend/images/furniture/product/14.jpg')}}" alt="...">
                <img class="card-img-top card-img-front" src="{{asset('frontend/images/furniture/product/15.jpg')}}" alt="...">
              </a>
              <div class="card-info">
                <div class="card-body">
                  <div class="product-title"><a class="link-title" href="product-left-image.html">Protective Fashion Mask</a>
                  </div>
                  <!-- <div class="mt-1"> <span class="product-price"><del class="text-muted">$35.00</del> $25.00</span>
                    <div class="star-rating"><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i><i class="las la-star"></i>
                    </div>
                  </div> -->
                </div>
                <!-- <div class="card-footer bg-transparent border-0">
                  <div class="product-link d-flex align-items-center justify-content-center">
                    <button class="btn btn-compare" data-toggle="tooltip" data-placement="top" title="" type="button" data-original-title="Compare"><i class="las la-random"></i> 
                    </button>
                    <button class="btn-cart btn btn-primary btn-animated mx-3" type="button"><i class="las la-shopping-cart mr-1"></i>
                    </button>
                    <button class="btn btn-view" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick View"><span data-target="#quick-view" data-toggle="modal"><i class="las la-eye"></i></span>
                    </button>
                  </div>
                </div> -->
              </div>
            </div>
          </div></div>
          
          </div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="la la-angle-left"><span></span></span></button><button type="button" role="presentation" class="owl-next"><span class="la la-angle-right"></span></button></div><div class="owl-dots disabled"></div></div>
      </div>
    </div>
  </div>
</section>

<section class="bg-light mt-n11 custom-pt-1">
  <div class="container text-center">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-12 col-md-10 col-lg-8">
        <div>
          <!-- <h6 class="text-primary mb-1">
                  — Testimonial
              </h6> -->
          <h2 class="mb-0">Manufacturing Unit</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="owl-carousel owl-center owl-2 owl-loaded owl-drag" data-center="true" data-dots="false" data-nav="true" data-items="3" data-md-items="2" data-sm-items="1">
        <div class="owl-stage-outer"><div class="owl-stage" style="transition: all 0s ease 0s; width: 3800px; transform: translate3d(-760px, 0px, 0px);"><div class="owl-item cloned" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/02.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Scott Jones</h5>
                  <small class="text-muted font-italic">- Supervisor</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/03.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Amber Holmes</h5>
                  <small class="text-muted font-italic">- Manager</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned active" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/02.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Scott Jones</h5>
                  <small class="text-muted font-italic">- Ceo</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item active center" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/01.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Ember Lana</h5>
                  <small class="text-muted font-italic">- Founder</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item active" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/02.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Scott Jones</h5>
                  <small class="text-muted font-italic">- Supervisor</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/03.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Amber Holmes</h5>
                  <small class="text-muted font-italic">- Manager</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/02.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Scott Jones</h5>
                  <small class="text-muted font-italic">- Ceo</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/01.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Ember Lana</h5>
                  <small class="text-muted font-italic">- Founder</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/02.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Scott Jones</h5>
                  <small class="text-muted font-italic">- Supervisor</small>
                </div>
              </div>
            </div>
          </div></div><div class="owl-item cloned" style="width: 380px;"><div class="item">
            <div class="card p-5 p-lg-8 bg-primary-soft border-0">
              <div>
                <img alt="Image" src="{{asset('frontend/images/thumbnail/02.jpg')}}" class="shadow-primary img-fluid rounded-circle d-inline">
              </div>
              <div class="card-body p-0 mt-5">
                <p class="text-muted">Ekocart Amazing E-commerce Template, clean code, Crative &amp; Modern design.</p>
                <div>
                  <h5 class="text-primary d-inline mb-0">Amber Holmes</h5>
                  <small class="text-muted font-italic">- Manager</small>
                </div>
              </div>
            </div>
          </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span class="la la-angle-left"><span></span></span></button><button type="button" role="presentation" class="owl-next"><span class="la la-angle-right"></span></button></div><div class="owl-dots disabled"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- 
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mr-auto">
                <div class="shadow p-5">
                    <div>
                        <h6 class="text-primary mb-1">
                            — Limited Offer
                        </h6>
                        <h2 class="mb-0">Exclusive Hot Deal Ends Soon!</h2>
                    </div>
                    <ul class="countdown list-inline d-flex my-5" data-countdown="2020/08/23">
                        <li><span>37</span>
                            <p>d</p>
                        </li>
                        <li><span>23</span>
                            <p>h</p>
                        </li>
                        <li><span>53</span>
                            <p>m</p>
                        </li>
                        <li><span>53</span>
                            <p>s</p>
                        </li>
                    </ul>
                    <div class="subscribe-form">
                        <form id="mc-form" class="row align-items-center no-gutters mb-3">
                            <div class="col">
                                <input value="" name="EMAIL" class="email form-control input-2 bg-white" id="mc-email"
                                    placeholder="Email Address" required="" type="email">
                            </div>
                            <div class="col-auto">
                                <input class="btn btn-primary overflow-auto" name="subscribe" value="Subscribe"
                                    type="submit">
                            </div>
                        </form> <small>Get started for 1 Month free trial No Purchace required.</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="owl-carousel no-pb owl-2 owl-loaded owl-drag" data-dots="false" data-nav="true"
                    data-items="2" data-md-items="2" data-sm-items="1">



                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-277px, 0px, 0px); transition: all 0.25s ease 0s; width: 1943px;">
                            <div class="owl-item cloned" style="width: 277.5px;">
                                <div class="item">
                                    <div class="card product-card">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to wishlist"><i
                                                class="lar la-heart"></i>
                                        </button>
                                        <a class="card-img-hover d-block" href="product-left-image.html">
                                            <img class="card-img-top card-img-back"
                                                src="assets/images/furniture/product/05.jpg" alt="...">
                                            <img class="card-img-top card-img-front"
                                                src="assets/images/furniture/product/06.jpg" alt="...">
                                        </a>
                                        <div class="card-info">
                                            <div class="card-body">
                                                <div class="product-title"><a class="link-title"
                                                        href="product-left-image.html">Wood Chair</a>
                                                </div>
                                                <div class="mt-1"> <span class="product-price"><del
                                                            class="text-muted">$42.00</del> $37.00</span>
                                                    <div class="star-rating"><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-0">
                                                <div
                                                    class="product-link d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-compare" data-toggle="tooltip"
                                                        data-placement="top" title="" type="button"
                                                        data-original-title="Compare"><i class="las la-random"></i>
                                                    </button>
                                                    <button class="btn-cart btn btn-primary btn-animated mx-3"
                                                        type="button"><i class="las la-shopping-cart mr-1"></i>
                                                    </button>
                                                    <button class="btn btn-view" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Quick View"><span data-target="#quick-view"
                                                            data-toggle="modal"><i class="las la-eye"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 277.5px;">
                                <div class="item">
                                    <div class="card product-card">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to wishlist"><i
                                                class="lar la-heart"></i>
                                        </button>
                                        <a class="card-img-hover d-block" href="product-left-image.html">
                                            <img class="card-img-top card-img-back"
                                                src="assets/images/furniture/product/13.jpg" alt="...">
                                            <img class="card-img-top card-img-front"
                                                src="assets/images/furniture/product/02.jpg" alt="...">
                                        </a>
                                        <div class="card-info">
                                            <div class="card-body">
                                                <div class="product-title"><a class="link-title"
                                                        href="product-left-image.html">Modern Armchair</a>
                                                </div>
                                                <div class="mt-1"> <span class="product-price"><del
                                                            class="text-muted">$18.00</del> $15.00</span>
                                                    <div class="star-rating"><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-0">
                                                <div
                                                    class="product-link d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-compare" data-toggle="tooltip"
                                                        data-placement="top" title="" type="button"
                                                        data-original-title="Compare"><i class="las la-random"></i>
                                                    </button>
                                                    <button class="btn-cart btn btn-primary btn-animated mx-3"
                                                        type="button"><i class="las la-shopping-cart mr-1"></i>
                                                    </button>
                                                    <button class="btn btn-view" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Quick View"><span data-target="#quick-view"
                                                            data-toggle="modal"><i class="las la-eye"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 277.5px;">
                                <div class="item">
                                    <div class="card product-card">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to wishlist"><i
                                                class="lar la-heart"></i>
                                        </button>
                                        <a class="card-img-hover d-block" href="product-left-image.html">
                                            <img class="card-img-top card-img-back"
                                                src="assets/images/furniture/product/14.jpg" alt="...">
                                            <img class="card-img-top card-img-front"
                                                src="assets/images/furniture/product/15.jpg" alt="...">
                                        </a>
                                        <div class="card-info">
                                            <div class="card-body">
                                                <div class="product-title"><a class="link-title"
                                                        href="product-left-image.html">Comfortable Armchair</a>
                                                </div>
                                                <div class="mt-1"> <span class="product-price"><del
                                                            class="text-muted">$35.00</del> $25.00</span>
                                                    <div class="star-rating"><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-0">
                                                <div
                                                    class="product-link d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-compare" data-toggle="tooltip"
                                                        data-placement="top" title="" type="button"
                                                        data-original-title="Compare"><i class="las la-random"></i>
                                                    </button>
                                                    <button class="btn-cart btn btn-primary btn-animated mx-3"
                                                        type="button"><i class="las la-shopping-cart mr-1"></i>
                                                    </button>
                                                    <button class="btn btn-view" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Quick View"><span data-target="#quick-view"
                                                            data-toggle="modal"><i class="las la-eye"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 277.5px;">
                                <div class="item">
                                    <div class="card product-card">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to wishlist"><i
                                                class="lar la-heart"></i>
                                        </button>
                                        <a class="card-img-hover d-block" href="product-left-image.html">
                                            <img class="card-img-top card-img-back"
                                                src="assets/images/furniture/product/05.jpg" alt="...">
                                            <img class="card-img-top card-img-front"
                                                src="assets/images/furniture/product/06.jpg" alt="...">
                                        </a>
                                        <div class="card-info">
                                            <div class="card-body">
                                                <div class="product-title"><a class="link-title"
                                                        href="product-left-image.html">Wood Chair</a>
                                                </div>
                                                <div class="mt-1"> <span class="product-price"><del
                                                            class="text-muted">$42.00</del> $37.00</span>
                                                    <div class="star-rating"><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-0">
                                                <div
                                                    class="product-link d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-compare" data-toggle="tooltip"
                                                        data-placement="top" title="" type="button"
                                                        data-original-title="Compare"><i class="las la-random"></i>
                                                    </button>
                                                    <button class="btn-cart btn btn-primary btn-animated mx-3"
                                                        type="button"><i class="las la-shopping-cart mr-1"></i>
                                                    </button>
                                                    <button class="btn btn-view" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Quick View"><span data-target="#quick-view"
                                                            data-toggle="modal"><i class="las la-eye"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 277.5px;">
                                <div class="item">
                                    <div class="card product-card">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to wishlist"><i
                                                class="lar la-heart"></i>
                                        </button>
                                        <a class="card-img-hover d-block" href="product-left-image.html">
                                            <img class="card-img-top card-img-back"
                                                src="assets/images/furniture/product/13.jpg" alt="...">
                                            <img class="card-img-top card-img-front"
                                                src="assets/images/furniture/product/02.jpg" alt="...">
                                        </a>
                                        <div class="card-info">
                                            <div class="card-body">
                                                <div class="product-title"><a class="link-title"
                                                        href="product-left-image.html">Modern Armchair</a>
                                                </div>
                                                <div class="mt-1"> <span class="product-price"><del
                                                            class="text-muted">$18.00</del> $15.00</span>
                                                    <div class="star-rating"><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-0">
                                                <div
                                                    class="product-link d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-compare" data-toggle="tooltip"
                                                        data-placement="top" title="" type="button"
                                                        data-original-title="Compare"><i class="las la-random"></i>
                                                    </button>
                                                    <button class="btn-cart btn btn-primary btn-animated mx-3"
                                                        type="button"><i class="las la-shopping-cart mr-1"></i>
                                                    </button>
                                                    <button class="btn btn-view" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Quick View"><span data-target="#quick-view"
                                                            data-toggle="modal"><i class="las la-eye"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 277.5px;">
                                <div class="item">
                                    <div class="card product-card">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to wishlist"><i
                                                class="lar la-heart"></i>
                                        </button>
                                        <a class="card-img-hover d-block" href="product-left-image.html">
                                            <img class="card-img-top card-img-back"
                                                src="assets/images/furniture/product/14.jpg" alt="...">
                                            <img class="card-img-top card-img-front"
                                                src="assets/images/furniture/product/15.jpg" alt="...">
                                        </a>
                                        <div class="card-info">
                                            <div class="card-body">
                                                <div class="product-title"><a class="link-title"
                                                        href="product-left-image.html">Comfortable Armchair</a>
                                                </div>
                                                <div class="mt-1"> <span class="product-price"><del
                                                            class="text-muted">$35.00</del> $25.00</span>
                                                    <div class="star-rating"><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-0">
                                                <div
                                                    class="product-link d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-compare" data-toggle="tooltip"
                                                        data-placement="top" title="" type="button"
                                                        data-original-title="Compare"><i class="las la-random"></i>
                                                    </button>
                                                    <button class="btn-cart btn btn-primary btn-animated mx-3"
                                                        type="button"><i class="las la-shopping-cart mr-1"></i>
                                                    </button>
                                                    <button class="btn btn-view" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Quick View"><span data-target="#quick-view"
                                                            data-toggle="modal"><i class="las la-eye"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 277.5px;">
                                <div class="item">
                                    <div class="card product-card">
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                            data-placement="left" title="" data-original-title="Add to wishlist"><i
                                                class="lar la-heart"></i>
                                        </button>
                                        <a class="card-img-hover d-block" href="product-left-image.html">
                                            <img class="card-img-top card-img-back"
                                                src="assets/images/furniture/product/05.jpg" alt="...">
                                            <img class="card-img-top card-img-front"
                                                src="assets/images/furniture/product/06.jpg" alt="...">
                                        </a>
                                        <div class="card-info">
                                            <div class="card-body">
                                                <div class="product-title"><a class="link-title"
                                                        href="product-left-image.html">Wood Chair</a>
                                                </div>
                                                <div class="mt-1"> <span class="product-price"><del
                                                            class="text-muted">$42.00</del> $37.00</span>
                                                    <div class="star-rating"><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i><i
                                                            class="las la-star"></i><i class="las la-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer bg-transparent border-0">
                                                <div
                                                    class="product-link d-flex align-items-center justify-content-center">
                                                    <button class="btn btn-compare" data-toggle="tooltip"
                                                        data-placement="top" title="" type="button"
                                                        data-original-title="Compare"><i class="las la-random"></i>
                                                    </button>
                                                    <button class="btn-cart btn btn-primary btn-animated mx-3"
                                                        type="button"><i class="las la-shopping-cart mr-1"></i>
                                                    </button>
                                                    <button class="btn btn-view" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Quick View"><span data-target="#quick-view"
                                                            data-toggle="modal"><i class="las la-eye"></i></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                                class="la la-angle-left"><span></span></span></button><button type="button"
                            role="presentation" class="owl-next"><span class="la la-angle-right"></span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection