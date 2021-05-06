@extends('layouts.common')

@section('content')
{{--Header Section Srart--}}
    <div data-overlay class="bg-primary-3 jarallax text-white" data-jarallax data-speed="0.2">
        <img src="/assets/img/heros/hero-3.jpg" alt="Background" class="jarallax-img opacity-30">
        <section class="pb-0">
            <div class="container pb-5">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-8 col-lg-10 col-md-11">
                        <a data-fancybox href="https://vimeo.com/166034462#t=32s"
                           class="btn btn-lg btn-light rounded-circle mb-4 mb-md-5" data-aos="zoom-in"
                           data-aos-delay="400">
                            <img src="/assets/img/icons/interface/icon-media-play.svg" alt="Media Play Icon"
                                 class="icon icon-lg bg-dark pl-1" data-inject-svg>
                        </a>
                        <h1 class="display-3" data-aos="fade-up" data-aos-delay="100">Jumpstart your launch</h1>
                        <p class="lead" data-aos="fade-up" data-aos-delay="200">
                            Berspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam.
                        </p>
                        <div class="d-flex flex-column flex-sm-row justify-content-center mt-4 mt-md-5"
                             data-aos="fade-up" data-aos-delay="300">
                            <a href="#" class="btn btn-primary btn-lg mx-sm-2 my-1 my-sm-0">View Demos</a>
                            <a href="#" class="btn btn-outline-light btn-lg mx-sm-2 my-1 my-sm-0">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider divider-bottom bg-white"></div>
        </section>
    </div>
{{--Header Section End--}}

{{--How we do things differently Start--}}
    <section class="o-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-lg-0 order-lg-2 pl-lg-5 pl-xl-0">
                    <div>
                        <h2 class="h1 text-center text-lg-left">Here's how we do things differently</h2>
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                            <div class="my-4">
                                <div class="d-flex">
                                    <div class="mr-3 mr-md-4">
                                        <img src="/assets/img/icons/theme/navigation/route.svg" alt="Binoculars icon"
                                             class="icon bg-primary" data-inject-svg>
                                    </div>
                                    <div>
                                        <h5>Fully Responsive</h5>
                                        <div>
                                            Ned ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque Arya.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="d-flex">
                                    <div class="mr-3 mr-md-4">
                                        <img src="/assets/img/icons/theme/layout/layout-left-panel-2.svg"
                                             alt="Layouts icon" class="icon bg-primary" data-inject-svg>
                                    </div>
                                    <div>
                                        <h5>Multiple Layouts</h5>
                                        <div>
                                            Non pulvinar neque laoreet suspendisse interdum Catelyn libero id. Olenna
                                            imp leo in vitae turpis massa. Sapien habitant Tyrion.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-6 col-xl-5 order-lg-1">
                    <img src="/assets/img/illustrations/illustration-3.svg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
{{--How we do things differently End--}}

{{--How We Work Start--}}
    <section class="p-0 bg-light">
        <div class="container">
            <div class="row section-title justify-content-center text-center" style="margin-bottom: 30px;">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h2 class="display-4"># How We Work </h2>
                </div>
            </div>
            <div class="row align-items-center justify-content-around">
                <div class="col-md-9 col-lg-6 col-xl-5 mb-4 mb-md-5 mb-lg-0 pl-lg-5 pl-xl-0">

                    <div id="faq-accordion">
                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-1" data-toggle="collapse" role="button" aria-expanded="false"
                               class="p-3 p-md-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 mr-2">Requirement Analysis</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" class="injected-svg icon icon-sm"
                                         data-src="/assets/img/icons/interface/icon-caret-right.svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M14.376 11.584C14.6728 11.7819 14.6728 12.2181 14.376 12.416L9.77735 15.4818C9.44507 15.7033 9 15.4651 9 15.0657L9 8.93426C9 8.53491 9.44507 8.29671 9.77735 8.51823L14.376 11.584Z"
                                            fill="#2C3038"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="collapse" id="accordion-1" data-parent="#faq-accordion">
                                <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    Our team identifies the requirement in terms of customer’s business policy. If it
                                    conflicts with our ready product, we customize it as per client’s requirement to
                                    built
                                    perfect solution.
                                    <a href="contact.php">Let's meet</a>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-2" data-toggle="collapse" role="button" aria-expanded="false"
                               class="p-3 p-md-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 mr-2">Planning</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" class="injected-svg icon icon-sm"
                                         data-src="/assets/img/icons/interface/icon-caret-right.svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M14.376 11.584C14.6728 11.7819 14.6728 12.2181 14.376 12.416L9.77735 15.4818C9.44507 15.7033 9 15.4651 9 15.0657L9 8.93426C9 8.53491 9.44507 8.29671 9.77735 8.51823L14.376 11.584Z"
                                            fill="#2C3038"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="collapse" id="accordion-2" data-parent="#faq-accordion">
                                <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    We plan for the quality product based on the requirement analysis and identify the
                                    risks
                                    associated with the project.
                                </div>
                            </div>
                        </div>

                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-3" data-toggle="collapse" role="button" aria-expanded="false"
                               class="p-3 p-md-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 mr-2">Development</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" class="injected-svg icon icon-sm"
                                         data-src="/assets/img/icons/interface/icon-caret-right.svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M14.376 11.584C14.6728 11.7819 14.6728 12.2181 14.376 12.416L9.77735 15.4818C9.44507 15.7033 9 15.4651 9 15.0657L9 8.93426C9 8.53491 9.44507 8.29671 9.77735 8.51823L14.376 11.584Z"
                                            fill="#2C3038"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="collapse" id="accordion-3" data-parent="#faq-accordion">
                                <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    Our development starts with an organized manner where developers are instructed to
                                    follow the coding guidelines defined by their organization and programming tools.
                                    The
                                    programming language is chosen with respect to the type of software being developed.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-4" data-toggle="collapse" role="button" aria-expanded="false"
                               class="p-3 p-md-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 mr-2">Testing</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" class="injected-svg icon icon-sm"
                                         data-src="/assets/img/icons/interface/icon-caret-right.svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M14.376 11.584C14.6728 11.7819 14.6728 12.2181 14.376 12.416L9.77735 15.4818C9.44507 15.7033 9 15.4651 9 15.0657L9 8.93426C9 8.53491 9.44507 8.29671 9.77735 8.51823L14.376 11.584Z"
                                            fill="#2C3038"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="collapse" id="accordion-4" data-parent="#faq-accordion">
                                <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    In this stage product defects are detected, reported, tracked, fixed and retested,
                                    until
                                    the product reaches the quality standards defined in the SRS.
                                </div>
                            </div>
                        </div>
                        <div class="card mb-2 mb-md-3">
                            <a href="#accordion-5" data-toggle="collapse" role="button" aria-expanded="false"
                               class="p-3 p-md-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0 mr-2">Launch</h6>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" class="injected-svg icon icon-sm"
                                         data-src="/assets/img/icons/interface/icon-caret-right.svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path
                                            d="M14.376 11.584C14.6728 11.7819 14.6728 12.2181 14.376 12.416L9.77735 15.4818C9.44507 15.7033 9 15.4651 9 15.0657L9 8.93426C9 8.53491 9.44507 8.29671 9.77735 8.51823L14.376 11.584Z"
                                            fill="#2C3038"></path>
                                    </svg>
                                </div>
                            </a>
                            <div class="collapse" id="accordion-5" data-parent="#faq-accordion">
                                <div class="px-3 px-md-4 pb-3 pb-md-4">
                                    After testing the product in the real business environment, the product is launched
                                    as
                                    it is or with suggested enhancements in the targeting market segment. Additionally
                                    its
                                    maintenance is done for the existing customer base.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-5 aos-init aos-animate" data-aos="fade-in">
                    <img src="/assets/img/square-5.jpg" alt="Image" class="img-fluid rounded shadow">
                    <img src="/assets/img/square-4.png" alt="Image"
                         class="position-absolute p-0 col-4 col-xl-5 border border-white border-thick rounded-circle top right shadow-lg mt-5 mr-n5 mr-lg-n3 mr-xl-n5 d-none d-md-block"
                         data-jarallax-element="-20 0" style="z-index: 0; transform: translate3d(0px, 21.2038px, 0px);">
                </div>
            </div>
        </div>
    </section>
{{--How We Work End--}}

{{--Visitors Counts Start--}}
    <section class="bg-light pt-0" style="padding: 0;">
        <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card card-body shadow-sm h-100" style="text-align: center">
                        <div class="display-4 text-primary mb-3" data-countup="" data-start="1" data-end="13194"
                             data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping=""
                             data-suffix="" data-easing="">13194
                        </div>
                        <h3>Visitors</h3>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card card-body shadow-sm h-100" style="text-align: center">
                        <div class="display-4 text-primary mb-3" data-countup="" data-start="1" data-end="856"
                             data-duration="1" data-decimal-places="" data-prefix="" data-separator="" data-grouping=""
                             data-suffix="" data-easing="false">856
                        </div>
                        <h3>Downloads</h3>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card card-body shadow-sm h-100" style="text-align: center">
                        <div class="display-4 text-primary mb-3" data-countup="" data-start="1" data-end="45"
                             data-duration="" data-decimal-places="" data-prefix="" data-separator="" data-grouping=""
                             data-suffix="" data-easing="">45
                        </div>
                        <h3>Clients</h3>
                    </div>
                </div>

            </div>
        </div>
    </section>
{{--Visitors Counts End--}}

{{--Our other services Start--}}
    <section class="p-0 bg-primary row no-gutters o-hidden">
        <div class="col-lg-5 col-xl-6 d-flex align-items-center justify-content-center">
            <img src="/assets/img/blog/dotLogicM1.jpg" alt="Image" class="w-100 h-100">
            <div class="divider divider-side bg-primary d-none d-lg-block"></div>
        </div>
        <div class="col-lg-7 col-xl-6">
            <section>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col col-md-10 col-xl-9">
                            <div class="text-white text-center text-lg-left">
                                <h3 class="h1">Our other services</h3>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 mt-md-5">
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Desktop App</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Web App</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Mobile App</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Graphics Design</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">E-Commerce</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Website</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">ERP</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Inventory, POS</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Accounting</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">HR, Payroll</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">C&amp;F Application</h6>
                                    </div>
                                </div>
                                <div class="mx-2 ml-sm-0 ml-sm-0 mb-2 bg-white rounded p-2 pr-3 p-md-3 pr-md-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success-alt">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="injected-svg m-2 icon icon-xs bg-success" data-src="assets/img/icons/interface/icon-check.svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path d="M20 6L9 17L4 12" stroke="#2C3038" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <h6 class="mb-0 ml-3">Management Application</h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
{{--Our other services End--}}

{{--Product Short details Start--}}
    <section class="bg-light o-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-md-7 col-lg-4 col-xl-4" data-aos="fade-left">
                    <div class="card h-100 shadow-lg hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="/assets/img/blog/thumb-5.jpg" alt="blog.5.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Why social ROI is impossible to measure</h3>
                            </a>
                            <p>
                                Sed arcu Jon odio Oberyn lacinia at quis. Brienne fermentum vel porta Jon pulvinar neque.
                            </p>
                            <a href="#">Read Story</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4 col-xl-4" data-aos="fade-left">
                    <div class="card h-100 shadow-lg hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="/assets/img/blog/thumb-5.jpg" alt="blog.5.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Why social ROI is impossible to measure</h3>
                            </a>
                            <p>
                                Sed arcu Jon odio Oberyn lacinia at quis. Brienne fermentum vel porta Jon pulvinar neque.
                            </p>
                            <a href="#">Read Story</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4 col-xl-4" data-aos="fade-left">
                    <div class="card h-100 shadow-lg hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="/assets/img/blog/thumb-5.jpg" alt="blog.5.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Why social ROI is impossible to measure</h3>
                            </a>
                            <p>
                                Sed arcu Jon odio Oberyn lacinia at quis. Brienne fermentum vel porta Jon pulvinar neque.
                            </p>
                            <a href="#">Read Story</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row align-items-center justify-content-around">
                <div class="col-md-7 col-lg-4 col-xl-4" data-aos="fade-left">
                    <div class="card h-100 shadow-lg hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="/assets/img/blog/thumb-5.jpg" alt="blog.5.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Why social ROI is impossible to measure</h3>
                            </a>
                            <p>
                                Sed arcu Jon odio Oberyn lacinia at quis. Brienne fermentum vel porta Jon pulvinar neque.
                            </p>
                            <a href="#">Read Story</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4 col-xl-4" data-aos="fade-left">
                    <div class="card h-100 shadow-lg hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="/assets/img/blog/thumb-5.jpg" alt="blog.5.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Why social ROI is impossible to measure</h3>
                            </a>
                            <p>
                                Sed arcu Jon odio Oberyn lacinia at quis. Brienne fermentum vel porta Jon pulvinar neque.
                            </p>
                            <a href="#">Read Story</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-4 col-xl-4" data-aos="fade-left">
                    <div class="card h-100 shadow-lg hover-box-shadow">
                        <a href="#" class="d-block bg-gradient rounded-top">
                            <img class="card-img-top hover-fade-out" src="/assets/img/blog/thumb-5.jpg" alt="blog.5.image">
                        </a>
                        <div class="card-body">
                            <a href="#">
                                <h3>Why social ROI is impossible to measure</h3>
                            </a>
                            <p>
                                Sed arcu Jon odio Oberyn lacinia at quis. Brienne fermentum vel porta Jon pulvinar neque.
                            </p>
                            <a href="#">Read Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--Product Short details End--}}

{{--Customer Review Start--}}
    <section class="bg-primary-3 text-white o-hidden pb-0">
        <div class="container">
            <div class="row section-title justify-content-center text-center">
                <div class="col-md-9 col-lg-8 col-xl-7">
                    <h3 class="display-4">Customers are lovin’ it</h3>
                    <div class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa.
                    </div>
                </div>
            </div>
        </div>
        <div class="highlight-selected"
             data-flickity='{ "imagesLoaded": true, "wrapAround":true, "pageDots":false, "adaptiveHeight":true, "autoPlay":3000 }'>
            <div class="carousel-cell col-xl-7 col-md-8">
                <div class="row align-items-center justify-content-start justify-content-sm-center mx-3 mx-xl-4">
                    <div class="col-sm-auto mb-4 mb-sm-0">
                        <img class="img-fluid avatar avatar-xl" src="assets/img/avatars/male-4.jpg"
                             alt="Harvey Derwent avatar image">
                    </div>
                    <div class="col pl-lg-4">
                        <h4 class="h2">&ldquo;We are working at almost twice the capacity&rdquo;</h4>
                        <p>
                            We had all sorts of problems around motivation and productivity from our smallest scrums to
                            our largest teams. Jumpstart helped us rise above all and conquer.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-cell col-xl-7 col-md-8">
                <div class="row align-items-center justify-content-start justify-content-sm-center mx-3 mx-xl-4">
                    <div class="col-sm-auto mb-4 mb-sm-0">
                        <img class="img-fluid avatar avatar-xl" src="assets/img/avatars/male-1.jpg"
                             alt="Harvey Derwent avatar image">
                    </div>
                    <div class="col pl-lg-4">
                        <h4 class="h2">&ldquo;Jumpstart increases productivity.&rdquo;</h4>
                        <p>
                            We had all sorts of problems around motivation and productivity from our smallest scrums to
                            our largest teams.
                            <mark data-aos="highlight-text" data-aos-delay="200">Jumpstart helped us rise above all and
                                conquer.
                            </mark>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-cell col-xl-7 col-md-8">
                <div class="row align-items-center justify-content-start justify-content-sm-center mx-3 mx-xl-4">
                    <div class="col-sm-auto mb-4 mb-sm-0">
                        <img class="img-fluid avatar avatar-xl" src="assets/img/avatars/female-4.jpg"
                             alt="Shelley McNabb avatar image">
                    </div>
                    <div class="col pl-lg-4">
                        <h4 class="h2">&ldquo;Long build times are a thing of the past!&rdquo;</h4>
                        <p>
                            We all know the stigma around build times and the ever expanding arsenal of tooling in
                            modern web apps. Fear not, Jumpstart does away with all of that.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-cell col-xl-7 col-md-8">
                <div class="row align-items-center justify-content-start justify-content-sm-center mx-3 mx-xl-4">
                    <div class="col-sm-auto mb-4 mb-sm-0">
                        <img class="img-fluid avatar avatar-xl" src="assets/img/avatars/female-3.jpg"
                             alt="Mary Goddard avatar image">
                    </div>
                    <div class="col pl-lg-4">
                        <h4 class="h2">&ldquo;Top notch support on-call? Yes please.&rdquo;</h4>
                        <p>
                            Product support comes first when we are considering a new service. Do yourself a favour and
                            choose Jumpstart, we have found the support to be second to none.
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-cell col-xl-7 col-md-8">
                <div class="row align-items-center justify-content-start justify-content-sm-center mx-3 mx-xl-4">
                    <div class="col-sm-auto mb-4 mb-sm-0">
                        <img class="img-fluid avatar avatar-xl" src="assets/img/avatars/male-2.jpg"
                             alt="Bradley Singleton avatar image">
                    </div>
                    <div class="col pl-lg-4">
                        <h4 class="h2">&ldquo;Jumpstart gives us total peace of mind.&rdquo;</h4>
                        <p>
                            Living up to their reputation for support and reliablity, Jumpstart has delivered once again
                            on all fronts. Any bugs we find are dealt with promptly.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute w-50 h-100 top right" data-jarallax-element="100 48">
            <div class="blob blob-2 w-100 h-100 top right bg-gradient opacity-50"></div>
        </div>
        <div class="divider divider-bottom bg-white"></div>
    </section>
{{--Customer Review End--}}

@endsection
