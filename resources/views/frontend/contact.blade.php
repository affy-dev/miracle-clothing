@extends('frontend.layouts.app')
@section('content')
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <div class="mb-5">
                    <h6 class="text-primary mb-1">— Contact US</h6>
                    <h2 class="mb-0">We’d love to hear from you.</h2>
                </div>
                <form id="contact-form" class="row" method="post" action="php/contact.php">
                    <div class="messages"></div>
                    <div class="form-group col-md-6">
                        <label>First Name <span class="text-danger">*</span></label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name"
                            required="required" data-error="Name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Last Name <span class="text-danger">*</span></label>
                        <input id="form_name1" type="text" name="name" class="form-control" placeholder="Last Name"
                            required="required" data-error="Name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email Address <span class="text-danger">*</span></label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email"
                            required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Phone Number <span class="text-danger">*</span></label>
                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone"
                            required="required" data-error="Phone is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Message <span class="text-danger">*</span></label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4"
                            required="required" data-error="Please,leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-12 mt-4">
                        <button class="btn btn-primary btn-animated"><span>Send Messages</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 mt-6 mt-lg-0">
                <div class="shadow-sm rounded p-5">
                    <div class="mb-5">
                        <h6 class="text-primary mb-1">— Contact Info</h6>
                        <h4 class="mb-0">We Are here To help You</h4>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="mr-2"> <i class="las la-map ic-2x text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-dark">Store address</h6>
                            <p class="mb-0 text-muted">Miracle Clothing Pvt. Ltd.
                                Building A-10/2 Asmeeta Textile Park,
                                MIDC Addl. Kalyan Bhiwandi Indl. Area,
                                Village Kongaon, Taluka Bhiwandi, District
                                Thane-421311 Maharashtra India</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="mr-2"> <i class="las la-envelope ic-2x text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-dark">Email Us</h6>
                            <a class="text-muted" href="mailto:siddharth@miracle-clothing.com"> siddharth@miracle-clothing.com</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="mr-2"> <i class="las la-mobile ic-2x text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-dark">Phone Number</h6>
                            <a class="text-muted" href="tel:+912345678900">+91-9821155831</a>
                        </div>
                    </div>
                    <!-- <div class="d-flex mb-5">
                        <div class="mr-2"> <i class="las la-clock ic-2x text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-1 text-dark">Working Hours</h6>
                            <span class="text-muted">Mon - Fri: 10AM - 7PM</span>
                        </div>
                    </div> -->
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                    class="la la-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                    class="la la-dribbble"></i></a>
                        </li>
                        <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                    class="la la-instagram"></i></a>
                        </li>
                        <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                    class="la la-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a class="bg-white shadow-sm rounded p-2" href="#"><i
                                    class="la la-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection