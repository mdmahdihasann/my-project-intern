<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="{{ url('/') }}">
            <div class="iq-light-logo">
                <img src="{{ asset('backend') }}/images/logo.gif" class="img-fluid" alt="">
            </div>
            <div class="iq-dark-logo">
                <img src="{{ asset('backend') }}/images/logo-dark.gif" class="img-fluid" alt="">
            </div>
            <span>Vito</span>
        </a>
        <div class="iq-menu-bt-sidebar">
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="iq-menu-title"><i class="ri-subtract-line"></i>
                    <span>Home</span></li>
                <li>
                    <a href="{{ route('user.dashboard') }}" class="iq-waves-effect"><i
                            class="ri-home-4-line"></i><span>Dashboard</span></a>
                </li>
                <li class="iq-menu-title"><i class="ri-subtract-line"></i>
                    <span>Apps</span></li>

                <li><a href="javascript:" class="iq-waves-effect" aria-expanded="false">
                    <i class="ri-chat-check-line"></i><span>Table</span></a>
                </li>
                
                
            </ul>
        </nav>
        <div class="p-3"></div>
    </div>
</div>