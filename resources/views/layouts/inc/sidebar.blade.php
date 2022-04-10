<div id="sidebar-container">
    <div id="sidebar-wrapper">
        <ul id="sidebar-menu" class="sidebar-nav border-bottom">
            <li>
                <a>
                    <div>
                        <img class="logo" src="{{ asset('assets/logo/logo.png') }}" alt="logo">
                        <span>{{ config('app.name', 'Laravel') }}</span>
                    </div>
                    <img src="{{ asset('assets/navbar-toggler.png') }}" id="menu-toggle" alt="">
                </a>

            </li>
        </ul>
        <ul class="sidebar-nav border-bottom py-3" id="sidebar">
            <li><a><img src="{{ asset('assets/icons/category.png') }}" alt=""><span>Home</span></a></li>
            <li><a><img src="{{ asset('assets/icons/message.png') }}" alt=""><span>Contacts</span></a></li>
            <li><a><img src="{{ asset('assets/icons/profile-2user.png') }}" alt=""><span>Members</span></a></li>
            <li><a><img src="{{ asset('assets/icons/task-square.png') }}" alt=""><span>Tasks</span></a></li>
            <li><a><img src="{{ asset('assets/icons/setting-2.png') }}" alt=""><span>Settings</span></a></li>
        </ul>
    </div>
</div>
