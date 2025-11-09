<!--=====HEADER START=======-->
<header>
    <div id="vl-header-sticky" class="vl-header-area2 header-tranperent">
        <div class="container header2-bg">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-6 col-6">
                    <div class="vl-logo">
                        <a href="<?php echo e(route('root')); ?>" class="header1-logo-block"><img src="/img/logo/black-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 d-none d-lg-block text-end">
                    <div class="vl-main-menu">
                        <nav class="vl-mobile-menu-active">
                            <ul>
                            

                                <li class="has-dropdown"><a href="#">Portfolio <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo e(route('second', ['portfolio', 'portfolio'])); ?>"> Portfolio</a></li>
                                        <li><a href="<?php echo e(route('second', ['portfolio', 'details'])); ?>"> Portfolio Details</a></li>
                                    </ul>
                                </li>


                                <li><a href="#">Service <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="#" class="span-arrow">Service <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['service', 'services'])); ?>">Service 01</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'service2'])); ?>">Service 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="span-arrow">single Service <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['service', 'details1'])); ?>">Seo Marketing</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'details2'])); ?>">Social Marketing</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'details3'])); ?>">Content Marketing</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'details4'])); ?>">Pay Per Click</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'details5'])); ?>">Travel Guide</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'details6'])); ?>">HR Staffing Agency</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'details7'])); ?>">Insurance Policy</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'details8'])); ?>">Real Estate</a></li>
                                                <li><a href="<?php echo e(route('second', ['service', 'details9'])); ?>">Startup Agency</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="#">Page's <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="<?php echo e(route('second', ['pages', 'about'])); ?>">About Us</a></li>
                                        <li><a href="<?php echo e(route('second', ['pages', 'team'])); ?>">Our Team</a></li>
                                        <li><a href="<?php echo e(route('second', ['pages', 'testimonial'])); ?>">Testimonial</a></li>
                                        <li><a href="<?php echo e(route('second', ['pages', 'faq'])); ?>">FAQ's</a></li>
                                        <li><a href="<?php echo e(route('second', ['pages', 'pricing'])); ?>">Pricing</a></li>
                                        <li><a href="<?php echo e(route('second', ['pages', 'contact'])); ?>">Contact Us</a></li>
                                        <li><a href="<?php echo e(route('second', ['pages', 'error'])); ?>">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Blogs <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu">
                                        <li><a href="#" class="span-arrow">Our Blogs <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['blogs', 'blog'])); ?>">Blog 01</a></li>
                                                <li><a href="<?php echo e(route('second', ['blogs', 'blog2'])); ?>">Blog 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="span-arrow">Blog Details <span><i class="fa-solid fa-angle-right d-lg-block d-none"></i></span></a>
                                            <ul class="sub-menu menu1">
                                                <li><a href="<?php echo e(route('second', ['blogs', 'details-left'])); ?>">Blog Details Left</a></li>
                                                <li><a href="<?php echo e(route('second', ['blogs', 'details-right'])); ?>">Blog Details Right</a></li>
                                                <li><a href="<?php echo e(route('second', ['blogs', 'details'])); ?>">Blog Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="vl-header2-btns text-end d-none d-lg-block">
                        <div class="buttons">
                            <div class="vl-search2">
                                <button class="search-open-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </div>
                            <a class="theme-btn3" href="<?php echo e(route('second', ['pages', 'contact'])); ?>">Contact Us <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="vl-header-action-item d-block d-lg-none">
                        <button type="button" class="vl-offcanvas-toggle">
                            <i class="fa-duotone fa-solid fa-bars-staggered"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->
<?php /**PATH /home/dell/Downloads/SEOX/resources/views/layouts/partials/header/navbar7.blade.php ENDPATH**/ ?>