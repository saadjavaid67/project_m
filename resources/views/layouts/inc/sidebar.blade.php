<div id="sidebar-container">
    <div id="sidebar-wrapper" class="pt-3">
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
            <li><a><i class="fas fa-border-all"></i><span>Home</span></a></li>
            <li><a><i class="fas fa-message"></i><span>Contacts</span></a></li>
            <li><a><i class="fas fa-user-group"></i><span>Members</span></a></li>
            <li><a><i class="fas fa-list-check"></i><span>Tasks</span></a></li>
            <li><a><i class="fas fa-gear"></i><span>Settings</span></a></li>
        </ul>
    </div>
</div>
