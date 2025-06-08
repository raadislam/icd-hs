@auth
    <header id="header" class="header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}"
        style="height: 155px;">
        <div class="header-body border-color-primary header-body-bottom-border" style="position: fixed;">
            <div class="header-top header-top-default border-bottom-0" style="height: 52px;">
                <div class="container">
                    <div class="header-row py-2">
                        <div class="header-column justify-content-start">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills text-uppercase text-2">
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link ps-0" href="about-us.html"><i class="fas fa-angle-right"></i>
                                                About Us</a>
                                        </li>
                                        <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                            <a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i>
                                                Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            {{ Auth::guard('course')->user()->name }}
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('course-user-signout') }}"><i
                                                    class="fas fa-sign-out-alt text-4 text-color-primary"
                                                    style="top: 0;"></i> Sign Out </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </header>
@endauth
