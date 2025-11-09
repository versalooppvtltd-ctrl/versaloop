@extends('layouts.base', ['title' => '|| Social Media Strategy Development'])

@section('body-attributes')
    class="body1"
@endsection

@section('header')
    @include('layouts.partials.header.navbar7')
    @include('layouts.partials.header.mobile-nav')
@endsection

@section('content')
    <main style="font-family: 'Arial', sans-serif; line-height: 1.6; color: #333;">
        <!-- ===== HERO AREA START ===== -->
        <div class="inner-hero" style="background-image: url(/img/bg/inner-hero-bg.jpg); background-size: cover; background-position: center; padding: 100px 0; text-align: center; color: white;">
            <div class="container" style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
                <div class="row" style="display: flex; flex-wrap: wrap; margin: 0 -15px;">
                    <div class="col-lg-8 m-auto text-center" style="width: 66.6667%; padding: 0 15px; box-sizing: border-box; margin: 0 auto;">
                        <div class="inner-main-heading">
                            <h1 style="font-size: 2.5rem; margin-bottom: 20px;">
                            Social Media Strategy Development
                            </h1>
                            <div class="breadcrumbs-pages">
                                <ul style="list-style: none; padding: 0; display: flex; justify-content: center; flex-wrap: wrap;">
                                    <li style="margin: 0 10px;">
                                        <a href="{{ route('root') }}" style="color: white; text-decoration: none;">Home</a>
                                    </li>
                                    <li class="angle" style="margin: 0 10px;">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li style="margin: 0 10px;">Service</li>
                                    <li class="angle" style="margin: 0 10px;">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li style="margin: 0 10px;">Social Media Strategy Development</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== HERO AREA START ===== -->

        <!-- ===== BLOG DETAILS AREA START ===== -->
        <div class="blog-details-area sp" style="padding: 50px 0;">
            <div class="container" style="width: 100%; max-width: 1200px; margin: 0 auto; padding: 0 15px;">
                <div class="row" style="display: flex; flex-wrap: wrap; margin: 0 -15px;">
                    <div class="col-lg-12" style="width: 100%; padding: 0 15px; box-sizing: border-box;">
                        <article>
                            <div class="details-content">
                                <div class="image">
                                    <img class="w-full" src="/img/service/service-details2-image.png" alt="" style="width: 100%; height: auto;"/>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4" style="width: 33.3333%; padding: 0 15px; box-sizing: border-box;">
                        <div class="sidebar-area mt-50" style="margin-top: 50px;">
                            <div class="_sidebar-widget _search">
                                <h3>Search</h3>
                                <form action="#" class="_relative" style="position: relative;">
                                    <input type="search" placeholder="Search..." style="width: 100%; padding: 10px;"/>
                                    <button style="position: absolute; right: 0; top: 0; height: 100%; background: none; border: none; padding: 0 10px;"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="_sidebar-widget _list mt-40" style="margin-top: 40px;">
                                <h3>Categories</h3>
                                <div class="sidebar-list">
                                    <ul style="list-style: none; padding: 0;">
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details1']) }}" style="display: flex; justify-content: space-between; text-decoration: none; color: #333;">SEO Marketing <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details2']) }}" class="active" style="display: flex; justify-content: space-between; text-decoration: none; color: #333; font-weight: bold;">Social Media Strategy <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details3']) }}" style="display: flex; justify-content: space-between; text-decoration: none; color: #333;">Content Marketing <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details4']) }}" style="display: flex; justify-content: space-between; text-decoration: none; color: #333;">Pay-Per-Click Advertising <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details5']) }}" style="display: flex; justify-content: space-between; text-decoration: none; color: #333;">Travel Guide Expertise <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details6']) }}" style="display: flex; justify-content: space-between; text-decoration: none; color: #333;">HR Staffing Agency <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details7']) }}" style="display: flex; justify-content: space-between; text-decoration: none; color: #333;">Insurance Policy <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details8']) }}" style="display: flex; justify-content: space-between; text-decoration: none; color: #333;">Real Estate <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li style="margin-bottom: 10px;">
                                            <a href="{{ route('second', ['service', 'details9']) }}" style="display: flex; justify-content: space-between; text-decoration: none; color: #333;">Startup Agency <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="_sidebar-widget _buttons mt-40" style="margin-top: 40px;">
                                <h3>You Still Have A Question</h3>
                                <p class="mt-16" style="margin-top: 16px;">If you cannot find answer to your question our FAQ, you can always contact us. Web will answer you shortly!</p>
                                <div class="buttons mt-16" style="margin-top: 16px;">
                                    <a href="mailto:Infoseoxagency@gmail.com" class="sidebar-btn1" style="display: block; padding: 10px; background: #f5f5f5; margin-bottom: 10px; text-decoration: none; color: #333;"><img src="/img/icons/sidebar-email.png" alt="" style="margin-right: 10px;"/> Infoseoxagency@gmail.com</a>
                                    <a href="tel:123-456-7890" class="sidebar-btn2" style="display: block; padding: 10px; background: #f5f5f5; text-decoration: none; color: #333;"><img src="/img/icons/sidebar-phone.png" alt="" style="margin-right: 10px;"/> 123-456-7890</a>
                                </div>
                            </div>

                            <div class="_sidebar-widget _contact mt-40" style="margin-top: 40px;">
                                <h3>Get A Free Quote</h3>
                                <div class="_contact-form mt-10" style="margin-top: 10px;">
                                    <form action="#">
                                        <input type="text" placeholder="Your Name" style="width: 100%; padding: 10px; margin-bottom: 10px;"/>
                                        <input type="email" placeholder="Email Address" style="width: 100%; padding: 10px; margin-bottom: 10px;"/>
                                        <input type="number" placeholder="Phone Number" style="width: 100%; padding: 10px; margin-bottom: 10px;"/>
                                        <textarea rows="5" placeholder="Your Message" style="width: 100%; padding: 10px; margin-bottom: 10px;"></textarea>

                                        <button class="theme-btn3 mt-20" type="submit" style="margin-top: 20px; padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer;">Send <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8" style="width: 66.6667%; padding: 0 15px; box-sizing: border-box;">
                    <div class="blog-details-content ml-30 md:ml-0 sm:ml-0 mt-50" style="margin-left: 30px; margin-top: 50px;">
                        <article>
                            <div class="details-content">
                                <div class="heading2 mt-24" style="margin-top: 24px;">
                                    <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Social Media Strategy Development</h3>
                                    <p class="mt-16" style="margin-top: 16px; margin-bottom: 15px;">Transform your social media presence with data-driven strategies that deliver real results.</p>
                                    <p class="mt-16" style="margin-top: 16px; margin-bottom: 15px;">Our social media strategy services help businesses establish a strong online presence, engage with their audience, and drive meaningful conversions.</p>
                                </div>

                                <div class="heading2 mt-40" style="margin-top: 40px;">
                                    <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Why Social Media Strategy Matters</h3>
                                    <p class="mt-16" style="margin-top: 16px; margin-bottom: 15px;">A well-crafted social media strategy can help your business:</p>
                                </div>

                                <div class="row pt-10" style="padding-top: 10px;">
                                    <div class="col-md-6" style="width: 50%; padding: 0 15px; box-sizing: border-box;">
                                        <div class="service-details-check-list heading2 mt-20" style="margin-top: 20px; display: flex; align-items: center;">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text" style="margin-left: 10px;">
                                                <p>Increase brand awareness and visibility</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10" style="margin-top: 10px; display: flex; align-items: center;">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text" style="margin-left: 10px;">
                                                <p>Build meaningful relationships with your audience</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20" style="margin-top: 20px; display: flex; align-items: center;">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text" style="margin-left: 10px;">
                                                <p>Drive targeted traffic to your website</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="width: 50%; padding: 0 15px; box-sizing: border-box;">
                                        <div class="service-details-check-list heading2 mt-20" style="margin-top: 20px; display: flex; align-items: center;">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text" style="margin-left: 10px;">
                                                <p>Generate high-quality leads and conversions</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10" style="margin-top: 10px; display: flex; align-items: center;">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text" style="margin-left: 10px;">
                                                <p>Improve customer engagement and loyalty</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20" style="margin-top: 20px; display: flex; align-items: center;">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text" style="margin-left: 10px;">
                                                <p>Stay ahead of your competitors</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </article>

                        <article>
                            <div class="details-content mt-40" style="margin-top: 40px;">
                                <div class="heading2">
                                    <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Our Social Media Strategy Process</h3>
                                    <p class="mt-16" style="margin-top: 16px; margin-bottom: 15px;">We follow a comprehensive approach to develop effective social media strategies:</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30" style="margin-top: 30px;">
                                    <h4><a href="#">1. Research & Analysis</a></h4>
                                    <p class="mt-12" style="margin-top: 12px; margin-bottom: 15px;">We analyze your industry, competitors, and target audience to identify opportunities.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30" style="margin-top: 30px;">
                                    <h4><a href="#">2. Goal Setting</a></h4>
                                    <p class="mt-12" style="margin-top: 12px; margin-bottom: 15px;">We define clear, measurable objectives aligned with your business goals.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30" style="margin-top: 30px;">
                                    <h4><a href="#">3. Platform Selection</a></h4>
                                    <p class="mt-12" style="margin-top: 12px; margin-bottom: 15px;">We determine which social platforms will best serve your strategy.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30" style="margin-top: 30px;">
                                    <h4><a href="#">4. Content Strategy</a></h4>
                                    <p class="mt-12" style="margin-top: 12px; margin-bottom: 15px;">We develop a content plan that resonates with your audience.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30" style="margin-top: 30px;">
                                    <h4><a href="#">5. Implementation & Monitoring</a></h4>
                                    <p class="mt-12" style="margin-top: 12px; margin-bottom: 15px;">We execute the strategy and continuously monitor performance.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30" style="margin-top: 30px;">
                                    <h4><a href="#">6. Optimization</a></h4>
                                    <p class="mt-12" style="margin-top: 12px; margin-bottom: 15px;">We refine the strategy based on data and insights.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40" style="margin-top: 40px;">
                                <div class="heading2">
                                    <h3 style="font-size: 1.8rem; margin-bottom: 15px;">Ready to Transform Your Social Media Presence?</h3>
                                    <p class="mt-16" style="margin-top: 16px; margin-bottom: 15px;">Contact us today to discuss how we can develop a winning social media strategy for your business.</p>
                                </div>
                            </div>
                        </article>

                        <div class="details-border" style="border-top: 1px solid #eee; margin: 40px 0;"></div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- ===== BLOG DETAILS AREA END ===== -->

    </main>

    @include('layouts.partials.footer')
@endsection