@extends('layouts.base', ['title' => '|| Cloud Services'])

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
                            Cloud Services
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
                                    <li>Cloud Services</li>
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
                                    <img class="w-full" src="/img/service/service-details2-image.png" alt="Cloud Services by TSP" />
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
                                            <a href="{{ route('second', ['service', 'details2']) }}" class="active">Cloud Services <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details3']) }}">Content Marketing <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details4']) }}">Pay-Per-Click Advertising <span><i class="fa-solid fa-angle-right"></i></span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('second', ['service', 'details5']) }}">IT Consulting <span><i class="fa-solid fa-angle-right"></i></span></a>
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
                                    <h3>Scalable. Secure. Ready for Anything.</h3>
                                    <p class="mt-16">Back in the day, moving to the cloud sounded like something only Silicon Valley giants could afford. Fast forward to 2025, and if your business isn't leveraging cloud technology — you're not falling behind; you're already behind.</p>
                                    <p class="mt-16">At TSP (<a href="https://theseoppc.com">Theseoppc.com</a>), we believe <a href="https://theseoppc.com/services/cloud-services/">cloud infrastructure</a> should be as accessible as your Wi-Fi. Whether you're a small e-commerce store in Toronto, a law firm in London, or a logistics network spread across India, our <a href="https://theseoppc.com/services/cloud-services/">Cloud Services</a> are designed to help you work smarter, scale faster, and stay online — no matter what.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>What Are Cloud Services — Really?</h3>
                                    <p class="mt-16">Simply put, <a href="https://theseoppc.com/services/cloud-services/">cloud services</a> are IT resources you can access over the internet — think servers, databases, storage, networking, and even full-blown applications. No clunky hardware. No local server room drama. Just pay-as-you-grow flexibility and near-infinite scalability.</p>
                                    <p class="mt-16">We help businesses make the most of platforms like Amazon Web Services (AWS), Google Cloud, Microsoft Azure, and other specialised cloud environments. And yes, we translate all the jargon for you along the way.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>What We Offer in Cloud Services at TSP</h3>
                                    <p class="mt-16">Our <a href="https://theseoppc.com/services/cloud-services/">cloud services</a> aren't about selling you "space in the sky." They're about real outcomes — like faster load times, better uptime, lower IT costs, and worry-free growth.</p>
                                    <p class="mt-16">Here's what we help with:</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">1. Cloud Strategy & Migration</a></h4>
                                    <p class="mt-12">Moving to the cloud isn't just about transferring data — it's about re-thinking how your business operates. We start with a deep dive into your current infrastructure and craft a cloud migration roadmap that aligns with your future growth.</p>
                                    <p class="mt-12">Whether you're migrating from legacy servers, looking to avoid vendor lock-in, or moving between cloud providers — we've got the process, tools, and technical muscle to make it seamless.</p>
                                    <p class="mt-12">Related: See our <a href="https://theseoppc.com/services/it-consulting-advisory/">IT Consulting & Advisory</a> services to help define your overall cloud transformation plan.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">2. Cloud Infrastructure Management</a></h4>
                                    <p class="mt-12">Once you're on the cloud, you'll need someone to manage it — securely, efficiently, and proactively. That's where our 24/7 infrastructure support team steps in.</p>
                                    <p class="mt-12">We handle:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>Server provisioning & scaling</li>
                                        <li>Load balancing</li>
                                        <li>Storage optimisation</li>
                                        <li>Traffic routing</li>
                                        <li>Uptime monitoring</li>
                                    </ul>
                                    <p class="mt-12">And we don't just manage it — we constantly tune and tweak it for performance, cost-efficiency, and resilience.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">3. Cloud Security Solutions</a></h4>
                                    <p class="mt-12">Yes, the cloud is powerful. But like any technology, it needs proper locks, keys, and alarm systems. Our cloud security offering includes:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>Identity and access management (IAM)</li>
                                        <li>Encryption at rest and in transit</li>
                                        <li>Firewall and VPC configuration</li>
                                        <li>Automated security audits</li>
                                        <li>Threat detection & rollback recovery</li>
                                    </ul>
                                    <p class="mt-12">We also help you stay compliant with GDPR, HIPAA, PCI DSS, and any other alphabet soup your industry demands.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">4. Data Storage & Management Solutions</a></h4>
                                    <p class="mt-12">Need long-term archiving? Lightning-fast retrieval? Secure backups across multiple geographies? We build tiered storage solutions using object storage (like S3), blob storage, and file storage to match your data needs.</p>
                                    <p class="mt-12">From big data analytics to legal document retention — we sort your data life out. We even integrate with your CRM or ERP to streamline access.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">5. DevOps & Automation</a></h4>
                                    <p class="mt-12">Want to deploy faster, test smarter, and recover from errors in minutes — not hours? Our <a href="https://theseoppc.com/services/cloud-services/">DevOps</a> engineers set up:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>CI/CD pipelines</li>
                                        <li>Infrastructure as Code (IaC)</li>
                                        <li>Auto-scaling environments</li>
                                        <li>Rollback and disaster recovery systems</li>
                                    </ul>
                                    <p class="mt-12">It's like moving from a manual car to a self-driving one — and yes, you're still in control.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">6. Cloud Cost Optimisation</a></h4>
                                    <p class="mt-12">Cloud bills creeping up? You're not alone. Many businesses overspend without realising where the waste is. We offer:</p>
                                    <ul class="mt-12 ml-20">
                                        <li>Cloud usage audits</li>
                                        <li>Rightsizing of compute resources</li>
                                        <li>Reserved vs on-demand analysis</li>
                                        <li>Auto-scaling adjustments</li>
                                        <li>Cost alerting and forecasting</li>
                                    </ul>
                                    <p class="mt-12">You'll save money — without compromising performance.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">7. Multi-Cloud & Hybrid Cloud Deployments</a></h4>
                                    <p class="mt-12">Sometimes one cloud just doesn't cut it. Whether you're spreading workloads across AWS and Azure or keeping sensitive data on-prem while scaling apps in the cloud — we help you build multi-cloud or hybrid architectures that do both.</p>
                                    <p class="mt-12">Think failover support, disaster recovery, and location-sensitive compliance — all designed around how you do business.</p>
                                </div>

                                <div class="details-content-text-box heading2 mt-30">
                                    <h4><a href="#">8. Cloud-Based App Hosting</a></h4>
                                    <p class="mt-12">Launching a new <a href="https://theseoppc.com/services/mobile-app-development/">mobile app</a>? Running a custom web platform? Hosting a <a href="https://theseoppc.com/services/software-development/saas-application-development/">SaaS product</a>?</p>
                                    <p class="mt-12">We host and scale applications in the cloud with high availability, secure APIs, and DevOps baked in — ensuring your app runs smoothly, 24/7, across global regions.</p>
                                    <p class="mt-12">Related: <a href="https://theseoppc.com/services/mobile-app-development/">Mobile App Development</a> + <a href="https://theseoppc.com/services/software-development/">Software Development</a></p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Why Work with TSP for Cloud?</h3>
                                    <p class="mt-16">Because we blend <a href="https://theseoppc.com/services/cloud-services/">cloud engineering</a>, cost strategy, and business logic — all under one roof. Our team doesn't just understand cloud infrastructure — we live in it. From DevOps engineers to data architects, our crew has helped everyone from fintech startups to B2B logistics giants transform their stack.</p>
                                    <p class="mt-16">We also speak "non-tech" fluently. You won't get a lecture. You'll get straight talk, plain-English plans, and real results.</p>
                                    <p class="mt-16">And yes, we'll also answer your calls after hours — just ask the London-based retailer whose website we migrated to AWS minutes before Black Friday traffic hit.</p>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Industries We've Helped with Cloud</h3>
                                    <div class="row mt-20">
                                        <div class="col-md-6">
                                            <ul class="ml-20">
                                                <li>E-commerce platforms needing scale on demand</li>
                                                <li>Legal firms requiring encrypted, compliant data access</li>
                                                <li>EdTech startups scaling LMS systems globally</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="ml-20">
                                                <li>Healthcare providers migrating to HIPAA-compliant cloud</li>
                                                <li>Logistics companies syncing fleet data in real time</li>
                                                <li>SaaS companies needing auto-deploy architecture</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Cloud Myths We've Helped Clear Up</h3>
                                    <div class="card mt-20">
                                        <div class="card-body">
                                            <h5 class="card-title">Myth 1: Cloud is only for big businesses.</h5>
                                            <p class="card-text">Truth: We've helped 3-person teams cut costs and automate operations using serverless architecture.</p>
                                        </div>
                                    </div>
                                    <div class="card mt-20">
                                        <div class="card-body">
                                            <h5 class="card-title">Myth 2: Cloud is less secure than on-prem.</h5>
                                            <p class="card-text">Truth: With the right setup, cloud is often more secure — and auditable.</p>
                                        </div>
                                    </div>
                                    <div class="card mt-20">
                                        <div class="card-body">
                                            <h5 class="card-title">Myth 3: Moving to the cloud is risky.</h5>
                                            <p class="card-text">Truth: With TSP's zero-downtime migration process, it's smoother than you think.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>What You Get with TSP's Cloud Services</h3>
                                    <div class="row mt-20">
                                        <div class="col-md-6">
                                            <ul class="ml-20">
                                                <li>Personalised cloud strategy</li>
                                                <li>Full-stack migration & configuration</li>
                                                <li>On-demand infrastructure scaling</li>
                                                <li>Security-first deployment models</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="ml-20">
                                                <li>24/7 monitoring and support</li>
                                                <li>API & legacy system integration</li>
                                                <li>Detailed performance reports</li>
                                                <li>Cost control dashboard access</li>
                                                <li>Vendor-agnostic architecture</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Pair Cloud Services With...</h3>
                                    <div class="row mt-20">
                                        <div class="col-md-6">
                                            <ul class="ml-20">
                                                <li><a href="https://theseoppc.com/services/it-consulting-advisory/">IT Consulting & Advisory</a></li>
                                                <li><a href="https://theseoppc.com/services/software-development/">Software Development</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="ml-20">
                                                <li><a href="https://theseoppc.com/services/mobile-app-development/">Mobile App Development</a></li>
                                                <li><a href="https://theseoppc.com/services/crm/">CRM Solutions</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row mt-10">
                                        <div class="col-md-6">
                                            <ul class="ml-20">
                                                <li><a href="https://theseoppc.com/services/web-development/maintenance-support/">Website Maintenance & Support</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="ml-20">
                                                <li><a href="https://theseoppc.com/services/digital-marketing/">Digital Marketing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article>
                            <div class="details-content mt-40">
                                <div class="heading2">
                                    <h3>Let's Future-Proof Your Infrastructure</h3>
                                    <p class="mt-16">The cloud doesn't just offer flexibility — it unlocks potential. Whether you're scaling, migrating, or just exploring options, <a href="https://theseoppc.com/services/cloud-services/">TSP</a> can guide you every step of the way.</p>
                                    <div class="mt-30">
                                        <a href="https://theseoppc.com/contact-us/" class="theme-btn">Contact us now for a no-obligation consultation</a>
                                    </div>
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