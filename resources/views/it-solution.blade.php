@extends('layouts.app')
@section('title', 'it-solution')
@section('content')

<!-- banner -->
<div class="mil-banner-sm mil-deep-bg">
    <img src="img/deco/map.png" alt="background" class="mil-background-image">
    <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
    <div class="mil-banner-content">
        <div class="container mil-relative">
            {{-- <ul class="mil-breadcrumbs mil-mb-30">
                <li><a href="home-1.html">Home</a></li>
                <li><a href="service-1.html">Service</a></li>
            </ul> --}}
            <h2 class="mil-uppercase">Your Complete Technology Partner for Seamless Business Growth</h2>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- call to action -->
<section class="mil-p-120-90">
    <div class="mil-deco" style="bottom: 0; right: 25%; transform: rotate(180deg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mil-hori-box mil-mb-30">
                    <div class="mil-mr-30">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg">
                            <img src="img/icons/md/1.svg" alt="icon">
                        </div>
                    </div>
                    <h5>At AICTech Solution, we deliver All-in-One IT Solutions that simplify your technology,
                        strengthen your infrastructure, and empower your business to operate at its full potential. Our
                        goal is to provide a single, trusted point of contact for all your IT needs from daily technical
                        support to advanced cloud architecture and cybersecurity management.</h5>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="mil-adaptive-right">
                    <a href="/contact-us" class="mil-button mil-border mil-mb-30"><span>Get in Touch</span></a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- call to action end -->

<div class="container">
    <div class="mil-divider"></div>
</div>

<!-- steps -->
<section class="mil-p-120-90">
    <div class="mil-deco" style="bottom: 0; right: 35%; transform: rotate(180deg)"></div>
    <div class="container">
        <div class="row mil-mb-30-adapt">
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <div class="mil-number-icon mil-circle mil-mb-30">
                        <span>01</span>
                    </div>
                    <h4 class="mil-mb-15">IT Infrastructure Management</h4>
                    <p>We design, deploy, and maintain reliable IT environments that deliver speed, stability, and
                        scalability. From network optimization to server management, we keep your systems running
                        smoothly around the clock.</p>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <div class="mil-number-icon mil-lines mil-mb-30">
                        <span>02</span>
                    </div>
                    <h4 class="mil-mb-15">Cybersecurity & Data Protection</h4>
                    <p>Safeguard your business with advanced firewall configurations, endpoint protection, MFA,
                        encryption, and disaster recovery strategies that ensure your data is always secure and
                        recoverable.</p>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <div class="mil-number-icon mil-mb-30">
                        <span>03</span>
                    </div>
                    <h4 class="mil-mb-15">Automation & Virtualization</h4>
                    <p>Boost productivity and minimize manual workload with smart automation tools and virtualization
                        technologies like Hyper-V, VMware, and Parallels Desktop — designed to optimize your digital
                        ecosystem.</p>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <div class="mil-number-icon mil-mb-30">
                        <span>04</span>
                    </div>
                    <h4 class="mil-mb-15">Remote IT Support</h4>
                    <p>Our dedicated IT professionals are available 24/7 to provide fast and reliable remote assistance
                        whenever you need it. We proactively monitor your systems to identify and resolve issues before
                        they impact your operations ensuring uninterrupted performance and peace of mind.</p>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <div class="mil-number-icon mil-circle mil-mb-30">
                        <span>05</span>
                    </div>
                    <h4 class="mil-mb-15">Technology Consulting & Strategy</h4>
                    <p>We go beyond troubleshooting — helping you plan, budget, and implement long-term IT strategies
                        that align with your business growth and digital transformation goals.</p>
                </div>

            </div>
            <div class="col-xl-4">

                <div class="mil-mb-60">
                    <div class="mil-number-icon mil-lines mil-mb-30">
                        <span>06</span>
                    </div>
                    <h4 class="mil-mb-15">Simplify Secure. Scale</h4>
                    <p>With AICTech Solution, you get more than an IT service — you get a complete technology partner
                        dedicated to your success. From setup to support, from cloud to security, we deliver all-in-one
                        solutions that evolve with your business.Let us handle your IT — so you can focus on innovation,
                        productivity, and growth.</p>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- steps end -->

<div class="container">
    <div class="mil-divider"></div>
</div>

<!-- services -->
<section class="mil-services mil-p-120-90">
    <div class="mil-deco" style="bottom: 0; right: 40%; transform: rotate(180deg)"></div>
    <div class="container">
        {{-- <span class="mil-suptitle mil-suptitle-2 mil-mb-30">High Quality and Performance</span> --}}
        <h2 class="mil-mb-90">Driving Digital Transformation <span class="mil-accent">with Smart</span> Scalable, and
            Secure Technology</h2>
        <div class="row mil-mb-30-adapt">
            <div class="col-lg-6 col-xl-6">
                <div class="mil-service-item mil-without-lines mil-mb-60">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="img/icons/md/1.svg" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">01</span> Smart Infrastructure Transformation
                        </h5>
                        <p>Redefine the backbone of your business with intelligent IT architecture. From on-premises
                            networks to virtualized environments, we create high-performing, scalable, and secure
                            infrastructures built for the future.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="mil-service-item mil-without-lines mil-mb-60">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="img/icons/md/2.svg" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">02</span>Next-Gen Cybersecurity</h5>
                        <p>Stay ahead of evolving threats with AI-powered protection, firewalls, encryption, and
                            zero-trust frameworks. We ensure your business remains resilient, compliant, and always
                            secure.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="mil-service-item mil-without-lines mil-mb-60">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="img/icons/md/3.svg" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">03</span>Automation That Works for You</h5>
                        <p>Empower your workforce with smart automation workflows that save time, reduce costs, and
                            eliminate manual errors. From system updates to task management we make IT effortless.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="mil-service-item mil-without-lines mil-mb-60">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="img/icons/md/4.svg" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">04</span> Strategic IT Consulting</h5>
                        <p>We don’t just fix issues — we build strategies. Our IT consulting approach helps you align
                            technology with business goals, ensuring every investment drives measurable impact and
                            long-term growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="mil-service-item mil-without-lines mil-mb-60">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="img/icons/md/5.svg" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">05</span> Innovation in Every Layer</h5>
                        <p>From infrastructure to cloud, from security to support — we integrate creative
                            problem-solving and modern technologies at every level of your IT ecosystem.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="mil-service-item mil-without-lines mil-mb-60">
                    <div class="mil-service-icon">
                        <div class="mil-icon-frame mil-icon-frame-md">
                            <img src="img/icons/md/6.svg" alt="icon">
                        </div>
                    </div>
                    <div class="mil-service-text">
                        <h5 class="mil-mb-30"><span class="mil-accent">06</span> Innovation That Never Stops</h5>
                        <p>Technology never sleeps and neither do we From new integrations to smarter automation, we
                            continuously explore ways to innovate, optimize, and elevate your IT environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services end -->

<!-- services -->
<section class="mil-gradient-bg mil-deco-right mil-p-120-0">
    <div class="mil-deco mil-deco-accent" style="top: 0; left: 5%;"></div>
    <div class="container">
        <div class="mil-text-center mil-mb-90">
            <span class="mil-suptitle  mil-light mil-suptitle-2 mil-mb-30">Where Creativity Meets Technology</span>
            <h2 class="mil-light mil-mb-30">We combine creativity, expertise, and technology to design intelligent
                systems that transform the way you work — from cloud architecture and automation to data protection and
                end-user support. Whether you need a complete infrastructure overhaul or continuous IT management, we
                bring innovative thinking to every solution we deliver.</h2>
        </div>
    </div>
</section>
<!-- services end -->

@endsection