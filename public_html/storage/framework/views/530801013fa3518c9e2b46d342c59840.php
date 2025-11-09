<?php $__env->startSection('body-attributes'); ?>
    class="body1"
<?php $__env->stopSection(); ?>

<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('layouts.partials.header.navbar7', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
                            Our Values & Approach
                            </h1>
                            <div class="breadcrumbs-pages">
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('root')); ?>">Home</a>
                                    </li>
                                    <li class="angle">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li>About Us</li>
                                    <li class="angle">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li>Our Values & Approach</li>
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
                                    <img class="w-full" src="/img/service/service-details2-image.png" alt="TSP team discussing values and approach" />
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
                                <h3>About Us</h3>
                                <div class="sidebar-list">
                                    <ul>
                                        <li>
                                            <a href="<?php echo e(route('second', ['about-us', 'our-story'])); ?>">Our Story <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['about-us', 'values-approach'])); ?>" class="active">Values & Approach <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['about-us', 'team'])); ?>">Our Team <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['about-us', 'careers'])); ?>">Careers <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="_sidebar-widget _buttons mt-40">
                                <h3>You Still Have A Question</h3>
                                <p class="mt-16">If you cannot find answer to your question in our FAQ, you can always contact us. We will answer you shortly!</p>
                                <div class="buttons mt-16">
                                    <a href="mailto:contact@theseoppc.com" class="sidebar-btn1"><img src="/img/icons/sidebar-email.png" alt="" /> contact@theseoppc.com</a>
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
                                    <div class="heading2">
                                        <h2>What We Stand For (Without the Buzzwords)</h2>
                                        <p class="mt-16">At <a href="https://theseoppc.com">TSP</a>, we do not hang pretty words on walls. We live them. We believe values are not something you display in a slideshow — they are what you uphold when the client is three time zones away, the deadline is yesterday, and the caffeine machine is broken.</p>
                                        <p class="mt-16">We all have heard of or seen agencies that talk big and deliver small. That's not us. Our values are the reason clients come to us, & more importantly, why they stay.</p>
                                    </div>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h2>Our Core Values</h2>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">1. Real Relationships</a></h4>
                                        <p class="mt-12">We treat clients like partners, not transactions. We listen more than we talk and never forget that on the other side of every email is a human being with a business to run.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">2. No Fluff, No Façade</a></h4>
                                        <p class="mt-12">Transparency isn't a tactic — it's a habit. We give straight answers, not vague projections. If we miss the mark, we own it and fix it fast. If something's not right for your business, we'll say it — even if it costs us the project.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">3. Curiosity Over Comfort</a></h4>
                                        <p class="mt-12">The digital world evolves fast, and we evolve faster. Our team spends more time in learning portals than coffee shops (though we still love a good flat white). From <strong>AI tools</strong> to algorithm shifts — we stay curious, not complacent.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">4. Quality Over Quantity</a></h4>
                                        <p class="mt-12">We'd rather do fewer things really well than take on the world and do it halfway. Every pixel, every <a href="https://theseoppc.com/pricing/ppc/">ad copy</a>, every link — checked, double-checked, and sometimes, obsessed over.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">5. Grit with Grace</a></h4>
                                        <p class="mt-12">Deadlines are sacred. So is sanity. We have taken pride ourselves on being reliable without being robotic. We hustle without losing the human in us.</p>
                                    </div>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h2>Our Approach</h2>
                                        <p class="mt-16">We do not follow a fixed formula. Every business is different, and our approach is customised — always.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">1. Discovery with a Difference</a></h4>
                                        <p class="mt-12">We do not just collect your requirements. We ask the awkward questions others skip. "Why now?" "What if this doesn't work?" "What's the worst outcome you've had before?" — because better questions lead to better strategies.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">2. Strategy Built on Substance</a></h4>
                                        <p class="mt-12">Every <a href="https://theseoppc.com/services/digital-marketing/">digital strategy</a> we build is grounded in real research. We don't pitch services just because they're trending — we recommend them because they're right for your business.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">3. Execution with Expertise</a></h4>
                                        <p class="mt-12">Whether it's <a href="https://theseoppc.com/services/digital-marketing/seo/">SEO</a>, PPC, content marketing, or <a href="https://theseoppc.com/services/web-development/">custom development</a>, our execution is lean, agile, and well-documented. And yes, we meet deadlines without turning into zombies.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">4. Collaboration, Not Control</a></h4>
                                        <p class="mt-12">We don't hijack your brand. We work with your team — sharing updates, bouncing ideas, challenging assumptions, and celebrating wins together.</p>
                                    </div>

                                    <div class="details-content-text-box heading2 mt-30">
                                        <h4><a href="#">5. Review, Refine, Repeat</a></h4>
                                        <p class="mt-12">Digital isn't one-and-done. After launch, we monitor what works, tweak what doesn't, and share our learnings. Because in this space, iteration wins over perfection.</p>
                                    </div>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h2>A Few Honest Truths From Our Team</h2>
                                    </div>
                                    <div class="row pt-10">
                                        <div class="col-md-6">
                                            <div class="service-details-check-list heading2 mt-20">
                                                <div class="check-icon">
                                                    <span><i class="fa-solid fa-check"></i></span>
                                                </div>
                                                <div class="text">
                                                    <p>"Testing is important because if one is not testing, then they are guessing." — Chloe, QA</p>
                                                </div>
                                            </div>
                                            <div class="service-details-check-list heading2 mt-20">
                                                <div class="check-icon">
                                                    <span><i class="fa-solid fa-check"></i></span>
                                                </div>
                                                <div class="text">
                                                    <p>"Dark mode is not just a preference. It's a lifestyle." — Yusuf, DevOps</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="service-details-check-list heading2 mt-20">
                                                <div class="check-icon">
                                                    <span><i class="fa-solid fa-check"></i></span>
                                                </div>
                                                <div class="text">
                                                    <p>"A website with no CTA is like tea with no sugar. Pointless." — Emily, UI</p>
                                                </div>
                                            </div>
                                            <div class="service-details-check-list heading2 mt-20">
                                                <div class="check-icon">
                                                    <span><i class="fa-solid fa-check"></i></span>
                                                </div>
                                                <div class="text">
                                                    <p>"Feelings matter: No matter how well you created their funnel, clients will always appreciate how comfortable they were through important transitions." — Parvin, Strategist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-20">We think humour has a place in professionalism. After all, we're not building satellites. We're building brands people want to connect with.</p>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h2>Why It Works</h2>
                                        <p class="mt-16">We're not perfect — but we're perfectly aligned to deliver real results. Our values keep us grounded. Our approach keeps us sharp. And our attitude? That's what keeps clients smiling.</p>
                                        <p class="mt-16">So whether you're <strong>redesigning your website</strong>, <a href="https://theseoppc.com/pricing/application-development/">launching a mobile app</a>, or <a href="https://theseoppc.com/services/digital-marketing/">scaling your marketing</a> — you'll always know where we stand.</p>
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
<?php echo $__env->make('layouts.base', ['title' => '|| Our Values & Approach'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u521987573/domains/theseoppc.com/public_html/resources/views/about-us/values-approach.blade.php ENDPATH**/ ?>