<!-- =====HEADER START======= -->
<header>
    <div id="vl-header-sticky" class="vl-header-area1 header-tranperent">
        <div class="container header1-bg">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="vl-logo">
                        <a href="<?php echo e(route('root')); ?>" class="header1-logo-block"><img src="/img/logo/white-logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block text-end">
                    <div class="vl-main-menu">
                        <nav class="vl-mobile-menu-active">
                            <ul>
                               
                                <li class="has-dropdown">
                                    <a href="#">About Us <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="<?php echo e(route('second', ['about-us', 'introduction'])); ?>">Introduction</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['about-us', 'mission-vision'])); ?>">Company Mission, Vision, and Story</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['about-us', 'team'])); ?>">Team Introduction</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['about-us', 'values-approach'])); ?>">Values & Approach</a>
                                        </li>
                                        <li>
                                        <a href="#">Testimonials/Reviews </a>
                                        </li>
                                    </ul>
                                </li>
                            
                             
                              
                                <li>
                                    <a href="#">Services <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="#" class="span-arrow">Digital Marketing <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                            <li class="has-dropdown">
                                                <a href="#">SEO Services <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                                <ul class="sub-menu menu1">
                                                    <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'on-page-seo'])); ?>">On-Page SEO</a></li>
                                                    <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'off-page-seo'])); ?>">Off-Page SEO</a></li>
                                                    <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'technical-seo'])); ?>">Technical SEO</a></li>
                                                    <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'local-seo'])); ?>">Local SEO</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                    <a href="#">PPC Services <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                                    <ul class="sub-menu menu1">
                                                        <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'google-ads'])); ?>">Google Ads</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'facebook-ads'])); ?>">Facebook Ads</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'sem'])); ?>">Search Engine Marketing</a></li>
                                                    </ul>
                                            </li>
                                            <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'content-marketing'])); ?>">Content Marketing</a></li>
                                                <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'smo'])); ?>">Social Media Optimization</a></li>
                                                <li><a href="<?php echo e(route('second', ['services', 'digital-marketing', 'email-marketing'])); ?>">Email Marketing</a></li>
                                          
                                               

                                                <!-- Blockchain Applications -->
                                                <li>
                                                    <a href="<?php echo e(route('second', ['services', 'blockchain-applications'])); ?>">Blockchain Applications</a>
                                                </li>   
                                                <!-- <a href="#" class="span-arrow">DIGITAL MARKETING PAY PER CLICK (PPC) Campaigns Google Ads, Retargeting<span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                                    <ul class="sub-menu menu1">
                                                        <li>
                                                            <a href="<?php echo e(route('second', ['service', 'services'])); ?>">DIGITAL MARKETING PAY PER CLICK (PPC) Campaigns Facebook Ads, Retargeting </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo e(route('second', ['service', 'service2'])); ?>">DIGITAL MARKETING Search Engine Marketing SEM</a>
                                                        </li>
                                                    </ul> -->
                                                </li>
                                                </ul>
                                                    </li>
                                                    <li class="has-dropdown">
                                                    <a href="<?php echo e(route('second', ['services', 'web-development'])); ?>">Web Development <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                                    <ul class="sub-menu menu1">
                                                        <li><a href="<?php echo e(route('second', ['services', 'web-development', 'custom-design'])); ?>">Custom Design</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'web-development', 'ecommerce'])); ?>">E-commerce</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'web-development', 'cms'])); ?>">CMS Solutions</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'web-development', 'landing-pages'])); ?>">Landing Pages</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-dropdown">
                                                    <a href="<?php echo e(route('second', ['services', 'mobile-app-development'])); ?>">Mobile App Development <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                                    <ul class="sub-menu menu1">
                                                        <li><a href="<?php echo e(route('second', ['services', 'mobile-app-development', 'android'])); ?>">Android App Development</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'mobile-app-development', 'ios'])); ?>">iOS App Development</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'mobile-app-development', 'hybrid'])); ?>">Hybrid Mobile App Development</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'mobile-app-development', 'ui-ux-design'])); ?>">UI/UX Design for Apps</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'mobile-app-development', 'maintenance-updates'])); ?>">App Maintenance & Updates</a></li>
                                                        <li><a href="<?php echo e(route('second', ['services', 'mobile-app-development', 'aso'])); ?>">App Store Optimization (ASO)</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo e(route('second', ['services', 'managed-services'])); ?>">Managed Services</a></li>
                                                <li><a href="<?php echo e(route('second', ['services', 'it-consulting'])); ?>">IT Consulting</a></li>
                                                <li><a href="<?php echo e(route('second', ['services', 'cloud-services'])); ?>">Cloud Services</a></li>
                                                <li><a href="<?php echo e(route('second', ['services', 'ai-integration'])); ?>">AI Integration</a></li>
                                                <li>
                                                    <a href="<?php echo e(route('second', ['services', 'ai-integration'])); ?>">AI Integration</a>
                                                </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Pricing <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <!-- Web Development Packages -->
                                        <li class="has-dropdown">
                                            <a href="<?php echo e(route('second', ['pricing', 'web-development'])); ?>">Web Development Packages <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['pricing', 'web-development', 'custom-web-design'])); ?>">Custom Web Design & Development</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'web-development', 'ecommerce-websites'])); ?>">E-commerce Websites</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'web-development', 'cms-solutions'])); ?>">CMS Solutions (WordPress, Shopify, etc.)</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'web-development', 'landing-pages'])); ?>">Landing Pages & Conversion Optimization</a></li>
                                            </ul>
                                        </li>

                                        <!-- Local SEO Packages -->
                                        <li class="has-dropdown">
                                            <a href="<?php echo e(route('second', ['pricing', 'local-seo'])); ?>">Local SEO Packages <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['pricing', 'local-seo', 'on-page-seo'])); ?>">On-Page SEO</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'local-seo', 'local-listings'])); ?>">Local Listings & Optimization</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'local-seo', 'keyword-strategy'])); ?>">Local Keyword Strategy</a></li>
                                            </ul>
                                        </li>

                                        <!-- National SEO Packages -->
                                        <li class="has-dropdown">
                                            <a href="<?php echo e(route('second', ['pricing', 'national-seo'])); ?>">National SEO Packages <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['pricing', 'national-seo', 'nationwide-strategy'])); ?>">Nationwide SEO Strategy</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'national-seo', 'content-link-building'])); ?>">Content Optimization & Link Building</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'national-seo', 'reports-audits'])); ?>">Monthly Reporting & Audits</a></li>
                                            </ul>
                                        </li>

                                        <!-- E-Commerce SEO Packages -->
                                        <li class="has-dropdown">
                                            <a href="<?php echo e(route('second', ['pricing', 'ecommerce-seo'])); ?>">E-Commerce SEO Packages <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['pricing', 'ecommerce-seo', 'website-seo'])); ?>">E-commerce Website SEO</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'ecommerce-seo', 'product-page-optimization'])); ?>">Product Page Optimization</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'ecommerce-seo', 'content-strategy'])); ?>">E-commerce Content Strategy</a></li>
                                            </ul>
                                        </li>

                                        <!-- PPC Packages -->
                                        <li class="has-dropdown">
                                            <a href="<?php echo e(route('second', ['pricing', 'ppc'])); ?>">PPC Packages <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['pricing', 'ppc', 'google-ads'])); ?>">Google Ads Campaigns</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'ppc', 'facebook-ads'])); ?>">Facebook Ads Campaigns</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'ppc', 'retargeting-remarketing'])); ?>">Retargeting & Remarketing Ads</a></li>
                                            </ul>
                                        </li>

                                        <!-- SMO Packages -->
                                        <li class="has-dropdown">
                                            <a href="<?php echo e(route('second', ['pricing', 'smo'])); ?>">SMO Packages <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['pricing', 'smo', 'profile-optimization'])); ?>">Social Media Profile Optimization</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'smo', 'content-creation'])); ?>">Content Creation & Posting</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'smo', 'social-media-advertising'])); ?>">Social Media Advertising</a></li>
                                            </ul>
                                        </li>

                                        <!-- ORM Packages -->
                                        <li class="has-dropdown">
                                            <a href="<?php echo e(route('second', ['pricing', 'orm'])); ?>">ORM Packages <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['pricing', 'orm', 'reputation-management'])); ?>">Reputation Management Strategy</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'orm', 'brand-monitoring'])); ?>">Brand Monitoring & Analysis</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'orm', 'review-mitigation'])); ?>">Negative Review Mitigation</a></li>
                                            </ul>
                                        </li>

                                        <!-- Application Development Packages -->
                                        <li class="has-dropdown">
                                            <a href="<?php echo e(route('second', ['pricing', 'application-development'])); ?>">App Development Packages <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['pricing', 'application-development', 'android-app'])); ?>">Android App Development</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'application-development', 'ios-app'])); ?>">iOS App Development</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'application-development', 'hybrid-app'])); ?>">Hybrid Mobile App Development</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'application-development', 'ui-ux-design'])); ?>">UI/UX Design for Apps</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'application-development', 'maintenance-updates'])); ?>">App Maintenance & Updates</a></li>
                                                <li><a href="<?php echo e(route('second', ['pricing', 'application-development', 'aso'])); ?>">App Store Optimization (ASO)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">FAQ <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="<?php echo e(route('second', ['faq', 'seo'])); ?>">SEO FAQs</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['faq', 'ppc'])); ?>">PPC FAQs</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['faq', 'web-development'])); ?>">Web Development FAQs</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['faq', 'app-development'])); ?>">App Development FAQs</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('second', ['faq', 'general'])); ?>">General Service FAQs</a>
                                        </li>
                                    </ul>
                                </li>
                           
                                <li>
                                <a href="#"> Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="vl-header1-btns text-end d-none d-lg-block">
                        <div class="buttons">
                            <div class="vl-search1">
                                <button class="search-open-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                            <a href="<?php echo e(route('second', ['pages', 'contact'])); ?>" class="theme-btn1">Contact Us</a>
                        </div>
                    </div>
                    <div class="vl-header-action-item d-block d-lg-none">
                        <button type="button" class="vl-offcanvas-toggle"><i class="fa-duotone fa-solid fa-bars-staggered"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- =====HEADER END ======= -->
<?php /**PATH /home/dell/Downloads/SEOX/resources/views/layouts/partials/header/navbar1.blade.php ENDPATH**/ ?>