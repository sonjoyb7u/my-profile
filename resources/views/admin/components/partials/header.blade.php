<div class="page-header">
    <!-- LEFTSIDE header -->
    <div class="leftside-header">
        <div style="margin: 8px" class="logo">
            <a href="{{ route('admin.dashboard') }}" class="on-click">
{{--                <img alt="logo" src="{{ asset('assets/site/images/logo/logo1.png') }}" />--}}
                <h2 class="admin-logo">{ MY PROFILE ]</h2>
            </a>
        </div>
        <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <!-- RIGHTSIDE header -->
    <div class="rightside-header">
        <div class="header-middle"></div>
        <!--SEARCH HEADERBOX-->
        <div class="header-section" id="search-headerbox">
            <input type="text" name="search" id="search" placeholder="Search...">
            <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
            <div class="header-separator"></div>
        </div>
        <!--USER HEADERBOX -->
        <div class="header-section" id="user-headerbox">
            <div class="user-header-wrap">
                <div class="user-photo">
                    <img alt="profile photo" src="{{ asset('uploads/images/profile/' . auth()->user()->profile->image) }}" />
                </div>
                <div class="user-info">
                    <span class="user-name">{{ auth()->user()->full_name }}</span>
                    <span class="user-profile">{{ auth()->user()->status === 1 ? 'ADMIN' : '' }}</span>
                </div>
                <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                <i class="fa fa-minus icon-close" aria-hidden="true"></i>
            </div>
            <div class="user-options dropdown-box">
                <div class="drop-content basic">
                    <ul>
                        <li> <a href="{{ route('admin.profile.show', [base64_encode(auth()->user()->id)]) }}"><i class="fa fa-user" aria-hidden="true"></i>Profile Detail</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-separator"></div>
        <!--Log out -->
        <div class="header-section">
            <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="left" title="Logout" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out log-out" aria-hidden="true"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf

            </form>
        </div>
    </div>
</div>

