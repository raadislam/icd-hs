<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickySetTop': '-70px', 'stickyChangeLogo': true}"
    style="height: 155px;">
    <div class="header-body border-0 box-shadow-none">
        <div class="header-container container">
            <div class="header-row py-2">
                <div class="header-column">
                    <div class="header-row justify-content-between w-100 h-100">

                        <ul class="nav nav-pills ">
                            <li class="nav-item py-2 d-none d-xl-inline-flex">
                                <span
                                    class="header-top-phone py-2 d-flex align-items-center text-color-primary font-weight-semibold text-uppercase">
                                    <i class="icon-phone icons text-5 me-2"></i> <a href="tel:+8801972524253">
                                        (+880) 1972524253
                                    </a>
                                </span>
                            </li>
                        </ul>

                        <div class="header-logo mb-0" style="height: 46px;">
                            <a href="index.html">
                                <img alt="Porto" height="46"
                                    src="{{ asset('file') }}/img/demos/medical-2/logos/logo.png">
                            </a>
                        </div>

                        <div class="header-nav-main">
                            <nav class="collapse ">
                                <ul class="nav nav-pills" id="mainNav"
                                    style="display: flex; justify-content: center; align-items: center">
                                    <li class="dropdown dropdown-secondary">
                                        <a class="nav-link dropdown-toggle bg-primary text-light position-relative top-5  text-2 font-weight-bold text-uppercase px-5 btn-py-2 mb-3"
                                            class="dropdown-toggle">
                                            Make Appointment
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item font-weight-normal"
                                                    href="{{ route('ourDoctors') }}">
                                                    For Doctors
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item font-weight-normal"
                                                    href="{{ route('services') }}">
                                                    For Therapies
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-bar z-index-0">
            <div class="container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row align-items-center justify-content-end">
                            <div class="header-nav header-nav-links justify-content-start mb-3">
                                <div
                                    class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown-secondary">
                                                <a class="nav-link  @if (request()->is('/')) active @endif"
                                                    href="/">
                                                    Home
                                                </a>
                                            </li>

                                            <li class="dropdown dropdown-secondary">
                                                <a class="nav-link dropdown-toggle" class="dropdown-toggle">
                                                    About
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item font-weight-normal"
                                                            href="{{ route('aboutus') }}">
                                                            Who We Are ?
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item font-weight-normal"
                                                            href="{{ route('ourTeam') }}">
                                                            Our Team
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item font-weight-normal"
                                                            href="{{ route('ourTherapists') }}">
                                                            Our Therapists
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item font-weight-normal"
                                                            href="{{ route('ourDoctors') }}">
                                                            Our Doctors
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item font-weight-normal" href="#">
                                                            Our Caregivers
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item font-weight-normal" href="#">
                                                            Our Nurses
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>

                                            <li class="dropdown dropdown-secondary">
                                                <a class="nav-link dropdown-toggle" class="dropdown-toggle">
                                                    Study Center
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item font-weight-normal" href="#">
                                                            Program of Study
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item font-weight-normal"
                                                            href="{{ route('shortCourse') }}">
                                                            Short Courses
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item font-weight-normal"
                                                            href="{{ route('shortCourse') }}">
                                                            PSW
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="{{ route('daycare') }}">
                                                    Day Care
                                                </a>
                                            </li>

                                            <li class="dropdown dropdown-secondary">
                                                <a class="nav-link dropdown-toggle" class="dropdown-toggle">
                                                    Services
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item font-weight-normal"
                                                            href="{{ route('ourDoctors') }}">
                                                            eDoctor
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item font-weight-normal"
                                                            href="{{ route('ourTherapists') }}">
                                                            eTherapists
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="#">
                                                    School of Minds
                                                </a>
                                            </li>

                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="{{ route('speechTherapist') }}">
                                                    Speech Therapy
                                                </a>
                                            </li>

                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="#">
                                                    Care Giving
                                                </a>
                                            </li>

                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="{{ route('entDoctors') }}">
                                                    MMI ENT Center
                                                </a>
                                            </li>

                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="#">
                                                    Diagonistic Center
                                                </a>
                                            </li>

                                            <li class="dropdown-secondary">
                                                <a class="nav-link" href="{{ route('earnLeave') }}">
                                                    Earn & Live
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
