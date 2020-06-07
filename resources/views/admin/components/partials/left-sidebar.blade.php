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
                    <!-- SLIDER SECTION -->
                    <li class="has-child-item {{ request()->is('admin/slider','admin/sliders/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-cube" aria-hidden="true"></i><span>SLIDER SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class="{{ request()->is('admin/slider/create') ? 'active-item' : '' }}"><a href="{{ route('admin.slider.create') }}">Add Slider</a></li>
                            <li  class="{{ request()->is('admin/slider', 'admin/slider/edit/*', 'admin/slider/show/*') ? 'active-item' : '' }}"><a href="{{ route('admin.slider.index') }}">Manage Slider</a></li>
                        </ul>
                    </li>
                    <!-- URL LINK SECTION -->
                    <li class="has-child-item {{ request()->is('admin/url-link', 'admin/url-link/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-cube" aria-hidden="true"></i><span>URL-LINK SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class=" {{ request()->is('admin/url-link/create') ? 'active-item' : '' }}"><a href="{{ route('admin.url-link.create') }}">Add Url-link</a></li>
                            <li  class=" {{ request()->is('admin/url-link', 'admin/url-link/edit/*', 'admin/url-link/show/*') ? 'active-item' : '' }}"><a href="{{ route('admin.url-link.index') }}">Manage Url-links</a></li>
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
                    <!-- CLIENT SECTION -->
                    <li class="has-child-item {{ request()->is('admin/client', 'admin/client/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-cube" aria-hidden="true"></i><span>CLIENT SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class=" {{ request()->is('admin/client/create') ? 'active-item' : '' }}"><a href="{{ route('admin.client.create') }}">Add Client</a></li>
                            <li  class=" {{ request()->is('admin/client', 'admin/client/edit/*', 'admin/client/show/*') ? 'active-item' : '' }}"><a href="{{ route('admin.client.index') }}">Manage Client</a></li>
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
                    <!-- BLOG SECTION -->
                    <li class="has-child-item {{ request()->is('admin/blog-category','admin/blog-category/*', 'admin/blog-post', 'admin/blog-post/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-sitemap" aria-hidden="true"></i><span>BLOG SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class="has-child-item {{ request()->is('admin/blog-category', 'admin/blog-category/*') ? 'open-item active-item' : 'close-item' }}">
                                <a><i class="fa fa-cubes"  aria-hidden="true"></i>BLOG-CATEGORY</a>
                                <ul class="nav child-nav level-2">
                                    <li class="{{ request()->is('admin/blog-category/create') ? 'active-item' : 'close-item' }}"><a href="{{ route('admin.blog-category.create') }}">Add Blog-Category</a></li>
                                    <li class="{{ request()->is('admin/blog-category', 'admin/blog-category/edit/*', 'admin/blog-category/show/*') ? 'active-item' : 'close-item' }}"><a href="{{ route('admin.blog-category.index') }}">Manage Blog-Category</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item {{ request()->is('admin/blog-post', 'admin/blog-post/*') ? 'open-item active-item' : 'close-item' }}">
                                <a><i class="fa fa-cubes"  aria-hidden="true"></i>BLOG-POST</a>
                                <ul class="nav child-nav level-2">
                                    <li class="{{ request()->is('admin/blog-post/create') ? 'active-item' : 'close-item' }}"><a href="{{ route('admin.blog-post.create') }}">Add Blog-post</a></li>
                                    <li class="{{ request()->is('admin/blog-post', 'admin/blog-post/edit/*', 'admin/blog-post/show/*') ? 'active-item' : 'close-item' }}"><a href="{{ route('admin.blog-post.index') }}">Manage Blog-Post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- CONTACT FORM SECTION -->
                    <li class="has-child-item {{ request()->is('admin/contact', 'admin/contact/*') ? 'open-item active-item' : 'close-item' }}">
                        <a><i class="fa fa-cube" aria-hidden="true"></i><span>CONTACT SECTION</span></a>
                        <ul class="nav child-nav level-1">
                            <li class=" {{ request()->is('admin/contact/create') ? 'active-item' : '' }}"><a href="{{ route('admin.contact.create') }}">Add Contact</a></li>
                            <li  class=" {{ request()->is('admin/contact', 'admin/contact/edit/*', 'admin/contact/show/*') ? 'active-item' : '' }}"><a href="{{ route('admin.contact.index') }}">Manage Contact</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

