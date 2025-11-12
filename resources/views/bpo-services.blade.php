@extends('layouts.app')
@section('title', 'IT Infrastructure')
@section('content')

<!-- wrapper -->
<div class="mil-wrapper">
    <!-- banner -->
    <div class="mil-banner-sm mil-deep-bg">
        <img src="img/deco/map.png" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                {{-- <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="service-1.html">Solution</a></li>
                </ul> --}}
                <h2 class="mil-uppercase">Empowering Your Team from Anywhere</h2>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <section class="mil-p-0-90">
        <div class="container">
            <div class="row flex-sm-row-reverse justify-content-between align-items-center">
                <div class="col-xl-6 mil-mb-30">

                    <div class="mil-project-cover">
                        <img src="img/projects/aic-bpo.jpeg" alt="Project">
                    </div>

                </div>
                <div class="col-xl-5 mil-mb-30">

                    <h3 class="mil-mb-30"> Secure Remote Access</h3>
                    <p class="mil-mb-30">Empower your workforce with secure, high-speed access to company applications
                        and resources from any location. Our advanced VPN architecture and multi-factor authentication
                        protect your business network against unauthorized access, ensuring smooth and safe connectivity
                        for remote employees working across different regions.</p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 mil-mb-30">

                    <div class="mil-project-cover mil-type-2">
                        <img src="img/projects/aic-bpo-2.jpeg" alt="Project">
                    </div>

                </div>
                <div class="col-xl-5 mil-mb-30">

                    <h3 class="mil-mb-30">Scalable Cloud Infrastructure</h3>
                    <p class="mil-mb-30">Accelerate business performance with a future-ready cloud environment. We
                        design and deploy custom cloud architectures that enhance efficiency, reduce hardware costs, and
                        support rapid growth. With built-in redundancy and 24/7 uptime, our cloud infrastructure
                        guarantees reliability, agility, and seamless access to data from any device.</p>
                </div>
            </div>
            <div class="row flex-sm-row-reverse justify-content-between align-items-center">
                <div class="col-xl-6 mil-mb-30">

                    <div class="mil-project-cover">
                        <img src="img/photo/18.jpg" alt="Project">
                    </div>

                </div>
                <div class="col-xl-5 mil-mb-30">

                    <h3 class="mil-mb-30">Advanced Collaboration Platforms</h3>
                    <p class="mil-mb-30">Connect your teams through intelligent collaboration systems that foster
                        communication and innovation. From chat and video conferencing to real-time file sharing, we
                        integrate modern platforms such as Microsoft Teams, Zoom, and Google Workspace — enabling your
                        employees to collaborate effectively no matter where they are.</p>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 mil-mb-30">

                    <div class="mil-project-cover">
                        <img src="img/photo/19.jpg" alt="Project">
                    </div>

                </div>
                <div class="col-xl-5 mil-mb-30">

                    <h3 class="mil-mb-30">Endpoint Security & Real-Time Monitoring</h3>
                    <p class="mil-mb-30">Safeguard your business devices with continuous monitoring and proactive threat
                        prevention. Our endpoint security framework protects laptops, desktops, and mobile devices from
                        malware, ransomware, and phishing attempts. We ensure compliance with security standards and
                        provide immediate alerts for any suspicious activity.</p>
                </div>
            </div>

            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 mil-mb-30">

                    <div class="mil-project-cover">
                        <img src="img/photo/19.jpg" alt="Project">
                    </div>

                </div>
                <div class="col-xl-5 mil-mb-30">

                    <h3 class="mil-mb-30">Virtual Desktop Infrastructure (VDI)</h3>
                    <p class="mil-mb-30">Deliver consistent, high-performance desktop experiences across all devices
                        with our cloud-based virtual desktop solutions. Employees can securely access their personalized
                        workspace, applications, and files from anywhere while benefiting from centralized management,
                        fast performance, and advanced data protection.</p>
                </div>
            </div>

            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6 mil-mb-30">

                    <div class="mil-project-cover">
                        <img src="img/photo/19.jpg" alt="Project">
                    </div>

                </div>
                <div class="col-xl-5 mil-mb-30">

                    <h3 class="mil-mb-30">24/7 Managed IT Support</h3>
                    <p class="mil-mb-30">Stay productive without interruption through our around-the-clock IT support
                        services. Our expert engineers provide real-time assistance, proactive maintenance, and quick
                        troubleshooting to resolve technical issues before they affect your operations — ensuring your
                        business stays connected and running efficiently every day.</p>
                </div>
            </div>

        </div>
    </section>



    <!-- reviews -->
    <section class="mil-gradient-bg mil-p-120-120">
        <div class="mil-deco mil-deco-accent" style="top: 0; right: 30%;"></div>
        <div class="mil-deco mil-deco-accent" style="bottom: 0; right: 20%; transform: rotate(180deg)"></div>
        <div class="container">
            <div class="swiper-container mil-box-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row justify-content-between align-items-center" data-swiper-parallax-y="-100"
                            data-swiper-parallax-opacity="0">
                            <div class="col-lg-3 offset-lg-1">

                                <div class="mil-circle-illustration mil-with-dots mil-mb-60"
                                    data-swiper-parallax-scale=".8">
                                    <div class="mil-circle-bg"></div>
                                    <div class="mil-image-frame">
                                        <img src="img/faces/t6.png" alt="img">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-7">

                                <div class="mil-icon-frame mil-light mil-icon-frame-sm mil-mb-60">
                                    <img src="img/icons/sm/11.svg" alt="icon">
                                </div>
                                <h3 class="mil-light mil-mb-15">Customer Support Outsourcing</h3>
                                <p class="mil-text-lg mil-light mil-mb-60">Deliver outstanding customer experiences with
                                    our 24/7 multichannel support via phone, email, chat, and ticket systems.
                                    Our trained professionals handle every interaction with empathy and clarity,
                                    improving customer satisfaction and brand loyalty.customer support outsourcing, 24/7
                                    help desk, live chat support</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row justify-content-between align-items-center" data-swiper-parallax-y="-100"
                            data-swiper-parallax-opacity="0">
                            <div class="col-lg-3 offset-lg-1">

                                <div class="mil-circle-illustration mil-with-dots mil-mb-60"
                                    data-swiper-parallax-scale=".8">
                                    <div class="mil-circle-bg"></div>
                                    <div class="mil-image-frame">
                                        <img src="img/faces/t1.png" alt="img">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-7">

                                <div class="mil-icon-frame mil-light mil-icon-frame-sm mil-mb-60">
                                    <img src="img/icons/sm/11.svg" alt="icon">
                                </div>
                                <h3 class="mil-light mil-mb-15">Technical Support Services</h3>
                                <p class="mil-text-lg mil-light mil-mb-60">Our certified IT engineers provide Tier 1 &
                                    Tier 2 technical assistance for software, hardware, and cloud applications.
                                    We specialize in fast troubleshooting, remote issue resolution, and proactive system
                                    monitoring to minimize downtime.tech support outsourcing, IT helpdesk, remote
                                    troubleshooting</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row justify-content-between align-items-center" data-swiper-parallax-y="-100"
                            data-swiper-parallax-opacity="0">
                            <div class="col-lg-3 offset-lg-1">

                                <div class="mil-circle-illustration mil-with-dots mil-mb-60"
                                    data-swiper-parallax-scale=".8">
                                    <div class="mil-circle-bg"></div>
                                    <div class="mil-image-frame">
                                        <img src="img/faces/t2.png" alt="img">
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-7">
                                <div class="mil-icon-frame mil-light mil-icon-frame-sm mil-mb-60">
                                    <img src="img/icons/sm/11.svg" alt="icon">
                                </div>
                                <h3 class="mil-light mil-mb-15">Help Desk & Ticket Management</h3>
                                <p class="mil-text-lg mil-light mil-mb-60">We manage technical and service tickets with
                                    priority routing, automated escalation, and detailed reporting.Our help desk agents
                                    use modern platforms help desk outsourcing, ticket management services, remote IT
                                    support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="mil-slider-nav justify-content-lg-center mil-reviews-btns-space">
                        <div class="mil-slider-btn-prev mil-box-prev mil-light"><i class="fas fa-arrow-left"></i><span
                                class="mil-h6">Prev</span></div>
                        <div class="mil-slider-btn-next mil-box-next mil-light"><span class="mil-h6">Next</span><i
                                class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- reviews end -->




    <section class="mil-p-120-90">
        <div class="container">
            <h2 class="mil-text-center mil-mb-90">Business Process <span class="mil-accent">Outsourcing (BPO)</span>
                Services</h2>
            <div class="row">
                <div class="col-lg-4">

                    <div class="mil-hover-card mil-box-center mil-mb-30">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <h3>I</h3>
                        </div>
                        <h5 class="mil-mb-30">Virtual Assistant Solutions</h5>
                        <p>Our virtual assistants handle scheduling, data organization, inbox management, and research
                            tasks allowing your in-house team to stay focused on core operations.
                            We ensure confidentiality, efficiency, and clear communication in every task</p>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="mil-hover-card mil-box-center mil-mb-30">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <h3>II</h3>
                        </div>
                        <h5 class="mil-mb-30">Sales & Lead Generation Services</h5>
                        <p>Grow your business pipeline with targeted lead generation and professional outbound/inbound
                            sales support.
                            Our agents qualify prospects, schedule appointments, and manage follow-ups using modern CRM
                            tools</p>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="mil-hover-card mil-box-center mil-mb-30">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <h3>III</h3>
                        </div>
                        <h5 class="mil-mb-30">Back-Office Support</h5>
                        <p>We take care of all your administrative operations, including order management, billing
                            verification, reporting, and record maintenance.
                            Our back-office team ensures process accuracy, consistency, and compliance freeing your
                            staff from repetitive tasks.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection