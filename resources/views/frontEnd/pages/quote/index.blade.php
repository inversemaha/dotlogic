@extends('layouts.common')
@section('content')
    <div class="bg-gradient p-0 o-hidden" data-overlay>
        <section class="pb-0">
            <div class="container">
                <div class="text-white">
                    <div class="row section-title justify-content-center text-center">
                        <div class="col-md-9 col-lg-8 col-xl-7">
                            <h1 class="display-3">We’re here to help</h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9 col-md-11">
                        <form action="/contact/save" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="contact-name"/>
                                        <div class="invalid-feedback">
                                            Please type your name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="contact-email">Email Address</label>
                                        <input type="email" name="email" class="form-control" id="contact-email"
                                               placeholder="you@website.com"/>
                                        <div class="invalid-feedback">
                                            Please provide your email address.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="contact-company">Company (optional)</label>
                                        <input type="text" name="company_name" class="form-control" id="contact-company">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="contact-phone">Phone</label>
                                        <input type="tel" name="phone" class="form-control" id="contact-phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="planner-company">Address</label>
                                        <input type="text" name="address" class="form-control" id="planner-address">
                                        <div class="invalid-feedback">
                                            Please provide your company address.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-message">Message</label>
                                <textarea id="contact-message" name="bodyMessage" rows="10" class="form-control"></textarea>
                                <div class="invalid-feedback">
                                    Please tell us a little more.
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="d-none alert alert-success" role="alert" data-success-message>
                                        Thanks, a member of our team will be in touch shortly.
                                    </div>
                                    <div class="d-none alert alert-danger" role="alert" data-error-message>
                                        Please fill all fields correctly.
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary btn-loading" type="submit" >
                                            <!-- Icon for loading animation -->
                                            <svg class="icon bg-white" width="24px" height="24px" viewBox="0 0 24 24"
                                                 version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>Icon For Loading</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g>
                                                        <polygon points="0 0 24 0 24 24 0 24" opacity="0"></polygon>
                                                    </g>
                                                    <path
                                                        d="M12,4 L12,6 C8.6862915,6 6,8.6862915 6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,10.9603196 17.7360885,9.96126435 17.2402578,9.07513926 L18.9856052,8.09853149 C19.6473536,9.28117708 20,10.6161442 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(12.000000, 12.000000) scale(-1, 1) translate(-12.000000, -12.000000) "></path>
                                                </g>
                                            </svg>
                                            <span>Send Message</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="divider divider-bottom bg-white"></div>
        </section>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-auto" data-aos="fade-up">
                    <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
                        <h5>Email us</h5>
                        <a href="#" class="lead">dotlogic@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
                        <h5>Drop in</h5>
                        <address>
                            402/B Malibagh Chowdhury Para, Dhaka - 1217
                            <br/>
                            Bangladesh

                        </address>
                    </div>
                </div>
                <div class="col-md-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="px-md-4 px-lg-5 mb-5 mb-md-0">
                        <h5>Call any time</h5>
                        <a href="#" class="lead">+880167 22 20 108</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
