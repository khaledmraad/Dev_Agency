<link href="/css/sidebar.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

                    <script src="/js/sidebar.js"></script>
    <nav class="sidebar close here" >
        <header>
            <div class="image-text">
                <!-- <span class="image">
                    <img src="logo.png" alt="">
                </span> -->

                <div class="text logo-text">
                    <span class="text-center">{{ Auth::user()->name }}</span>
                    <span class="text-center">Dev Agency</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links" style="padding:0px;margin:0px">
                    <li class="nav-link"  style="padding:0px;margin:10px 0px">
                        <a href="/admin/dev_cont_panel">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Developpers</span>
                        </a>
                    </li>

                    <li class="nav-link" style="padding:0px;margin:10px 0px">
                        <a href="/admin/client_cont_panel">
                            <i class='bi bi-calendar-check icon' ></i>
                            <span class="text nav-text">Clients</span>
                        </a>
                    </li>

                    <li class="nav-link" style="padding:0px;margin:10px 0px">
                        <a href="/admin/admin_cont_panel">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Admins</span>
                        </a>
                    </li>  

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      
                                        <i class='bx bx-log-out icon' ></i>
                                        <span class="text nav-text">Logout</span>
                                    </a>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>
