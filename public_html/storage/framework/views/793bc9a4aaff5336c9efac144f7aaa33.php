<?php $__env->startSection('body-attributes'); ?>
    class="body1"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('layouts.partials.header.navbar2', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('layouts.partials.header.mobile-nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <main>
        <!-- ===== HERO AREA START ===== -->
        <div class="inner-hero" style="background-image: url(/img/bg/inner-hero-bg.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="inner-main-heading">
                            <h1>
                            Web Development Portfolio & Case Studies
                            </h1>
                            <div class="breadcrumbs-pages">
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('root')); ?>">Home</a>
                                    </li>
                                    <li class="angle">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li>Service</li>
                                    <li class="angle">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li>Web Development Portfolio & Case Studies</li>
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
                                    <img class="w-full" src="/img/service/service-details2-image.png" alt="" />
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
                                            <a href="<?php echo e(route('second', ['service', 'details1'])); ?>">SEO Marketing <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['service', 'details2'])); ?>" class="active">Social Media Strategy <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['service', 'details3'])); ?>">Content Marketing <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['service', 'details4'])); ?>">Pay-Per-Click Advertising <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['service', 'details5'])); ?>">Travel Guide Expertise <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['service', 'details6'])); ?>">HR Staffing Agency <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['service', 'details7'])); ?>">Insurance Policy <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['service', 'details8'])); ?>">Real Estate <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['service', 'details9'])); ?>">Startup Agency <span><i class="fa-solid fa-angle-right"></i></span></a>
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
                                    <h3>Web Development Portfolio & Case Studies</h3>
                                    <p class="mt-16">Be wise and believe proof more than promises.<br>
                                    Proof, not promises — see how we've helped real businesses turn their websites into revenue engines.</p>
                                    <p class="mt-16">At TSP (Theseoppc.com), we don't just talk a good game. Let our work do the talking. This portfolio and case study section is your backstage pass into the results we've delivered across Canada, the UK, India, and beyond. It does not matter if it's building <a href="https://theseoppc.com/public/services/web-development">high-converting landing pages</a>  for a logistics brand or <a href="https://theseoppc.com/services/web-development/redesign-updates/">redesigning a law firm's outdated CMS</a> from the ground up, every line of code and pixel of design serves a strategic purpose. And as the wise men would say — Trust Team TSP.</p>
                                </div>

                                <div class="heading2 mt-40">
                                    <h3>Why Our Portfolio Matters</h3>
                                    <p class="mt-16">Because it's not about what we "can" do — it's what we've already done. And what we've done is:</p>
                                </div>

                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Improved conversion rates by up to 300%</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Reduced bounce rates by 60%</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                            <div>
                                            <p>Designed a seamless user experience
                                            tailored for global users spanning five different time zones</p>
                                        </div>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                            
                                            <div>
                                            <p>Built custom dashboards for complex <a href="https://theseoppc.com/services/web-development/ecommerce-websites/">e-commerce
                                                platforms</a></p>
                                            </div>
                                        </div>
                                      
                                    </div>
                                 
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Increased <a href="https://theseoppc.com/services/digital-marketing/seo/">organic
                                                SEO rankings</a>and leads month-on-month</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Repaired broken site structures without losing SEO traction</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                                        <a href="<?php echo e(route('root')); ?>">Home</a>

                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Featured Projects Across Sectors</h3>
                                    <p class="mt-16">Let us break down some tangible successes we've helped our clients achieve. This should answer some of your FAQs (I mean Frequently Answered Questions):</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">Legal Firm – London, UK</a></h4>
                                    <p class="mt-12"><strong>Problem:</strong> Their <a href="https://theseoppc.com/services/web-development/cms-solutions/">WordPress</a> site hadn't been updated in 5 years. Broken menus, non-responsive layout, and no way to securely collect leads. Let's say the situation was really messed up — until Team TSP took over the scene.</p>
                                    <p class="mt-12"><strong>Solution:</strong> We rolled out a fresh WordPress redesign with:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>GDPR-compliant lead forms</li>
                                        <li>Streamlined page hierarchy</li>
                                        <li>Built-in chat function for real-time consultations</li>
                                    </ul>
                                    <p class="mt-12"><strong>Result:</strong> Bounce rate reduced by 42%, and consultation bookings tripled within just three months.</p>
                                    <p class="mt-12"><strong>Service Highlight:</strong> <a href="https://theseoppc.com/services/web-development/redesign-updates/">Website
                                    Redesign &amp; Updates</a></p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">Fashion Retailer – Toronto, Canada</a></h4>
                                    <p class="mt-12"><strong>Problem:</strong> High cart abandonment. Poor mobile performance. Generic Shopify template killing their brand vibe. Again our custom solution changed the situation around.</p>
                                    <p class="mt-12"><strong>Solution:</strong> We scrapped the old theme and rebuilt it using custom Liquid templates. Then:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>Implemented lazy loading for high-res images</li>
                                        <li>Rewrote product descriptions with integrated <a href="https://theseoppc.com/services/digital-marketing/content-marketing/">SEO
                                        copy</a></li>
                                        <li>Integrated intelligent filters and machine-learning-driven product recommendations.</li>
                                    </ul>
                                    <p class="mt-12"><strong>Result:</strong> 47% increase in mobile purchases and 63% drop in cart abandonment.</p>
                                    <p class="mt-12"><strong>Service Highlight:</strong> <a href="https://theseoppc.com/services/web-development/ecommerce-websites/">E-commerce
                                    Websites</a></p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">Logistics SaaS – Mumbai, India</a></h4>
                                    <p class="mt-12"><strong>Problem:</strong> Outdated HTML site with zero localisation and broken navigation. No rankings, no traffic, no leads.</p>
                                    <p class="mt-12"><strong>Solution:</strong></p>
                                    <ul class="mt-12 ml-20">
                                        <li>Migrated to a responsive <a href="https://theseoppc.com/services/web-development/cms-solutions/">WordPress</a> framework</li>
                                        <li>Added multilingual support (English, Hindi, Arabic)</li>
                                        <li>Created custom <a href="https://theseoppc.com/services/web-development/landing-pages/">landing
                                        pages</a> per city served</li>
                                    </ul>
                                    <p class="mt-12"><strong>Result:</strong> Within 6 months, they ranked Top 5 for 8 local B2B keywords and saw a 118% increase in inbound leads.</p>
                                    <p class="mt-12"><strong>Service Highlight:</strong> Landing Pages & Conversion Optimisation</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">Startup SaaS – Austin, USA</a></h4>
                                    <p class="mt-12"><strong>Problem:</strong> Template-based design with no storytelling. Weak visual hierarchy, low session time.</p>
                                    <p class="mt-12"><strong>Solution:</strong></p>
                                    <ul class="mt-12 ml-20">
                                        <li>Custom UI overhaul</li>
                                        <li>Persona-based navigation redesign</li>
                                        <li>Integrated HubSpot and heatmaps for testing</li>
                                    </ul>
                                    <p class="mt-12"><strong>Result:</strong> Session duration more than doubled (from 29s to 2m+), and new demo requests rose by 84%.</p>
                                    <p class="mt-12"><strong>Service Highlight:</strong> <a href="https://theseoppc.com/services/web-development/custom-web-design/">Custom
                                    Web Design &amp; Development</a></p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Diverse Industries, But TSP Has Given Consistent Results</h3>
                                    <p class="mt-16">We've worked across:</p>
                                </div>
                                
                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Law, finance, healthcare, and regulated industries</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="https://theseoppc.com/services/web-development/ecommerce-websites/">E-commerce</a> and D2C</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="https://theseoppc.com/services/software-development/">SaaS</a> and B2B platforms</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Local SMEs and global enterprise teams</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p> Multilingual and <a href="https://theseoppc.com/services/web-development/">accessibility-first
                                                projects</a></p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Every business is different — but one
                                                thing remains true: a great digital presence changes everything.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">Every business is different — but one thing remains true: a great digital presence changes everything.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Our Process: From Audit to Aftercare</h3>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">1. Discovery & Audit</a></h4>
                                    <p class="mt-12">We never build blind. We kick off every project with an in-depth exploration:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>What are your users doing (or not doing)?</li>
                                        <li>What's broken?</li>
                                        <li>What's missing?</li>
                                        <li>What does success look like?</li>
                                    </ul>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">2. Strategy & Roadmapping</a></h4>
                                    <p class="mt-12">From user flows to wireframes, we plan every element before we touch a line of code. We align design, performance, and content from day one.</p>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">3. Build & Test</a></h4>
                                    <p class="mt-12">Whether we're working in Laravel, WordPress, or Shopify, every build goes through:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>SEO technical compliance</li>
                                        <li>Core Web Vitals optimisation</li>
                                        <li>Mobile responsiveness</li>
                                        <li>Accessibility checks (WCAG compliance)</li>
                                        <li>Staging previews and version control</li>
                                    </ul>
                                </div>
                                
                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">4. Launch & Post-Launch</a></h4>
                                    <p class="mt-12">We don't just hand it over and disappear. We:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>Monitor analytics in real-time</li>
                                        <li>Offer training for your team</li>
                                        <li>Provide optional Website Maintenance & Support to keep you running like a dream</li>
                                    </ul>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>White-Label Work for Agencies</h3>
                                    <p class="mt-16">We've also done white-label work for digital agencies in:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>Vancouver</li>
                                        <li>Birmingham</li>
                                        <li>Dubai</li>
                                        <li>New York</li>
                                    </ul>
                                    <p class="mt-16">They trust us to handle full-stack development, client communications, and even performance reporting — under their brand. Our NDA? Rock-solid. Our quality? Even better.</p>
                                    <p class="mt-16">Agency partnerships available: Contact us to learn more.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Real Metrics. No Vanity.</h3>
                                    <p class="mt-16">We're big believers in:</p>
                                </div>
                                
                                <div class="row pt-10">
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Bounce rate changes</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Time-on-site increases</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="service-details-check-list heading2 mt-20">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>Conversion form submissions</p>
                                            </div>
                                        </div>
                                        <div class="service-details-check-list heading2 mt-10">
                                            <div class="check-icon">
                                                <span><i class="fa-solid fa-check"></i></span>
                                            </div>
                                            <div class="text">
                                                <p>E-commerce checkout success %</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <p class="mt-20">These aren't "nice-to-have" numbers. They're how we measure your digital ROI.</p>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Thinking About Your Own Project?</h3>
                                    <p class="mt-16">If your current website isn't making you proud — or profitable — we're ready to change that.</p>
                                    <p class="mt-16">Common pain points we help fix:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>Low conversion rates from PPC campaigns</li>
                                        <li>Users dropping off before checkout</li>
                                        <li>Confusing navigation or site structure</li>
                                        <li>Lack of trust or outdated design</li>
                                        <li>SEO performance stuck in the mud</li>
                                    </ul>
                                    <p class="mt-16">Whether you're a solo entrepreneur, startup, or scaling company, we tailor every project for impact.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Ready to Join Our Portfolio?</h3>
                                    <p class="mt-16">Let us turn your website into our next case study — in the best way possible.</p>
                                    <p class="mt-16">Visit our Contact Page and tell us a bit about your goals. We'll review your site, run a free audit, and propose the smartest route forward — no fluff, no hard sell.</p>
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

    <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', ['title' => '|| Web Development Portfolio & Case Studies'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/dell/repos/laravel_project/seox_2/SEOX/resources/views/services/web-development.blade.php ENDPATH**/ ?>