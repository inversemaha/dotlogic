@extends('layouts.common')
@section('content')

    <br><br><br><br>
    <section class="row no-gutters p-0 border-top border-bottom">
        <div class="col-lg-6">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col col-md-10 col-xl-9 text-center text-lg-left">
                            <h1 class="display-3">Contact Us</h1>
                            <address class="lead mb-5">
                                <p>402/B Malibagh Chowdhury Para</p>
                                <p>Dhaka - 1217</p>
                                <p>Bangladesh</p>

                            </address>
                            <div class="d-flex flex-column justify-content-center justify-content-lg-start">
                                <div class="mx-3 mx-lg-0 mr-lg-5 mb-4">
                                    <h5>Email us</h5>
                                    <a href="#" class="lead">dotlogic@gmail.com</a>
                                </div>
                                <div class="mx-3 mx-lg-0 mr-lg-5 mb-4">
                                    <h5>Call any time</h5>
                                    <a href="tel:+8801672220108" class="lead">+880167 22 20 108</a>
                                </div>
                                <div class="mx-3 mx-lg-0 mr-lg-5 mb-4">
                                    <h5>Get in touch</h5>
                                    <a href="#contact_form" class="lead">Leave a message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-6">
            <div class="divider divider-side d-none d-lg-block transform-flip-y"></div>
            <div class="min-vh-30 h-100 w-100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.23967585000318!2d90.41641863551233!3d23.75326928805225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b87cec02b5e1%3A0x54bec4d0f2c35bb6!2sMalibagh%20Chowdhury%20Para%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1579211229376!5m2!1sen!2sbd"
                    frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen="true"></iframe>
            </div>
        </div>
    </section>
    <section class="bg-light pb-0" id="contact_form">
        <div class="container">
            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h3 class="display-4">Get in touch</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-8">
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
        <div class="divider divider-bottom bg-primary-3"></div>
    </section>

@endsection
