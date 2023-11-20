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
                @foreach (auth()->user()->roles as $role)
                    @if ($role->name === 'admin')
                        <li
                            class="nav-item
                        @if (request()->is('users/*')) menu-open
                        @elseif (request()->is('users')) menu-open
                        @elseif (request()->is('invitations')) menu-open @endif
                    ">
                            <a href="#" class="nav-link nav-item-custom">
                                <ion-icon class="text-custom" style="font-size: 1.45em"
                                    name="people-outline"></ion-icon>
                                <p class="text-custom">
                                    Admin Panel
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview"
                                style="background-color: #eaecf3 !important; border-radius: 0.2em">
                                <li class="nav-item" style="position: relative">
                                    <a href="{{ route('users.index') }}"
                                        class="nav-link
                                        @if (request()->is('users')) custom-active-class @endif"
                                        style="color: #21263c; border-radius: 0.2em">

                                        <p style="margin-left: 1.7em">
                                            Users
                                        </p>

                                    </a>
                                    <a href="{{ route('showInvitations') }}"
                                        class="
                                        @if (request()->is('users')) custom-active-class @endif"
                                        style="position: absolute; top: 25%; right: 5%;">

                                        <i class="fas fa-plus-circle"></i>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endif
                @endforeach


                @foreach (auth()->user()->roles as $role)
                    @if ($role->name === 'librarian')
                        <li
                            class="nav-item
                                    @if (request()->is('books/*')) menu-open
                                    @elseif (request()->is('book/*')) menu-open
                                    @elseif (request()->is('books')) menu-open
                                    @elseif (request()->is('reports')) menu-open
                                    @elseif (request()->is('borrowers')) menu-open @endif
                                ">

                            <a href="#" class="nav-link nav-item-custom">
                                <ion-icon class="text-custom" style="font-size: 1.45em"
                                    name="library-outline"></ion-icon>
                                <p class="text-custom">
                                    Library
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview"
                                style="background-color: #eaecf3 !important; border-radius: 0.2em">
                                <li class="nav-item" style="position: relative">
                                    <a href="{{ route('showBooks') }}"
                                        class="nav-link
                                        @if (request()->is('books')) custom-active-class
                                        @elseif (request()->is('book/add')) custom-active-class @endif"
                                        style="color:
                                        #21263c; border-radius: 0.5em">
                                        <p style="margin-left: 1.7em">
                                            Books
                                        </p>
                                    </a>

                                    <a href="{{ route('addNewBook') }}"
                                        class="
                                        @if (request()->is('books')) custom-active-class
                                        @elseif (request()->is('book/add')) custom-active-class @endif"
                                        style="position:
                                        absolute; top: 25%; right: 5%;">
                                        <i class="fas fa-plus-circle"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('borrowers.index') }}"
                                        class="nav-link
                                        @if (request()->is('borrowers')) custom-active-class @endif"
                                        style="color:
                                        #21263c; border-radius: 0.2em">
                                        <p style="margin-left: 1.7em">
                                            Borrowers
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('reports.index') }}"
                                        class="nav-link
                                        @if (request()->is('reports')) custom-active-class @endif"
                                        style="color: #21263c; border-radius: 0.2em">

                                        <p style="margin-left: 1.7em">
                                            Reports
                                        </p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endif
                @endforeach

                {{-- Canteen --}}
                @foreach (auth()->user()->roles as $role)
                    @if ($role->name === 'canteen')
                        <li
                            class="nav-item
                                    @if (request()->is('canteen/*')) menu-open
                                    @elseif (request()->is('inventory')) menu-open
                                    @elseif (request()->is('inventory/*')) menu-open @endif
                                ">
                            <a href="#" class="nav-link nav-item-custom" style="color: #eaecf3">
                                <ion-icon name="storefront-outline" class="text-custom" style="font-size: 1.45em">
                                </ion-icon>

                                <p class="text-custom ">
                                    Canteen
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview"
                                style="background-color: #eaecf3 !important; border-radius: 0.2em">

                                <li class="nav-item" style="position: relative">
                                    <a href="{{ route('pos') }}"
                                        class="nav-link
                                        @if (request()->is('canteen/pos')) custom-active-class
                                        @elseif (request()->is('inventory')) custom-active-class @endif"
                                        style="color:
                                        #21263c; border-radius: 0.5em">
                                        <p style="margin-left: 1.7em">
                                            Sell Items
                                        </p>
                                    </a>

                                    <a href="{{ route('inventory.index') }}"
                                        class="
                                        @if (request()->is('canteen/pos')) custom-active-class
                                        @elseif (request()->is('inventory')) custom-active-class @endif"
                                        style="position:
                                        absolute; top: 25%; right: 5%;">
                                        <i class="fas fa-plus-circle"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('addNewItem') }}"
                                        class="nav-link
                                        @if (request()->is('addNewItem')) custom-active-class @endif"
                                        style="color: #5567A0; border-radius: 0">
                                        <i class="fas fa-plus-square nav-icon"></i>
                                        <p>Add New Item</p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route('reports.index') }}"
                                        class="nav-link
                                        @if (request()->is('reports')) custom-active-class @endif"
                                        style="color: #5567A0; border-radius: 0">
                                        <i class="fas fa-file-invoice nav-icon"></i>
                                        <p>Reports</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endif
                @endforeach

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
