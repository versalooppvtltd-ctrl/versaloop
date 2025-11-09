@extends('layouts.base', ['title' => '|| Website Redesign & Updates'])

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
                            Website Redesign & Updates
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
                                    <li>Website Redesign & Updates</li>
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
                                    <img class="w-full" src="/img/service/service-details2-image.png" alt="Website redesign team at TSP working on a responsive UI" />
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
                                            <a href="{{ route('second', ['service', 'details2']) }}" class="active">Website Redesign <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details3']) }}">Content Marketing <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details4']) }}">Pay-Per-Click Advertising <span><i class="fa-solid fa-angle-right"></i></span></a>
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
                                    <h3>Website Redesign & Updates</h3>
                                    <p class="mt-16">First thing first: If your website still looks like it's stuck in 2016, we need to talk.</p>
                                    <p class="mt-16">Let's face it — in the fast-evolving digital world, your website has about 3 seconds to impress... or it's game over. Visitors judge your business credibility within moments. If your design is dated, your content's stale, or your user journey feels like a puzzle, you're leaking leads, trust, and sales — every single day.</p>
                                    <p class="mt-16">At TSP (Theseoppc.com), we don't just give your site a facelift — we reinvent it for performance, relevance, and results. Whether you need a full-scale redesign or ongoing website updates, our team ensures your digital front door is modern, mobile-first, and conversion-hungry.</p>
                                </div>

                                <div class="heading2 mt-40">
                                    <h3>Why Redesign Your Website?</h3>
                                    <p class="mt-16">Because first impressions aren't just important — they're make-or-break.</p>
                                    <p class="mt-16">If you've got any of the following, you're long overdue for a website makeover:</p>
                                </div>

                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>A design that's older than your last laptop</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>A homepage that takes ages to load</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>A mobile experience that's, well... terrible</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Content that hasn't changed since the pandemic began</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>High bounce rates and declining conversions</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>You're too embarrassed to share your site</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">The truth is, websites don't age well. Trends evolve. Google rewrites the rules. Visitor expectations get harsher. And if your site isn't actively working for you, it's silently working against you.</p>
                                <p class="mt-16">With our <a href="https://theseoppc.com/services/web-development/maintenance-support/">Website Maintenance & Support</a> plans, we often discover hidden design issues and outdated tech stacks — and a redesign becomes the next logical step.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>What Makes a TSP Website Redesign Different?</h3>
                                    <p class="mt-16">Most agencies will sell you a template with a new colour scheme. We're not most agencies.</p>
                                    <p class="mt-16">We combine behavioural science, <a href="https://theseoppc.com/services/digital-marketing/seo/">SEO</a> strategy, and modern UX/UI principles to build websites that not only look good — but actually convert.</p>
                                    <p class="mt-16">Here's what we bring to the table:</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Design That Reflects Your Brand</h4>
                                    <p class="mt-12">We dig deep into your brand identity, audience, and goals — then build a look and feel that resonates. No cookie-cutter layouts here. Whether you're a luxury law firm in London or a feisty e-commerce startup in Toronto, your new website will feel like you — only sharper.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>SEO-Friendly From the Ground Up</h4>
                                    <p class="mt-12">A redesign is a golden opportunity to fix structural <a href="https://theseoppc.com/services/digital-marketing/seo/">SEO</a> issues, speed problems, and messy URLs. We bake in best practices during the build, not as an afterthought.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Built for Mobile & Accessibility</h4>
                                    <p class="mt-12">Over 60% of traffic is now mobile — and if your site still zooms and pinches like it's 2011, you're frustrating users and hurting conversions. We redesign sites to be lightning-fast, thumb-friendly, and WCAG-compliant.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Conversion-Led Layouts</h4>
                                    <p class="mt-12">What's the point of redesigning if no one fills out your form or buys your stuff? We use data-driven design with persuasive CTAs, heatmap insights, and modern trust signals to nudge visitors exactly where you want them.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Smooth CMS Integration</h4>
                                    <p class="mt-12">Want to update content yourself post-launch? No problem. We specialise in platforms like <a href="https://theseoppc.com/services/web-development/cms-solutions/">WordPress, Shopify, and custom CMS</a> builds — with intuitive admin panels, not clunky dashboards that require a developer to change a comma.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>What's Included in Our Website Redesign & Update Services?</h3>
                                    <p class="mt-16">We don't just flip your homepage. Here's what our typical redesign process includes:</p>
                                </div>
                                
                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>UX & visual design audit</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Competitor analysis and benchmarking</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Sitemap restructuring and navigation improvement</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Full design and front-end overhaul</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Performance optimisation & Core Web Vitals tuning</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>SEO migration strategy (to retain rankings)</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>CMS or e-commerce platform upgrade</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Content rewrites (if needed)</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Tracking & analytics setup</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Speed optimisation including caching, compression, and lazy loading</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">We also offer <a href="https://theseoppc.com/services/web-development/maintenance-support/">Ongoing Maintenance & Support</a> plans so you're never left in the dark post-launch.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Real-World Redesign Wins (Case Studies)</h3>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Law Firm — London, UK</h4>
                                    <p class="mt-12"><strong>Problem:</strong> A respected solicitor firm in London had an outdated, slow-loading WordPress site with broken menus and a non-existent mobile layout.</p>
                                    <p class="mt-12"><strong>Solution:</strong> After a full redesign, including improved SEO structure, streamlined contact flow, and real-time chat integration.</p>
                                    <p class="mt-12"><strong>Result:</strong> Bounce rates dropped by 42% and lead conversions tripled within 3 months.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Fashion Retailer — Toronto, Canada</h4>
                                    <p class="mt-12"><strong>Problem:</strong> A Shopify-based fashion brand came to us with a generic theme and sluggish checkout.</p>
                                    <p class="mt-12"><strong>Solution:</strong> We redesigned the entire store, rewrote product page layouts, and implemented mobile-first design.</p>
                                    <p class="mt-12"><strong>Result:</strong> 47% increase in mobile conversions and a 63% drop in cart abandonment.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Logistics Provider — Mumbai, India</h4>
                                    <p class="mt-12"><strong>Problem:</strong> An industrial logistics company had no real UX — just a static HTML site.</p>
                                    <p class="mt-12"><strong>Solution:</strong> We rebuilt it in WordPress with dynamic content blocks, multilingual support, and user-specific landing pages.</p>
                                    <p class="mt-12"><strong>Result:</strong> Within 6 months, their site ranked in the top 5 for 8 local B2B keywords.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>SaaS Product — Austin, USA</h4>
                                    <p class="mt-12"><strong>Problem:</strong> A tech startup had grown out of their template site.</p>
                                    <p class="mt-12"><strong>Solution:</strong> We created a fully custom UI, mapped out user journeys, and integrated HubSpot forms for lead capture.</p>
                                    <p class="mt-12"><strong>Result:</strong> Time on site jumped from 29 seconds to over 2 minutes. Their pitch deck now starts with a screenshot of the homepage — no joke.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Who Needs a Website Redesign?</h3>
                                    <p class="mt-16">Short answer: Anyone whose site no longer reflects their business growth, tech stack, or marketing goals.</p>
                                    <p class="mt-16">But to be more specific, you're a great fit for a redesign if:</p>
                                </div>
                                
                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>You've changed branding or service offerings</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Your CMS or theme is outdated or unsupported</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>You're struggling with SEO and mobile performance</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Your users can't easily find what they need</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>You want better conversion from your paid traffic campaigns</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>You're just plain tired of your site and need a spark</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">Our <a href="https://theseoppc.com/services/it-consulting/">IT Consulting</a> team can also advise you on tech stack changes, CMS migrations, and integration strategies if your project needs a bigger lift.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>How Long Does a Redesign Take?</h3>
                                    <p class="mt-16">It depends on the size, complexity, and current state of your site. For example:</p>
                                </div>
                                
                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Small brochure sites: 2–3 weeks</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Mid-size WordPress: 4–6 weeks</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Full e-commerce rebuilds: 6–10 weeks</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Custom platforms or integrations: case by case</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">But here's the kicker — we don't vanish post-launch. You'll have full access to our <a href="https://theseoppc.com/services/web-development/maintenance-support/">support</a> team, training resources, and optional monthly retainers for continuous improvements.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>FAQs — Website Redesign & Updates</h3>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Will I lose my SEO rankings?</h4>
                                    <p class="mt-12">No — we create a proper SEO migration plan with redirects, updated metadata, and URL preservation to protect (and often improve) your search visibility.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Can you redesign sites built by other developers?</h4>
                                    <p class="mt-12">Absolutely. We often take over legacy projects and modernise them — even if they were custom-coded or built on older platforms.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>What if I only want to update a few sections, not the whole site?</h4>
                                    <p class="mt-12">We offer partial redesigns too. Whether it's just the homepage, product pages, or blog layout, we'll tailor the work to your goals.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>Do you offer content writing or just design?</h4>
                                    <p class="mt-12">Yes, we can help with content audits, rewriting, or even full <a href="https://theseoppc.com/services/digital-marketing/content-marketing/">content marketing</a> strategies to support your redesign.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4>How much does it cost?</h4>
                                    <p class="mt-12">Our <a href="https://theseoppc.com/pricing/web-development/">Web Development Packages</a> start from affordable one-time upgrades to full custom rebuilds. We'll scope your project with a transparent quote before work begins.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Ready to Modernise Your Website?</h3>
                                    <p class="mt-16">Your business has evolved. It's time your website caught up.</p>
                                    <p class="mt-16">Whether you're dealing with clunky navigation, old-school layouts, or mobile frustration — TSP can help you reimagine your digital presence without losing what makes your brand unique.</p>
                                    <p class="mt-16">Visit our <a href="https://theseoppc.com/contact-us/">Contact Page</a> to start your redesign journey. We'll audit your current site, identify areas of improvement, and build you something worthy of your next stage of growth.</p>
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