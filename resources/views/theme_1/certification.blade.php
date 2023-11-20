@extends('theme_1.layout.layout')
@section('title')
    Certifcation
@endsection
@section('meta')
@endsection
@section('style')
@endsection
@section('content')
    <section class="page-header page-header-modern bg-color-quaternary p-relative">
        <div class="container">
            <div class="row py-5">
                <div class="align-self-center text-center p-static">
                    <h1 class="text-color-dark font-weight-bold" style="letter-spacing: 0.01em">Certification</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-3 my-5-5" style=" background-repeat: no-repeat; background-position: 112% 100%;">
        <div class="container container-xl-custom mt-4">
            <div class="row justify-content-center justify-content-lg-around align-items-lg-center bg-color-grey ">

                <div class="col-lg-7 col-xl-5 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col align-content-lg-end">
                            <div class="overflow-hidden">
                                <h2 class="font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible"
                                    data-appear-animation="maskUp" style="animation-delay: 100ms; letter-spacing: 0.01em">
                                    Vendor Specific Exam
                                </h2>
                                <p class="font-weight-light text-4 mb-3-5 appear-animation animated maskUp appear-animation-visible mt-3"
                                    style="animation-delay: 200ms;">
                                    Brighthill Academy offer vendor specific exam <span class="alternative-font">
                                        preparation </span> to obtain


                                <ul class="appear-animation animated fadeInRightShorter appear-animation-visible mt-3"
                                    data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                    <li class="font-weight-light text-4 mb-3-5">Study a focused topic in a shorter time
                                        frame than earning a
                                        degree.
                                    </li>
                                    <li class="font-weight-light text-4 mb-3-5">Earn an affordable higher education
                                        experience to add to their
                                        resume.</li>
                                    <li class="font-weight-light text-4 mb-3-5">Maintain their edge in the job market.
                                    </li>
                                    <li class="font-weight-light text-4 mb-3-5">Schedule flexible courses around their
                                        lives.</li>
                                    <li class="font-weight-light text-4 mb-3-5">Attend classes from anywhere.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-5  ">
                    <img src="{{ asset('file') }}/img/demos/business-consulting-4/generic/certification.png"
                        class="img-fluid position-relative z-index-1 appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" alt="Our Company" />
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-3 mt-4">
        <div class="container container-xl-custom mt-4">
            <h4 class="lead-2 text-5">List of Vendor Certification</h4>
            <div class="row justify-content-center justify-content-lg-start">
                <div class="col-lg-6 col-xl-6 mb-5 mb-lg-0">
                    <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"
                            style="animation-delay: 200ms;">
                            <div class="card-header" id="collapse100HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="false"
                                        aria-controls="collapse100One">
                                        1 - CompTIA A+ Certification Training
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100One" class="collapse" aria-labelledby="collapse100HeadingOne"
                                data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="data:image/png;base64,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"
                                        alt="">
                                    <p class="mb-1 font-weight-light text-color-dark text-4 mb-3-5 text-justify ">CompTIA
                                        offers
                                        everything you need to get you ready for your A+
                                        certification exam.
                                        Explore training developed by CompTIA and choose an option that fits your learning
                                        style
                                        and timeline.

                                        The CompTIA A+ certification is an entry-level qualification in the information
                                        technology (IT) industry. Issued by IT association CompTIA, the A+ certification is
                                        widely accepted as an industry standard certification often used to start a career
                                        in
                                        IT.
                                    </p>
                                    <strong class="text-color-dark text-4 mb-3-5 text-justify">
                                        Why choose a CompTIA A+?
                                    </strong>
                                    <p class="mb-1 font-weight-light text-color-dark text-4 mb-3-5 text-justify">
                                        CompTIA A+ Allows You to Work From Anywhere
                                        Many jobs in IT today do not require employees to work at an office or another
                                        specific
                                        location anymore. With CompTIA A+, you can get access to careers that enable you to
                                        work
                                        from any location, no matter if that is an employer's office or your home.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"
                            style="animation-delay: 400ms;">
                            <div class="card-header" id="collapse100HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Two" aria-expanded="false"
                                        aria-controls="collapse100Two">
                                        2 - CompTIA Network+ Certification Training
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Two" class="collapse" aria-labelledby="collapse100HeadingTwo"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="data:image/png;base64,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"
                                        alt="">
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">The CompTIA
                                        Network+ is an information technology (IT) certification
                                        exam
                                        that confirms an individual possesses the skills in networking required to develop a
                                        career in IT infrastructure. CompTIA (The Computing Technology Industry Association)
                                        is
                                        the provider of vendor-neutral IT certification.

                                        The exam takes 90 minutes to complete, is limited to no more than 90 questions, and
                                        is
                                        composed of multiple-choice, drag-and-drop and performance-based questions.
                                        Performance-based questions require test-takers to solve problems in simulated
                                        environments. A minimal score of 720/900 is needed to pass. The certification is
                                        valid
                                        for three years.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"
                            style="animation-delay: 600ms;">
                            <div class="card-header" id="collapse100HeadingThree">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Three" aria-expanded="false"
                                        aria-controls="collapse100Three">
                                        3 - CompTIA Security+ (Plus) Certification
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Three" class="collapse" aria-labelledby="collapse100HeadingThree"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="data:image/png;base64,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"
                                        alt="">
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">CompTIA
                                        Security+ is a globally trusted certification that validates
                                        foundational, vendor-neutral IT security knowledge and skills. As a benchmark for
                                        best
                                        practices in IT security, this certification training covers the essential
                                        principles of
                                        network security and risk management.

                                    </p>
                                    <strong class="font-weight-bold text-color-dark text-4 mb-3-5 text-justify">
                                        Comptia Security+ Course Overview :
                                    </strong>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify ">
                                        This CompTIA Security+ training course will help you gain skills required to install
                                        and
                                        configure systems to secure applications, networks, and devices; perform threat
                                        analysis
                                        and respond with appropriate mitigation techniques; participate in risk mitigation
                                        activities; and operate with an awareness of applicable policies, and laws.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"
                            style="animation-delay: 600ms;">
                            <div class="card-header" id="collapse100HeadingFour">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Four" aria-expanded="false"
                                        aria-controls="collapse100Four">
                                        4 - Cisco - CCNA, CCNP Certifications
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Four" class="collapse" aria-labelledby="collapse100HeadingFour"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="https://www.svgrepo.com/show/331335/cisco.svg" alt="">
                                    <strong class="font-weight-bold text-color-dark text-4 mb-3-5 text-justify">
                                        Why choose a Cisco Certification?
                                    </strong>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">
                                        A little over 30 years ago, in a routing and switching room at Cisco, the dream of
                                        offering IT certifications to validate IT skills was born.

                                        Today, Cisco Certifications are the gold standard in IT training. We’ve certified
                                        more
                                        than 4 million people.

                                        In the next 30 years, we aim to train 10 million people through Cisco Networking
                                        Academy
                                        and certify 4 million more people, in our pledge to close the IT skills gap and to
                                        reshape diversity in IT.
                                    </p>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">
                                        Whether you have years of IT experience or are just starting your journey in the
                                        field,
                                        getting certified is a great way to boost your career. Certifications are proof of
                                        knowledge, aptitude, and a lifelong learning mentality, and hiring managers trust
                                        certified employees to connect, secure and automate Cisco networks across the globe.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"
                            style="animation-delay: 800ms;">
                            <div class="card-header" id="collapse100HeadingFive">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Five" aria-expanded="false"
                                        aria-controls="collapse100Five">
                                        5 - CompTIA PenTest+ Certification
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Five" class="collapse" aria-labelledby="collapse1HeadingFive"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="https://comptiacdn.azureedge.net/webcontent/images/default-source/siteicons/logopentestplus.svg?sfvrsn=ba95d8d6_10"
                                        alt="">
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">CompTIA
                                        PenTest+ is for cybersecurity professionals tasked with
                                        penetration testing and vulnerability management.</p>
                                    <strong class="font-weight-bold text-color-dark text-4 mb-3-5 text-justify">
                                        What are the benefits of CompTIA PenTest+?
                                    </strong>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">CompTIA
                                        PenTest+ imparts extensive skills to IT professionals to help
                                        them think repulsively. Expert security professionals not only secure organizations
                                        against vulnerabilities but also think with the mind-set of penetration testers and
                                        hackers to reveal weak points in present policies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6 ms-xl-auto">
                    <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000"
                            style="animation-delay: 1000ms;">
                            <div class="card-header" id="collapse100HeadingSix">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Six" aria-expanded="false"
                                        aria-controls="collapse100Six">
                                        6 - Certified Ethical Hacker (CEH)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Six" class="collapse" aria-labelledby="collapse100HeadingSix"
                                data-bs-parent="#accordion100" style="">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="https://intellectualpoint.com/wp-content/uploads/2019/04/CEH-4.jpg"
                                        alt="">
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">CEH is a
                                        certification for information security professionals. The
                                        CEH exam tests candidates on their knowledge of hacking methods and tools and how to
                                        use them ethically and safely. CEH certification is one of the most popular
                                        information security certifications and is organized by employers worldwide
                                    </p>
                                    <strong class="font-weight-bold text-color-dark text-4 mb-3-5 text-justify">
                                        Who Should Pursue a CEH Certification?
                                    </strong>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">
                                        CEH is a certification for information security professionals. The CEH exam tests
                                        candidates on their knowledge of hacking methods and tools and how to use them
                                        ethically and safely. CEH certification is one of the most popular information
                                        security certifications and is organized by employers worldwide.

                                        While CEH certification is not required for all information security roles, it can
                                        be beneficial for candidates who want to demonstrate their skills and knowledge in
                                        this field. CEH certification benefits candidates to progress in their careers and
                                        earn higher salaries.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200"
                            style="animation-delay: 1200ms;">
                            <div class="card-header" id="collapse100HeadingSeven">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Seven"
                                        aria-expanded="false" aria-controls="collapse100Seven">
                                        7 - CISSP (Certified Information Systems Security Professional)
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Seven" class="collapse" aria-labelledby="collapse100HeadingSeven"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="https://images.credly.com/images/5e6f5247-1d61-4932-a5da-999a7feec067/isc2_cissp2.png"
                                        alt="">
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">CISSP
                                        (Certified Information Systems Security Professional) is an
                                        independent information security certification granted by the International
                                        Information System Security Certification Consortium, also known as (ISC)².
                                    </p>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">Become a CISSP
                                        – Certified Information Systems Security Professional
                                        Accelerate your cybersecurity career with the CISSP certification.

                                        Earning the CISSP proves you have what it takes to effectively design, implement and
                                        manage a best-in-class cybersecurity program. With a CISSP, you validate your
                                        expertise and become an (ISC)² member, unlocking a broad array of exclusive
                                        resources, educational tools, and peer-to-peer networking opportunities.

                                        Prove your skills, advance your career, help earn the salary you want and gain the
                                        support of a community of cybersecurity leaders here to support you throughout your
                                        career.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200"
                            style="animation-delay: 1200ms;">
                            <div class="card-header" id="collapse100HeadingEight">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Eight"
                                        aria-expanded="false" aria-controls="collapse100Eight">
                                        8 - Cloud Practitioner
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Eight" class="collapse" aria-labelledby="collapse100HeadingEight"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="https://d1.awsstatic.com/training-and-certification/certification-badges/AWS-Certified-Cloud-Practitioner_badge.634f8a21af2e0e956ed8905a72366146ba22b74c.png"
                                        alt="">
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">The AWS
                                        Certified Cloud Practitioner validates foundational,
                                        high-level understanding of AWS Cloud, services, and terminology. This is a good
                                        starting point on the AWS Certification journey for individuals with no prior IT or
                                        cloud experience switching to a cloud career or for line-of-business employees
                                        looking for foundational cloud literacy.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1400"
                            style="animation-delay: 1400ms;">
                            <div class="card-header" id="collapse100HeadingNine">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Nine" aria-expanded="false"
                                        aria-controls="collapse100Nine">
                                        9 - Solution Architecture Associate
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Nine" class="collapse" aria-labelledby="collapse100HeadingNine"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="https://d1.awsstatic.com/training-and-certification/certification-badges/AWS-Certified-Solutions-Architect-Associate_badge.3419559c682629072f1eb968d59dea0741772c0f.png"
                                        alt="">
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">
                                        AWS Certified Solutions Architect - Associate showcases knowledge and skills in AWS
                                        technology, across a wide range of AWS services. The focus of this certification is
                                        on the design of cost and performance optimized solutions, demonstrating a strong
                                        understanding of the AWS Well-Architected Framework. This certification can enhance
                                        the career profile and earnings of certified individuals and increase your
                                        credibility and confidence in stakeholder and customer interactions.

                                        This exam does not require deep hands-on coding experience, although familiarity
                                        with basic programming concepts would be an advantage.
                                    </p>
                                    <strong class="font-weight-bold text-color-dark text-4 mb-3-5 text-justify">
                                        Who should take this exam?
                                    </strong>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">

                                        AWS Certified Solutions Architect - Associate is a great starting point on the AWS
                                        Certification path for individuals who may have any of the following:
                                    <ul>
                                        <li class="font-weight-light text-color-dark text-4 mb-3-5">Experience
                                            in AWS technology</li>
                                        <li class="font-weight-light text-color-dark text-4 mb-3-5">Strong
                                            on-premises IT experience and understanding of mapping on-premises to
                                            cloud</li>
                                        <li class="font-weight-light text-color-dark text-4 mb-3-5">
                                            Experience working in other cloud services</li>
                                    </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default appear-animation animated fadeInRightShorter appear-animation-visible"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1600"
                            style="animation-delay: 1600ms;">
                            <div class="card-header" id="collapse100HeadingTen">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse100Ten" aria-expanded="false"
                                        aria-controls="collapse100Ten">
                                        10 - Microsoft Azure Fundamentals
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse100Ten" class="collapse" aria-labelledby="collapse1HeadingTen"
                                data-bs-parent="#accordion100">
                                <div class="card-body">
                                    <img class="float-start" style="margin-right: 1em" width="150"
                                        src="data:image/png;base64,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"
                                        alt="">
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">Whether you’re
                                        new to the field or a seasoned professional, mastering
                                        the basics in Microsoft Azure can help you jump-start your career and prepare you to
                                        dive deeper into the many technical opportunities Azure offers.

                                        This certification validates your foundational knowledge of cloud concepts in
                                        general and Azure in particular. As a candidate for this certification, you can
                                        describe Azure architectural components and Azure services, such as compute,
                                        networking, and storage, as well as features and tools to secure, govern, and
                                        administer Azure.</p>
                                    <strong class="font-weight-bold text-color-dark text-4 mb-3-5 text-justify">
                                        The Microsoft Certified: Azure Fundamentals certification could be a
                                        great fit for you if you’d like to:
                                    </strong>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">
                                    <ul>
                                        <li class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">Prove your
                                            knowledge of cloud computing concepts, models, and services, such as
                                            public, private, and hybrid cloud, in addition to infrastructure as a service
                                            (IaaS), platform as a service (PaaS), and software as a service (SaaS).</li>
                                        <li class="font-weight-light text-color-dark text-4 mb-3-5 text-justify"> Show your
                                            expertise on how Azure supports security, privacy, compliance, and
                                            trust.</li>
                                    </ul>
                                    <p class="font-weight-light text-color-dark text-4 mb-3-5 text-justify">
                                        It’s recommended to have skills and experience working with an area of information
                                        technology (IT), such as infrastructure management, database management, or software
                                        development. You can use your Azure Fundamentals certification to reinforce your
                                        basics for other Azure role-based or specialty certifications, but it isn’t a
                                        prerequisite for any of them.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
