@extends('layouts.base', ['title' => '|| Pay Per Click Advertising'])

@section('body-attributes')
    class="body1"
@endsection

@section('header')
    @include('layouts.partials.header.navbar7')
    @include('layouts.partials.header.mobile-nav')
@endsection

@section('content')
    <main>
        <!-- ===== HERO AREA START ===== -->
        <div class="inner-hero" style="background-image: url(/img/bg/inner-hero-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="inner-main-heading">
                            <h1>Pay Per Click Advertising</h1>
                            <div class="breadcrumbs-pages">
                                <ul>
                                    <li>
                                        <a href="{{ route('root') }}">Home</a>
                                    </li>
                                    <li class="angle">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li>Service</li>
                                    <li class="angle">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li>Pay Per Click Advertising</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== HERO AREA START ===== -->

        <!-- ===== BLOG DETAILS AREA START ===== -->
        <div class="blog-details-area sp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <article>
                            <div class="details-content">
                                <div class="image">
                                    <img class="w-full" src="/img/service/service-details4-image.png" alt="" />
                                </div>
                            </div>
                        </article>
                    </div>
                    @include('service.sidebar')
                    <div class="col-lg-8">
                        <div class="blog-details-content ml-30 md:ml-0 sm:ml-0 mt-50">
                            <article>
                                <div class="details-content">
                                    <div class="heading2 mt-24">
                                        <h3>Unlock Immediate Visibility Strategic PPC Campaign</h3>
                                        <p class="mt-16">We offer expert Pay-Per-Click (PPC) advertising services that provide your business with instant visibility and targeted traffic. Our PPC strategies focus on maximizing your ROI by targeting the right audience at the right time, with highly optimized ad campaigns across Google, Bing, social media platforms, and more.</p>
                                    </div>

                                    <div class="heading2 mt-40">
                                        <h3>What we Offer</h3>
                                    </div>
                                    <div class="row pt-10">
                                        <div class="col-md-6">
                                            <div class="details-content-text-box heading2 mt-30">
                                                <h4><a href="#">Google Ads Management</a></h4>
                                                <p class="mt-12">Maximize visibility through search ads, display ads, and retargeting campaigns.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="details-content-text-box heading2 mt-30">
                                                <h4><a href="#">Bing & Yahoo Ads</a></h4>
                                                <p class="mt-12">Expand your reach beyond Google with tailored campaigns for Bing and Yahoo.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="details-content-text-box heading2 mt-30">
                                                <h4><a href="#">Social Media Advertising</a></h4>
                                                <p class="mt-12">Leverage platforms like Facebook, Instagram, LinkedIn, and Twitter to reach your ideal audience.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="details-content-text-box heading2 mt-30">
                                                <h4><a href="#">Paid Search & Display Campaigns</a></h4>
                                                <p class="mt-12">Reach your audience through paid search results and visually engaging display ads.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="details-content-text-box heading2 mt-30">
                                                <h4><a href="#">Remarketing & Retargeting</a></h4>
                                                <p class="mt-12">Stay top-of-mind and bring back visitors with targeted retargeting ads.</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="details-content-text-box heading2 mt-30">
                                                <h4><a href="#">PPC Campaign Monitoring</a></h4>
                                                <p class="mt-12">Continuous testing and adjustments to maximize performance and ROI.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h3>Maximize Your ROI with Expert PPC Advertising</h3>
                                        <p class="mt-16">our Pay-Per-Click (PPC) advertising services are designed to deliver immediate visibility and qualified traffic to your business. Whether you're looking to drive sales, generate leads, or increase brand awareness, our expert team creates highly optimized PPC campaigns that target the right audience, at the right time. Through detailed keyword research, compelling ad copy, and continuous performance optimization, we ensure your advertising budget is spent efficiently. With SEOX, you can expect measurable results and a significant return on investment, all backed by our data-driven approach and ongoing campaign adjustments.</p>
                                    </div>

                                    <div class="heading2 mt-40">
                                        <h3>Our PPC Advertising Process</h3>
                                        <p class="mt-16">we combine creative expertise with data-driven strategies to deliver content marketing solutions that achieve tangible results. Our team of experienced writers, designers, strategists works collaboratively to create content that resonates with your audience and aligns with your business objectives</p>
                                    </div>

                                    <div class="service-details-check-list heading2 mt-30">
                                        <div class="check-icon">
                                            <span><i class="fa-solid fa-check"></i></span>
                                        </div>
                                        <div class="text">
                                            <h4><a href="#">Campaign Strategy Development</a></h4>
                                            <p class="mt-2">We start by researching your business goals, target audience, and competitors.</p>
                                        </div>
                                    </div>

                                    <div class="service-details-check-list heading2 mt-30">
                                        <div class="check-icon">
                                            <span><i class="fa-solid fa-check"></i></span>
                                        </div>
                                        <div class="text">
                                            <h4><a href="#">Keyword Research & Ad Creation</a></h4>
                                            <p class="mt-2">Our team identifies high-performing keywords and creates engaging ad copy designed.</p>
                                        </div>
                                    </div>

                                    <div class="service-details-check-list heading2 mt-30">
                                        <div class="check-icon">
                                            <span><i class="fa-solid fa-check"></i></span>
                                        </div>
                                        <div class="text">
                                            <h4><a href="#">Ad Management & Optimization</a></h4>
                                            <p class="mt-2">We continuously manage and optimize your campaigns by adjusting bids,</p>
                                        </div>
                                    </div>

                                    <div class="service-details-check-list heading2 mt-30">
                                        <div class="check-icon">
                                            <span><i class="fa-solid fa-check"></i></span>
                                        </div>
                                        <div class="text">
                                            <h4><a href="#">Performance Tracking & Reporting</a></h4>
                                            <p class="mt-2">We provide detailed monthly reports, tracking key metrics like CTR (Click-Through Rate)</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="image mt-40">
                                                <img class="w-full" src="/img/blog/blog-details-image2.png" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="image mt-40">
                                                <img class="w-full" src="/img/blog/blog-details-image3.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <div class="details-border"></div>

                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-details-box1 text-center">
                                        <div class="icon">
                                            <img src="/img/icons/service-details-icon1.svg" alt="" />
                                        </div>
                                        <div class="heading2 mt-16">
                                            <h4><a href="#">SEO Optimization</a></h4>
                                            <p class="mt-10">Drive organic traffic and improve your online visibility</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="service-details-box1 text-center sm:mt-30">
                                        <div class="icon">
                                            <img src="/img/icons/service-details-icon2.svg" alt="" />
                                        </div>
                                        <div class="heading2 mt-16">
                                            <h4><a href="#">PPC Advertising</a></h4>
                                            <p class="mt-10">Maximize ROI with targeted PPC campaigns designed</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="service-details-box1 text-center md:mt-30 sm:mt-30">
                                        <div class="icon">
                                            <img src="/img/icons/service-details-icon3.svg" alt="" />
                                        </div>
                                        <div class="heading2 mt-16">
                                            <h4><a href="#">Content Marketing</a></h4>
                                            <p class="mt-10">content marketing services encompass everything</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="details-border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== BLOG DETAILS AREA END ===== -->


    </main>

    @include('layouts.partials.footer')
@endsection
