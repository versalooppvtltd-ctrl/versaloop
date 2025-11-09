@extends('layouts.base', ['title' => '|| Web Development Portfolio & Case Studies'])

@section('body-attributes')
    class="body1"
@endsection

@section('header')
    @include('layouts.partials.header.navbar7')
    @include('layouts.partials.header.mobile-nav')
@endsection

@section('content')
    <main>
        <!-- Hero Section -->
        <section class="hero-section bg-dark text-white py-5" style="background-image: url(/img/bg/inner-hero-bg.jpg); background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="display-4 fw-bold mb-4">Web Development Portfolio & Case Studies</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('root') }}" class="text-white">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" class="text-white">Service</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Web Development Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Introduction -->
                        <article class="mb-5">
                            <div class="mb-4">
                                <img src="/img/service/service-details2-image.png" alt="Web Development Portfolio" class="img-fluid rounded">
                            </div>
                            <h2 class="mb-4">Web Development Portfolio & Case Studies</h2>
                            <p class="lead">Be wise and believe proof more than promises.</p>
                            <p>Proof, not promises — see how we've helped real businesses turn their websites into revenue engines.</p>
                            <p>At TSP (<a href="https://theseoppc.com/" class="text-primary">Theseoppc.com</a>), we don't just talk a good game. Let our work do the talking. This portfolio and case study section is your backstage pass into the results we've delivered across Canada, the UK, India, and beyond. It does not matter if it's building <a href="https://theseoppc.com/services/web-development/landing-pages/" class="text-primary">high-converting landing pages</a> for a logistics brand or <a href="https://theseoppc.com/services/web-development/redesign-updates/" class="text-primary">redesigning a law firm's outdated CMS</a> from the ground up, every line of code and pixel of design serves a strategic purpose. And as the wise men would say — Trust Team TSP.</p>
                        </article>

                        <!-- Why Portfolio Matters -->
                        <article class="mb-5">
                            <h2 class="mb-4">Why Our Portfolio Matters</h2>
                            <p>Because it's not about what we "can" do — it's what we've already done. And what we've done is:</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Improved conversion rates by up to 300%</li>
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Reduced bounce rates by 60%</li>
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Designed a seamless user experience tailored for global users spanning five different time zones</li>
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Built custom dashboards for complex <a href="https://theseoppc.com/services/web-development/ecommerce-websites/" class="text-primary">e-commerce platforms</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Increased <a href="https://theseoppc.com/services/digital-marketing/seo/" class="text-primary">organic SEO rankings</a> and leads month-on-month</li>
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Repaired broken site structures without losing SEO traction</li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <!-- Featured Projects -->
                        <article class="mb-5">
                            <h2 class="mb-4">Featured Projects Across Sectors</h2>
                            <p>Let us break down some tangible successes we've helped our clients achieve. This should answer some of your FAQs (I mean Frequently Answered Questions):</p>
                            
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title">Legal Firm – London, UK</h4>
                                    <p class="card-text"><strong>Problem:</strong> Their <a href="https://theseoppc.com/services/web-development/cms-solutions/" class="text-primary">WordPress</a> site hadn't been updated in 5 years. Broken menus, non-responsive layout, and no way to securely collect leads. Let's say the situation was really messed up — until Team TSP took over the scene.</p>
                                    <p class="card-text"><strong>Solution:</strong> We rolled out a fresh WordPress redesign with:</p>
                                    <ul>
                                        <li>GDPR-compliant lead forms</li>
                                        <li>Streamlined page hierarchy</li>
                                        <li>Built-in chat function for real-time consultations</li>
                                    </ul>
                                    <p class="card-text"><strong>Result:</strong> Bounce rate reduced by 42%, and consultation bookings tripled within just three months.</p>
                                    <p class="card-text"><strong>Service Highlight:</strong> <a href="https://theseoppc.com/services/web-development/redesign-updates/" class="text-primary">Website Redesign & Updates</a></p>
                                </div>
                            </div>
                            
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title">Fashion Retailer – Toronto, Canada</h4>
                                    <p class="card-text"><strong>Problem:</strong> High cart abandonment. Poor mobile performance. Generic Shopify template killing their brand vibe. Again our custom solution changed the situation around.</p>
                                    <p class="card-text"><strong>Solution:</strong> We scrapped the old theme and rebuilt it using custom Liquid templates. Then:</p>
                                    <ul>
                                        <li>Implemented lazy loading for high-res images</li>
                                        <li>Rewrote product descriptions with integrated <a href="https://theseoppc.com/services/digital-marketing/content-marketing/" class="text-primary">SEO copy</a></li>
                                        <li>Integrated intelligent filters and machine-learning-driven product recommendations.</li>
                                    </ul>
                                    <p class="card-text"><strong>Result:</strong> 47% increase in mobile purchases and 63% drop in cart abandonment.</p>
                                    <p class="card-text"><strong>Service Highlight:</strong> <a href="https://theseoppc.com/services/web-development/ecommerce-websites/" class="text-primary">E-commerce Websites</a></p>
                                </div>
                            </div>
                            
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title">Logistics SaaS – Mumbai, India</h4>
                                    <p class="card-text"><strong>Problem:</strong> Outdated HTML site with zero localisation and broken navigation. No rankings, no traffic, no leads.</p>
                                    <p class="card-text"><strong>Solution:</strong></p>
                                    <ul>
                                        <li>Migrated to a responsive <a href="https://theseoppc.com/services/web-development/cms-solutions/" class="text-primary">WordPress</a> framework</li>
                                        <li>Added multilingual support (English, Hindi, Arabic)</li>
                                        <li>Created custom <a href="https://theseoppc.com/services/web-development/landing-pages/" class="text-primary">landing pages</a> per city served</li>
                                    </ul>
                                    <p class="card-text"><strong>Result:</strong> Within 6 months, they ranked Top 5 for 8 local B2B keywords and saw a 118% increase in inbound leads.</p>
                                    <p class="card-text"><strong>Service Highlight:</strong> Landing Pages & Conversion Optimisation</p>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Startup SaaS – Austin, USA</h4>
                                    <p class="card-text"><strong>Problem:</strong> Template-based design with no storytelling. Weak visual hierarchy, low session time.</p>
                                    <p class="card-text"><strong>Solution:</strong></p>
                                    <ul>
                                        <li>Custom UI overhaul</li>
                                        <li>Persona-based navigation redesign</li>
                                        <li>Integrated HubSpot and heatmaps for testing</li>
                                    </ul>
                                    <p class="card-text"><strong>Result:</strong> Session duration more than doubled (from 29s to 2m+), and new demo requests rose by 84%.</p>
                                    <p class="card-text"><strong>Service Highlight:</strong> <a href="https://theseoppc.com/services/web-development/custom-web-design/" class="text-primary">Custom Web Design & Development</a></p>
                                </div>
                            </div>
                        </article>

                        <!-- Diverse Industries -->
                        <article class="mb-5">
                            <h2 class="mb-4">Diverse Industries, But TSP Has Given Consistent Results</h2>
                            <p>We've worked across:</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Law, finance, healthcare, and regulated industries</li>
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <a href="https://theseoppc.com/services/web-development/ecommerce-websites/" class="text-primary">E-commerce</a> and D2C</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <a href="https://theseoppc.com/services/software-development/" class="text-primary">SaaS</a> and B2B platforms</li>
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Local SMEs and global enterprise teams</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Multilingual and <a href="https://theseoppc.com/services/web-development/" class="text-primary">accessibility-first projects</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <p class="mt-4">Every business is different — but one thing remains true: a great digital presence changes everything.</p>
                        </article>

                        <!-- Our Process -->
                        <article class="mb-5">
                            <h2 class="mb-4">Our Process: From Audit to Aftercare</h2>
                            
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title">1. Discovery & Audit</h4>
                                    <p class="card-text">We never build blind. We kick off every project with an in-depth exploration:</p>
                                    <ul>
                                        <li>What are your users doing (or not doing)?</li>
                                        <li>What's broken?</li>
                                        <li>What's missing?</li>
                                        <li>What does success look like?</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title">2. Strategy & Roadmapping</h4>
                                    <p class="card-text">From user flows to wireframes, we plan every element before we touch a line of code. We align design, performance, and <a href="https://theseoppc.com/services/digital-marketing/content-marketing/" class="text-primary">content</a> from day one.</p>
                                </div>
                            </div>
                            
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title">3. Build & Test</h4>
                                    <p class="card-text">Whether we're working in Laravel, <a href="https://theseoppc.com/services/web-development/cms-solutions/" class="text-primary">WordPress</a>, or <a href="https://theseoppc.com/services/web-development/ecommerce-websites/" class="text-primary">Shopify</a>, every build goes through:</p>
                                    <ul>
                                        <li><a href="https://theseoppc.com/services/digital-marketing/seo/technical-seo/" class="text-primary">SEO technical compliance</a></li>
                                        <li>Core Web Vitals optimisation</li>
                                        <li>Mobile responsiveness</li>
                                        <li>Accessibility checks (WCAG compliance)</li>
                                        <li>Staging previews and version control</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">4. Launch & Post-Launch</h4>
                                    <p class="card-text">We don't just hand it over and disappear. We:</p>
                                    <ul>
                                        <li>Monitor analytics in real-time</li>
                                        <li>Offer training for your team</li>
                                        <li>Provide optional <a href="https://theseoppc.com/services/web-development/maintenance-support/" class="text-primary">Website Maintenance & Support</a> to keep you running like a dream</li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <!-- White-Label Work -->
                        <article class="mb-5">
                            <h2 class="mb-4">White-Label Work for Agencies</h2>
                            <p>We've also done white-label work for digital agencies in:</p>
                            <ul>
                                <li>Vancouver</li>
                                <li>Birmingham</li>
                                <li>Dubai</li>
                                <li>New York</li>
                            </ul>
                            <p>They trust us to handle <a href="https://theseoppc.com/services/software-development/" class="text-primary">full-stack development</a>, client communications, and even performance reporting — under their brand. Our NDA? Rock-solid. Our quality? Even better.</p>
                            <p><strong>Agency partnerships available:</strong> <a href="https://theseoppc.com/contact-us/" class="text-primary">Contact us</a> to learn more.</p>
                        </article>

                        <!-- Real Metrics -->
                        <article class="mb-5">
                            <h2 class="mb-4">Real Metrics. No Vanity.</h2>
                            <p>We're big believers in:</p>
                            
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Bounce rate changes</li>
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Time-on-site increases</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Conversion form submissions</li>
                                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> E-commerce checkout success %</li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <a href="https://theseoppc.com/services/digital-marketing/seo/" class="text-primary">SEO ranking deltas</a></li>
                                <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> Load speed improvements</li>
                            </ul>
                            
                            <p class="mt-4">These aren't "nice-to-have" numbers. They're how we measure your digital ROI.</p>
                        </article>

                        <!-- Thinking About Project -->
                        <article class="mb-5">
                            <h2 class="mb-4">Thinking About Your Own Project?</h2>
                            <p>If your current website isn't making you proud — or profitable — we're ready to change that.</p>
                            <p><strong>Common pain points we help fix:</strong></p>
                            <ul>
                                <li>Low conversion rates from <a href="https://theseoppc.com/services/digital-marketing/ppc/" class="text-primary">PPC campaigns</a></li>
                                <li>Users dropping off before checkout</li>
                                <li>Confusing navigation or site structure</li>
                                <li>Lack of trust or outdated design</li>
                                <li><a href="https://theseoppc.com/services/digital-marketing/seo/" class="text-primary">SEO performance</a> stuck in the mud</li>
                            </ul>
                            <p>Whether you're a solo entrepreneur, startup, or scaling company, we tailor every project for impact.</p>
                        </article>

                        <!-- Ready to Join -->
                        <article class="mb-5">
                            <h2 class="mb-4">Ready to Join Our Portfolio?</h2>
                            <p>Let us turn your website into our next case study — in the best way possible.</p>
                            <p>Visit our <a href="https://theseoppc.com/contact-us/" class="text-primary">Contact Page</a> and tell us a bit about your goals. We'll review your site, run a free audit, and propose the smartest route forward — no fluff, no hard sell.</p>
                            <a href="https://theseoppc.com/contact-us/" class="btn btn-primary btn-lg mt-3">Contact Us Now</a>
                        </article>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="sidebar-area mt-5 mt-lg-0">
                            <!-- Search Widget -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 mb-3">Search</h3>
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                                        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <!-- Categories Widget -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 mb-3">Categories</h3>
                                    <div class="list-group">
                                        <a href="{{ route('second', ['service', 'details1']) }}" class="list-group-item list-group-item-action">SEO Marketing</a>
                                        <a href="{{ route('second', ['service', 'details2']) }}" class="list-group-item list-group-item-action active">Social Media Strategy</a>
                                        <a href="{{ route('second', ['service', 'details3']) }}" class="list-group-item list-group-item-action">Content Marketing</a>
                                        <a href="{{ route('second', ['service', 'details4']) }}" class="list-group-item list-group-item-action">Pay-Per-Click Advertising</a>
                                        <a href="{{ route('second', ['service', 'details5']) }}" class="list-group-item list-group-item-action">Travel Guide Expertise</a>
                                        <a href="{{ route('second', ['service', 'details6']) }}" class="list-group-item list-group-item-action">HR Staffing Agency</a>
                                        <a href="{{ route('second', ['service', 'details7']) }}" class="list-group-item list-group-item-action">Insurance Policy</a>
                                        <a href="{{ route('second', ['service', 'details8']) }}" class="list-group-item list-group-item-action">Real Estate</a>
                                        <a href="{{ route('second', ['service', 'details9']) }}" class="list-group-item list-group-item-action">Startup Agency</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Question Widget -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h3 class="h5 mb-3">You Still Have A Question</h3>
                                    <p class="mb-3">If you cannot find answer to your question our FAQ, you can always contact us. Web will answer you shortly!</p>
                                    <div class="d-grid gap-2">
                                        <a href="mailto:Infoseoxagency@gmail.com" class="btn btn-outline-primary text-start"><i class="fas fa-envelope me-2"></i> Infoseoxagency@gmail.com</a>
                                        <a href="tel:123-456-7890" class="btn btn-outline-primary text-start"><i class="fas fa-phone me-2"></i> 123-456-7890</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form Widget -->
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="h5 mb-3">Get A Free Quote</h3>
                                    <form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                        </div>
                                        <div class="mb-3">
                                            <input type="number" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">Send <i class="fas fa-arrow-right ms-2"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.partials.footer')
@endsection