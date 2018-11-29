<nav class="menu-left">
    <div class="menu-left__lock menu-left__action--menu-toggle">
        <div class="menu-left__pin-button">
            <div><!-- --></div>
        </div>
    </div>
    <div class="menu-left__logo">
        <!-- <a href="dashboards-alpha.html">
            <img src="{{ asset('components/dummy-assets/common/img/logo-inverse.png') }}" alt="" />
        </a> -->

        <h5 style="color: white;">Clorida Assessment</h5>

    </div>
    <div class="menu-left__inner">
        <ul class="menu-left__list menu-left__list--root">
            <li class="menu-left__item">
                <a href="javascript: void(0);" class="menu-right__action--menu-toggle">
                    <span class="menu-left__icon icmn-cog utils__spin-delayed--pseudo-selector"></span>
                    Dashboard
                </a>
                      
            <li class="menu-left__divider"><!-- --></li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-file-text"></span>
                   Questions
                </a>
                <ul class="menu-left__list">
                    <li class="menu-left__item">
                        <a href="{{ url('/admin/question') }}">
                            <span class="menu-left__icon">LA</span>
                            Total Questions
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li class="menu-left__divider"><!-- --></li>
            <li class="menu-left__item menu-left__submenu">
                <a href="javascript: void(0);">
                    <span class="menu-left__icon icmn-file-text"></span>
                   Categories
                </a>
                <ul class="menu-left__list">
                    <li class="menu-left__item">
                        <a href="{{ url('/admin/question_category') }}">
                            <span class="menu-left__icon">MC</span>
                            Main Categories
                        </a>
                    </li>
                    <li class="menu-left__item">
                        <a href="{{ url('/admin/question_sub_category') }}">
                            <span class="menu-left__icon">SC</span>
                            Sub Categories
                        </a>
                    </li>
                </ul>
            </li>       
        </ul>
    </div>
</nav>