@extends('layouts.base', ['title' => '|| Company Mission, Vision, and Story'])

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
                            <h1>Mission & Vision</h1>
                            <div class="breadcrumbs-pages">
                                <ul>
                                    <li>
                                        <a href="{{ route('root') }}">Home</a>
                                    </li>
                                    <li class="angle">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li>About Us</li>
                                    <li class="angle">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </li>
                                    <li>Mission & Vision</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== HERO AREA START ===== -->

        <!-- ===== MISSION CONTENT AREA START ===== -->
        <div class="blog-details-area sp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <article>
                            <div class="details-content">
                                <div class="image">
                                    <img class="w-full" src="/img/service/tsp-digital-mission-vision.jpg" alt="Digital evolution from DOS to AI - TSP mission and values" loading="lazy" />
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
                                    <div class="heading2">
                                        <h2>Our Mission: The Things We Live For!</h2>
                                        <p class="mt-16">At <a href="https://theseoppc.com">TSP</a>, our mission is not only simple but impactful: we want to empower businesses with digital strategies that deliver real world meaning, results, & measurable growth. Our commitment is to solving problems, not just selling services. Every project we take on is guided by a goal -- whether that is to increase visibility, drive conversions, or improve operational efficiency -- we tailor every strategy to match the ambition behind your brand.</p>
                                        <p class="mt-16">We are here to make digital transformation accessible, affordable, and most importantly -- effective.</p>
                                    </div>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h2>Our Vision</h2>
                                        <p class="mt-16">We envision a future where businesses of all sizes -- from solo professionals to global enterprises -- can access world-class digital solutions without being drowned in jargon or trapped in never-ending retainers. TSP aims to be the bridge between where businesses are and where they want to be in the digital world.</p>
                                        <p class="mt-16">Whether it is a law firm, a <a href="https://theseoppc.com/pricing/web-development/">logistics startup</a>, or an <a href="https://theseoppc.com/pricing/ecommerce-seo/">e-commerce brand</a> -- our vision is to enable every client to grow with clarity, confidence, and creativity.</p>
                                    </div>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h2>Our Story</h2>
                                        <p class="mt-16">We have seen it all. Quite literally. From the DOS era to the AI age, our leadership has lived through the most dramatic transitions in digital history.</p>
                                        <p class="mt-16">We remember a time when websites were just black screens with blinking cursors. When you had to load Windows from floppy disks, and Google wasn't even a word. We watched as web pages evolved from static HTML to interactive, database-driven platforms. We adapted through the rise of mobile-first indexing, the explosion of content marketing, and now, the revolution of artificial intelligence.</p>
                                        
                                        <div class="mt-30">
                                            <h4>This deep-rooted exposure to decades of change gives TSP a unique edge:</h4>
                                            <ul class="mt-12 ml-20">
                                                <li><strong>We do not chase trends;</strong> we understand their origin.</li>
                                                <li><strong>We do not panic at change;</strong> we prepare for it before it arrives.</li>
                                                <li><strong>We do not apply one-size-fits-all methods;</strong> we build based on your real-world position in the market.</li>
                                            </ul>
                                        </div>
                                        
                                        <p class="mt-16">TSP wasn't founded overnight. It was built gradually by people who've weathered the waves of digital change and know how to stay anchored while still moving forward.</p>
                                    </div>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h2>The Shift We've Witnessed (And Why It Matters)</h2>
                                        
                                        <div class="mt-30">
                                            <h4>From Keywords to Intent</h4>
                                            <p class="mt-12">We know that SEO today is no longer about stuffing pages with keywords. Nowdays search engines prioritise context, behaviour, & user satisfaction. Our strategies are designed around semantic relevance, not outdated checklists.</p>
                                        </div>
                                        
                                        <div class="mt-30">
                                            <h4>From Ads to Algorithms</h4>
                                            <p class="mt-12">Modern PPC isn't just about setting budgets and writing ad copy. It is about knowing how <a href="https://theseoppc.com/pricing/ppc/google-ads/">Google's machine learning</a> prioritises auction-based rankings. We adjust dynamically, based on search intent, competition shifts, and user behaviour.</p>
                                        </div>
                                        
                                        <div class="mt-30">
                                            <h4>From Websites to Journeys</h4>
                                            <p class="mt-12">A landing page is no longer just a destination. It is a micro-conversion funnel. We build user flows that feel natural, work fast, and adapt to every screen.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article>
                                <div class="details-content mt-40">
                                    <div class="heading2">
                                        <h2>A Few Little-Known Truths We Live By:</h2>
                                        <ul class="mt-12 ml-20">
                                            <li>The best-performing websites often have fewer pages but better architecture.</li>
                                            <li>Your brand's tone impacts bounce rate more than your colour palette.</li>
                                            <li>Google's algorithm have the capability to measures user hesitation (mouse drift, scroll reversal) to gauge page satisfaction.</li>
                                            <li>Facebook doesn't just use likes and shares. It tracks reaction speed, time on post, and emotion-influenced click-through rates.</li>
                                        </ul>
                                        
                                        <p class="mt-16">Most agencies won't tell you this -- either because they don't know it, or because it takes more effort to apply. But at TSP, that is exactly where we focus. One would agree that "On the subtle details that make a big difference".</p>
                                        <p class="mt-16">We are not here because digital marketing is trendy. We are here because we have lived its evolution -- & we are ready to take you into its future.</p>
                                    </div>
                                </div>
                            </article>

                            <div class="details-border"></div>
                            
                            <div class="mt-40 text-center">
                                <a href="https://theseoppc.com/about-us/" class="theme-btn mr-20">Return to About Us</a>
                                <a href="https://theseoppc.com/contact/" class="theme-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== MISSION CONTENT AREA END ===== -->
    </main>

    @include('layouts.partials.footer')
@endsection