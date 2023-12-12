<aside class="main-sidebar elevation-4" style="background-color: #F7F7FE">
    <!-- Brand Logo -->
    <a href="/"
        style="width: 100% !important;color: #000 !important;display: flex;justify-content: center; padding: 1em; background-color: white">
        <img width="70%" src="{{ asset('images') }}/heritage_school_logo.png" alt="heritage School" class="brand-image"
            style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" style="color: white !important" data-widget="treeview"
                role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link nav-item-custom">
                        <ion-icon class="text-custom" style="font-size: 1.2em" name="home-outline"></ion-icon>
                        <p class="text-custom">
                            Home
                        </p>
                    </a>
                </li>


                <li
                    class="nav-item
                        @if (request()->is('users/*')) menu-open
                        @elseif (request()->is('users')) menu-open
                        @elseif (request()->is('invitations')) menu-open @endif
                    ">
                    <a href="#" class="nav-link nav-item-custom"
                        style="display: flex; align-items: center; gap: 1em">
                        <ion-icon class="text-custom" style="font-size: 1.45em" name="people-outline"></ion-icon>
                        <p class="text-custom">
                            Courses
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview" style="background-color: #eaecf3 !important; border-radius: 0.2em">
                        <li class="nav-item" style="position: relative">
                            <a href="#"
                                class="nav-link
                                        @if (request()->is('users')) custom-active-class @endif"
                                style="color: #21263c; border-radius: 0.2em">

                                <p style="margin-left: 1.7em">
                                    Short Courses
                                </p>

                            </a>
                            <a href="{{ route('dashboard-short-course.create') }}"
                                class="
                                        @if (request()->is('users')) custom-active-class @endif
                                    "
                                style="position: absolute; top: 25%; right: 5%;">

                                <i class="fas fa-plus-circle"></i>
                            </a>
                        </li>

                    </ul>
                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
