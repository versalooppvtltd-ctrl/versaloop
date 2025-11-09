@extends('layouts.base', ['title' => '|| iOS App Development Services'])

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
                            <h1>
                            iOS App Development Services
                            </h1>
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
                                    <li>iOS App Development</li>
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
                                    <img class="w-full" src="/img/service/service-details2-image.png" alt="iOS app UI screens developed by TSP" />
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-area mt-50">
                            <div class="_sidebar-widget _search">
                                <h3>Search</h3>
                                <form action="#" class="_relative">
                                    <input type="search" placeholder="Search..." />
                                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="_sidebar-widget _list mt-40">
                                <h3>Categories</h3>
                                <div class="sidebar-list">
                                    <ul>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details1']) }}">SEO Marketing <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details2']) }}" class="active">iOS App Development <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details3']) }}">Content Marketing <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details4']) }}">Pay-Per-Click Advertising <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details5']) }}">Travel Guide Expertise <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details6']) }}">HR Staffing Agency <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details7']) }}">Insurance Policy <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details8']) }}">Real Estate <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details9']) }}">Startup Agency <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="_sidebar-widget _buttons mt-40">
                                <h3>You Still Have A Question</h3>
                                <p class="mt-16">If you cannot find answer to your question our FAQ, you can always contact us. Web will answer you shortly!</p>
                                <div class="buttons mt-16">
                                    <a href="mailto:Infoseoxagency@gmail.com" class="sidebar-btn1"><img src="/img/icons/sidebar-email.png" alt="" /> Infoseoxagency@gmail.com</a>
                                    <a href="tel:123-456-7890" class="sidebar-btn2"><img src="/img/icons/sidebar-phone.png" alt="" /> 123-456-7890</a>
                                </div>
                            </div>

                            <div class="_sidebar-widget _contact mt-40">
                                <h3>Get A Free Quote</h3>
                                <div class="_contact-form mt-10">
                                    <form action="#">
                                        <input type="text" placeholder="Your Name" />
                                        <input type="email" placeholder="Email Address" />
                                        <input type="number" placeholder="Phone Number" />
                                        <textarea rows="5" placeholder="Your Message"></textarea>

                                        <button class="theme-btn3 mt-20" type="submit">Send <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                    <div class="blog-details-content ml-30 md:ml-0 sm:ml-0 mt-50">
                        <article>
                            <div class="details-content">
                                <div class="heading2 mt-24">
                                    <h3>iOS App Development Services</h3>
                                    <p class="mt-16">Apple-Level Precision. TSP-Level Passion.</p>
                                    <p class="mt-16">At <a href="https://theseoppc.com">TSP (Theseoppc.com)</a>, we don't just build iOS apps that work — we build apps that perform, delight, and scale. Whether it's a sleek consumer-facing product or a secure internal enterprise tool, our iOS development team brings the polish and power you'd expect from top-tier digital products.</p>
                                </div>

                                <div class="heading2 mt-40">
                                    <h3>Why iOS Apps Still Dominate in 2025</h3>
                                    <p class="mt-16">iOS users are more likely to spend, subscribe, and stay loyal. It's a fact backed by countless studies and real-world revenue reports. If your business wants to attract premium customers, you can't afford to ignore the Apple ecosystem.</p>
                                    <p class="mt-16">In markets like the UK, Canada, and the US, iPhones are everywhere. But the competition on the App Store is intense — and most apps don't even survive six months. So if you're going to build an iOS app, you really need it done right.</p>
                                </div>

                                <div class="heading2 mt-40">
                                    <h3>Why iOS App Development Is a Strategic Business Move</h3>
                                    <p class="mt-16">Here's what sets iOS apart — and why our clients across industries are investing in Apple-first builds:</p>
                                </div>

                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Higher ARPU (Average Revenue Per User) — iOS users spend nearly double what Android users do on average.</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Faster updates and adoption — iOS users upgrade quickly, which means fewer compatibility nightmares.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Better security — Ideal for fintech, legal, and healthcare apps.</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Premium UX expectations — Yes, they're picky. But when you impress them, you've got a loyal customer for life.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>What Makes TSP the Right Team for Your iOS App?</h3>
                                    <p class="mt-16">There are hundreds of "app developers" out there. Many promise the moon, then deliver something that looks like it was built during a lunch break. At TSP, we take a different approach:</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">1. Strategy Comes First</a></h4>
                                    <p class="mt-12">We don't jump into coding the minute you say "go." We begin by understanding your business goals, your audience, and what success looks like to you. Whether it's retention, engagement, transactions, or all three — we map the app experience around your KPIs.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">2. Team TSP Builds Apps with Apple Standards in Mind</a></h4>
                                    <p class="mt-12">Our <a href="https://theseoppc.com/services/mobile-app-development/ios/">iOS app builder</a> team lives and breathes Swift, Xcode, and the latest iOS SDKs. We stay updated with Apple's ever-evolving Human Interface Guidelines to ensure your app not only passes App Store review, but thrives once it's live.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">3. UX That Makes Users Tap Twice</a></h4>
                                    <p class="mt-12">iOS users expect pixel-perfect design, intuitive navigation, and gestures that feel native. Our in-house <a href="https://theseoppc.com/services/mobile-app-development/ui-ux-design/">UI/UX Design for Apps</a> team designs every screen for emotional connection — not just function.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">4. Secure, Scalable, and Synced</a></h4>
                                    <p class="mt-12">Whether it's Face ID login, encrypted transactions, or syncing with your cloud infrastructure, our apps are engineered with security, performance, and integrations in mind. From API layers to database architecture, nothing's left to chance.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Our iOS App Development Process</h3>
                                    <p class="mt-16">At TSP, we believe clarity builds better code. That's why our process is structured, collaborative, and refreshingly jargon-free.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">Discovery & Planning</a></h4>
                                    <p class="mt-12">We kick off with workshops, competitor analysis, wireframes, and clear milestones. You'll know exactly what we're building and why. Want your app to speak to your CRM system? We'll plan for it from day one.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">UI/UX Design</a></h4>
                                    <p class="mt-12">Our designers don't just "skin" the app. They create interactive prototypes to validate flow, reduce bounce, and increase time-in-app. Every screen gets Apple-grade finesse.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">Agile Development</a></h4>
                                    <p class="mt-12">Our team codes in sprints using the Agile method — meaning you get testable builds every 2 weeks. You can literally install and try the app as it evolves. Agile = flexibility, transparency, and rapid iteration.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">QA & Optimisation</a></h4>
                                    <p class="mt-12">We test for performance, memory leaks, device compatibility (yes, even those old iPhone 8s), and accessibility compliance. Your app will fly with no bugs, no crashes, no App Store rejections.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">Launch & Beyond</a></h4>
                                    <p class="mt-12">From provisioning profiles to App Store submission, we handle the technical bits. Once launched, we're here to maintain, upgrade, and improve your app with our <a href="https://theseoppc.com/services/mobile-app-development/maintenance-updates/">App Maintenance & Updates</a> plans.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>A Case in Point: Legal Client, Private App, Big Impact</h3>
                                    <p class="mt-16"><strong>Client:</strong> UK-based law firm with over 250 staff</p>
                                    <p class="mt-16"><strong>Need:</strong> A secure, internal iOS app for document sharing, remote client signatures, and internal chat</p>
                                    <p class="mt-16"><strong>Solution:</strong></p>
                                    <ul class="mt-12 ml-20">
                                        <li>Face ID-based login</li>
                                        <li>Document scanning + e-signature</li>
                                        <li>GDPR-compliant backend</li>
                                        <li>Internal-only App Store distribution</li>
                                    </ul>
                                    <p class="mt-16"><strong>Results:</strong></p>
                                    <ul class="mt-12 ml-20">
                                        <li>90% reduction in manual document handling</li>
                                        <li>Client onboarding time cut in half</li>
                                        <li>Internal adoption rate: 98% in first two weeks</li>
                                    </ul>
                                    <p class="mt-16">This app isn't public — but it transformed the firm's operations. Exactly what we aim for.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Who We Build iOS Apps For</h3>
                                    <p class="mt-16">We work with both startups and enterprises across:</p>
                                </div>
                                
                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Legal — Secure document sharing, client apps</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>E-Commerce — Shopping apps, loyalty programmes, custom payments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Healthcare — Appointment scheduling, remote patient monitoring</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Education — Interactive learning tools, assessments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Logistics — Fleet tracking, order fulfilment, performance monitoring</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">And if you're after a cross-platform solution, we also build <a href="https://theseoppc.com/services/mobile-app-development/hybrid-app/">Hybrid Mobile Apps</a> that deliver great performance across iOS and Android.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Features We Frequently Deliver</h3>
                                </div>
                                
                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Face ID / Touch ID login</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Push notifications</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>In-app payments (Apple Pay ready)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Real-time chat</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Secure document management</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Location tracking</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">Every feature is purpose-built — no bloated app nonsense here.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Why Clients Stick with TSP</h3>
                                    <p class="mt-16">Because we're not just developers. We're long-term partners.</p>
                                    <p class="mt-16">Here's what our iOS clients say they love:</p>
                                </div>
                                
                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>We speak business, not just code.</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>No disappearing acts — our team is accessible, responsive, and actually invested.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Clear cut transparent pricing — view everything upfront on our <a href="https://theseoppc.com/pricing/application-development/">Application Development Pricing Page</a>.</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>We stay post-launch — through <a href="https://theseoppc.com/services/mobile-app-development/maintenance-updates/">App Maintenance & Updates</a>, user feedback sessions, and roadmap planning.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">We've earned trust from law firms in London, e-comm brands in Toronto, and logistics teams in Mumbai — by showing up, delivering quality, and keeping it real.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Let's Build Something iConic</h3>
                                    <p class="mt-16">The iOS world is competitive — but it's also full of opportunity. Whether you're targeting iPhone-only users or planning a broader mobile strategy, your app deserves the kind of craftsmanship and care that Apple users demand.</p>
                                    <p class="mt-16">Let TSP help you create an app that doesn't just launch — it lasts, converts, and delivers.</p>
                                    <p class="mt-16"><a href="https://theseoppc.com/contact-us/">Get in touch with our iOS team today</a> and let's build something your users can't stop tapping.</p>
                                </div>
                            </div>
                        </article>

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

@section('styles')
<style>
    /* General Styles */
    .body1 {
        font-family: 'Poppins', sans-serif;
        color: #333;
        line-height: 1.6;
    }
    
    /* Hero Area */
    .inner-hero {
        background-size: cover;
        background-position: center;
        padding: 100px 0;
        position: relative;
        z-index: 1;
        color: #fff;
    }
    
    .inner-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: -1;
    }
    
    .inner-main-heading h1 {
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .breadcrumbs-pages ul {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .breadcrumbs-pages li {
        margin: 0 10px;
        position: relative;
    }
    
    .breadcrumbs-pages li.angle {
        margin: 0 5px;
    }
    
    .breadcrumbs-pages a {
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .breadcrumbs-pages a:hover {
        color: #f8b600;
    }
    
    /* Blog Details Area */
    .blog-details-area {
        padding: 100px 0;
    }
    
    .details-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    
    .heading2 h3 {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #222;
    }
    
    .heading2 p {
        margin-bottom: 15px;
        color: #555;
    }
    
    .service-details-check-list {
        display: flex;
        align-items: flex-start;
        margin-bottom: 10px;
    }
    
    .check-icon span {
        color: #f8b600;
        margin-right: 10px;
        font-size: 18px;
    }
    
    .details-content-text-box {
        background: #f9f9f9;
        padding: 25px;
        border-radius: 8px;
        margin-bottom: 30px;
    }
    
    .details-content-text-box h4 a {
        color: #222;
        font-size: 22px;
        font-weight: 600;
        text-decoration: none;
    }
    
    .details-content-text-box ul {
        margin-left: 20px;
    }
    
    .details-content-text-box ul li {
        margin-bottom: 8px;
        position: relative;
        padding-left: 15px;
    }
    
    .details-content-text-box ul li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 10px;
        width: 6px;
        height: 6px;
        background: #f8b600;
        border-radius: 50%;
    }
    
    .details-border {
        border-top: 1px solid #eee;
        margin-top: 50px;
        padding-top: 50px;
    }
    
    /* Sidebar Styles */
    .sidebar-area {
        padding-left: 15px;
    }
    
    ._sidebar-widget {
        background: #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        padding: 30px;
        margin-bottom: 30px;
        border-radius: 8px;
    }
    
    ._sidebar-widget h3 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #222;
    }
    
    ._search input {
        width: 100%;
        padding: 12px 20px;
        border: 1px solid #eee;
        border-radius: 4px;
        outline: none;
    }
    
    ._search button {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        background: transparent;
        border: none;
        padding: 0 15px;
        color: #555;
    }
    
    .sidebar-list ul li {
        margin-bottom: 10px;
    }
    
    .sidebar-list ul li a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #555;
        text-decoration: none;
        transition: all 0.3s ease;
        padding: 10px 0;
    }
    
    .sidebar-list ul li a:hover {
        color: #f8b600;
    }
    
    .sidebar-list ul li a.active {
        color: #f8b600;
        font-weight: 600;
    }
    
    .sidebar-list ul li a span {
        color: #999;
    }
    
    ._buttons p {
        color: #555;
        margin-bottom: 15px;
    }
    
    .sidebar-btn1, .sidebar-btn2 {
        display: block;
        padding: 12px 20px;
        margin-bottom: 10px;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .sidebar-btn1 {
        background: #f8b600;
        color: #fff;
    }
    
    .sidebar-btn2 {
        background: #222;
        color: #fff;
    }
    
    .sidebar-btn1:hover, .sidebar-btn2:hover {
        opacity: 0.9;
    }
    
    ._contact-form input,
    ._contact-form textarea {
        width: 100%;
        padding: 12px 20px;
        margin-bottom: 15px;
        border: 1px solid #eee;
        border-radius: 4px;
        outline: none;
    }
    
    .theme-btn3 {
        background: #f8b600;
        color: #fff;
        border: none;
        padding: 12px 30px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .theme-btn3:hover {
        background: #222;
    }
    
    /* Responsive Styles */
    @media (max-width: 991px) {
        .inner-hero {
            padding: 80px 0;
        }
        
        .inner-main-heading h1 {
            font-size: 36px;
        }
        
        .blog-details-area {
            padding: 80px 0;
        }
        
        .heading2 h3 {
            font-size: 24px;
        }
    }
    
    @media (max-width: 767px) {
        .inner-hero {
            padding: 60px 0;
        }
        
        .inner-main-heading h1 {
            font-size: 30px;
        }
        
        .blog-details-area {
            padding: 60px 0;
        }
        
        .heading2 h3 {
            font-size: 22px;
        }
        
        .sidebar-area {
            padding-left: 0;
            margin-top: 30px;
        }
    }
    
    @media (max-width: 575px) {
        .inner-main-heading h1 {
            font-size: 26px;
        }
        
        .heading2 h3 {
            font-size: 20px;
        }
    }
</style>
@endsection