<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <div class="iq-sidebar-logo">
            <div class="top-logo">
                <a href="{{ url('/') }}" class="logo">
                    <div class="iq-light-logo">
                        <img src="{{ asset('backend') }}/images/logo.gif" class="img-fluid" alt="">
                    </div>
                    <div class="iq-dark-logo">
                        <img src="{{ asset('backend') }}/images/logo-dark.gif" class="img-fluid" alt="">
                    </div>
                    <span>My Project</span>
                </a>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="navbar-left">
                <ul id="topbar-data-icon" class="d-flex p-0 topbar-menu-icon">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link font-weight-bold search-box-toggle"><i
                                class="ri-home-4-line"></i></a>
                    </li>
                    <li><a href="chat.html" class="nav-link"><i class="ri-message-line"></i></a></li>

                    <li><a href="profile.html" class="nav-link"><i class="ri-question-answer-line"></i></a></li>
                    <li><a href="todo.html" class="nav-link router-link-exact-active router-link-active"><i
                                class="ri-chat-check-line"></i></a></li>
                    <li><a href="app/index.html" class="nav-link"><i class="ri-inbox-line"></i></a></li>
                </ul>
                <div class="iq-search-bar d-none d-md-block">
                    <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        <div class="searchbox-datalink">
                            <h6 class="pl-3 pt-3 pb-3">Pages</h6>
                            <ul class="m-0 pl-3 pr-3 pb-3">
                                <li class="iq-bg-primary-hover rounded"><a href="index.html"
                                        class="nav-link router-link-exact-active router-link-active pr-2"><i
                                            class="ri-home-4-line pr-2"></i>Dashboard</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="dashboard-1.html"
                                        class="nav-link router-link-exact-active router-link-active pr-2"><i
                                            class="ri-home-3-line pr-2"></i>Dashboard-1</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="chat.html" class="nav-link"><i
                                            class="ri-message-line pr-2"></i>Chat</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="calendar.html" class="nav-link"><i
                                            class="ri-calendar-2-line pr-2"></i>Calendar</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="profile.html" class="nav-link"><i
                                            class="ri-profile-line pr-2"></i>Profile</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="todo.html" class="nav-link"><i
                                            class="ri-chat-check-line pr-2"></i>Todo</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="app/index.html" class="nav-link"><i
                                            class="ri-mail-line pr-2"></i>Email</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-list.html"
                                        class="nav-link"><i class="ri-message-line pr-2"></i>Product Listing</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="e-commerce-product-detail.html"
                                        class="nav-link"><i class="ri-file-list-line pr-2"></i>Product Details</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="pages-faq.html" class="nav-link"><i
                                            class="ri-compasses-line pr-2"></i>Faq</a></li>
                                <li class="iq-bg-primary-hover rounded"><a href="form-wizard.html" class="nav-link"><i
                                            class="ri-clockwise-line pr-2"></i>Form-wizard</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <i class="ri-menu-3-line"></i>
            </button>
            <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                    <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                    <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto navbar-list">
                    <li class="nav-item">
                        <a class="search-toggle iq-waves-effect language-title" href="#"><img
                                src="{{ asset('backend') }}/images/small/flag-01.png" alt="img-flaf"
                                class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i
                                class="ri-arrow-down-s-line"></i></a>
                        <div class="iq-sub-dropdown">
                            <a class="iq-sub-card" href="#"><img src="{{ asset('backend') }}/images/small/flag-02.png"
                                    alt="img-flaf" class="img-fluid mr-2" />French</a>
                            <a class="iq-sub-card" href="#"><img src="{{ asset('backend') }}/images/small/flag-03.png"
                                    alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                            <a class="iq-sub-card" href="#"><img src="{{ asset('backend') }}/images/small/flag-04.png"
                                    alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                            <a class="iq-sub-card" href="#"><img src="{{ asset('backend') }}/images/small/flag-05.png"
                                    alt="img-flaf" class="img-fluid mr-2" />German</a>
                            <a class="iq-sub-card" href="#"><img src="{{ asset('backend') }}/images/small/flag-06.png"
                                    alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="search-toggle iq-waves-effect">
                            <div id="lottie-beil"></div>
                            <span class="bg-danger dots"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Notifications<small
                                                class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>

                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Emma Watson Nik</h6>
                                                <small class="float-right font-size-12">Just Now</small>
                                                <p class="mb-0">95 MB</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New customer is join</h6>
                                                <small class="float-right font-size-12">5 days ago</small>
                                                <p class="mb-0">Jond Nik</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                <small class="float-right font-size-12">2 days ago</small>
                                                <p class="mb-0">Jond Nik</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                <small class="float-right font-size-12">3 days ago</small>
                                                <p class="mb-0">Jond Nik</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="search-toggle iq-waves-effect">
                            <div id="lottie-mail"></div>
                            <span class="bg-primary count-mail"></span>
                        </a>
                        <div class="iq-sub-dropdown">
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                        <h5 class="mb-0 text-white">All Messages<small
                                                class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/01.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Nik Emma Watson</h6>
                                                <small class="float-left font-size-12">13 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/02.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                <small class="float-left font-size-12">20 Apr</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/03.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Why do we use it?</h6>
                                                <small class="float-left font-size-12">30 Jun</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/04.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Variations Passages</h6>
                                                <small class="float-left font-size-12">12 Sep</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center">
                                            <div class="">
                                                <img class="avatar-40 rounded"
                                                    src="{{ asset('backend') }}/images/user/05.jpg" alt="">
                                            </div>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                <small class="float-left font-size-12">5 Dec</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-list">
                <li>
                    <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center bg-primary rounded">
                        <img src="{{ asset('backend') }}/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                        <div class="caption">
                            <h6 class="mb-0 line-height text-white">{{ Auth::user()->name }}</h6>
                            <span class="font-size-12 text-success">Online</span>
                        </div>
                    </a>
                    <div class="iq-sub-dropdown iq-user-dropdown">
                        <div class="iq-card shadow-none m-0">
                            <div class="iq-card-body p-0 ">
                                <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">{{ Auth::user()->name }} </h5>
                                    <span class="text-success font-size-12">Online</span>
                                </div>
                                <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                        <div class="rounded iq-card-icon iq-bg-primary">
                                            <i class="ri-file-user-line"></i>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-0 ">My Profile</h6>
                                            <p class="mb-0 font-size-12">View personal profile details.</p>
                                        </div>
                                    </div>
                                </a>
                                
                                <div class="d-inline-block w-100 text-center p-3">
                                    <a class="btn btn-primary dark-btn-primary" href="{{ route('logout') }}" role="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                                        out<i class="ri-login-box-line ml-2"></i></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>