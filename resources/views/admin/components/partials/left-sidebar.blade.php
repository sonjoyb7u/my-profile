<div class="left-sidebar">
    <!-- left sidebar HEADER -->
    <div class="left-sidebar-header">
        <div class="left-sidebar-title">ADMIN | MY PROFILE</div>
        <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
            <span></span>
        </div>
    </div>
    <!-- NAVIGATION -->
    <!-- ========================================================= -->
    <div id="left-nav" class="nano">
        <div class="nano-content">
            <nav>
                <ul class="nav nav-left-lines" id="main-nav">


                    <!--HOME-->
                    <li class="{{ request()->is('admin/dashboard') ? 'active-item' : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>

                    <!-- PROFILE SECTION -->
                    <li class="has-child-item {{ request()->is('admin/profile', 'admin/profile/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-cube" aria-hidden="true"></i><span>PROFILE SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class=" {{ request()->is('admin/profile/create') ? 'active-item' : '' }}"><a href="{{ route('admin.profile.create') }}">Add profile</a></li>
                            <li  class=" {{ request()->is('admin/profile', 'admin/profile/edit/*', 'admin/profile/show/*') ? 'active-item' : '' }}"><a href="{{ route('admin.profile.index') }}">Manage Profile</a></li>
                        </ul>
                    </li>
                    <!-- SKILL SECTION -->
                    <li class="has-child-item {{ request()->is('admin/skill', 'admin/skill/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-cube" aria-hidden="true"></i><span>SKILL SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class=" {{ request()->is('admin/skill/create') ? 'active-item' : '' }}"><a href="{{ route('admin.skill.create') }}">Add Skill</a></li>
                            <li  class=" {{ request()->is('admin/skill', 'admin/skill/edit/*', 'admin/skill/show/*') ? 'active-item' : '' }}"><a href="{{ route('admin.skill.index') }}">Manage Skill</a></li>
                        </ul>
                    </li>
                    <!-- SERVICE SECTION -->
                    <li class="has-child-item {{ request()->is('admin/service', 'admin/service/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-cube" aria-hidden="true"></i><span>SERVICE SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class=" {{ request()->is('admin/service/create') ? 'active-item' : '' }}"><a href="{{ route('admin.service.create') }}">Add Service</a></li>
                            <li  class=" {{ request()->is('admin/service', 'admin/service/edit/*', 'admin/service/show/*') ? 'active-item' : '' }}"><a href="{{ route('admin.service.index') }}">Manage Skill</a></li>
                        </ul>
                    </li>
                    <!-- SLIDER SECTION -->
                    <li class="has-child-item {{ request()->is('admin/slider','admin/sliders/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-cube" aria-hidden="true"></i><span>SLIDER SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class="{{ request()->is('admin/slider/create') ? 'active-item' : '' }}"><a href="">Add Slider</a></li>
                            <li  class="{{ request()->is('admin/slider', 'admin/slider/edit/*', 'admin/slider/show/*') ? 'active-item' : '' }}"><a href="">Manage Slider</a></li>
                        </ul>
                    </li>
                    <!-- WORK SECTION -->
                    <li class="has-child-item {{ request()->is('admin/category','admin/category/*', 'admin/project', 'admin/project/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-sitemap" aria-hidden="true"></i><span>WORK SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class="has-child-item {{ request()->is('admin/category', 'admin/category/*') ? 'open-item active-item' : 'close-item' }}">
                                <a><i class="fa fa-cubes"  aria-hidden="true"></i>CATEGORY</a>
                                <ul class="nav child-nav level-2">
                                    <li class="{{ request()->is('admin/category/create') ? 'active-item' : 'close-item' }}"><a href="{{ route('admin.category.create') }}">Add Category</a></li>
                                    <li class="{{ request()->is('admin/category', 'admin/category/edit/*', 'admin/category/show/*') ? 'active-item' : 'close-item' }}"><a href="{{ route('admin.category.index') }}">Manage Category</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item {{ request()->is('admin/project', 'admin/project/*') ? 'open-item active-item' : 'close-item' }}">
                                <a><i class="fa fa-cubes"  aria-hidden="true"></i>PROJECT</a>
                                <ul class="nav child-nav level-2">
                                    <li class="{{ request()->is('admin/project/create') ? 'active-item' : 'close-item' }}"><a href="{{ route('admin.project.create') }}">Add Project</a></li>
                                    <li class="{{ request()->is('admin/project', 'admin/project/edit/*', 'admin/project/show/*') ? 'active-item' : 'close-item' }}"><a href="{{ route('admin.project.index') }}">Manage Project</a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

