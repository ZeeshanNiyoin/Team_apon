<nav class="sidebar dark_sidebar">
    <div class="logo d-flex justify-content-between">
        <div class="d-flex justify-content-center align-items-center">
            <a class="large_logo" href="index.html">
                <img src="{{asset('user/img/logo_d.png')}}" class="w-75 px-2" alt="Main Logo" />
            </a>
        </div>
        <a class="small_logo" href="/user/dashboard"><img src="{{asset('user/img/Apon icon-04 (1).png')}}" alt="" /></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="nav_title" id="btn">
                    <button class="border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#exampleModal" id="colorr_nav">
                        New Release
                    </button>
                </div>
            </a>
        </li>
        <li class>
            <a href="index.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="img/menu-icon/1.svg" alt />
                </div>
                <div onclick="window.location.href='/dashboard'" class="nav_title">
                    <button id="colorr_nav">Overview</button>
                </div>
            </a>
        </li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="fa-solid fa-music"></i>
                </div>
                <div class="nav_title d-flex justify-content-between" style="color: rgb(55,55,55) !important;">
                    <div> <button id="colorr_nav">Catalog </button> </div>
                    <div><i class="fa-solid fa-caret-down"></i></div>
                </div>
            </a>
            <ul>
                <li><a href="all_release_Page.html">All Release</a></li>
                <li><a href="draft_Page.html">Drafts</a></li>
                <li>
                    <a href="correction-requested_Pages.html">Correction Requested</a>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="analatic_Page.html" aria-expanded="false">
                <div class="nav_icon_small">

                    <i class="fa-solid fa-chart-simple"></i>
                </div>
                <div onclick="window.location.href='/dashboard'" class="nav_title">

                    <button id="colorr_nav">Analytics</button>
                </div>
            </a>
        </li>
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                </div>
                <div class="nav_title d-flex justify-content-between">
                    <div><button id="colorr_nav">Financial</button></div>
                    <div><i class="fa-solid fa-caret-down"></i></div>
                </div>
            </a>
            <ul>
                <li><a href="financial_report_Page.html">Financial Report</a></li>
            </ul>
        </li>

        <li>
            <a>
                <div class="nav_icon_small">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <div class="nav_title">
                    <button id="myBtn">Promotions</button>
                </div>
            </a>
        </li>
        <li class="">
            <a href="copyrightPage.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <i class="fa-regular fa-copyright"></i>
                </div>
                <div onclick="window.location.href='/dashboard'" class="nav_title">
                    <button id="colorr_nav">Copyright Claims</button>
                </div>
            </a>
        </li>
    </ul>
</nav>