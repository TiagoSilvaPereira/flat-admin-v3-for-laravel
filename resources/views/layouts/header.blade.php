<nav class="navbar navbar-default" id="navbar">
    <div class="container-fluid">
        <div class="navbar-collapse collapse in">
            <ul class="nav navbar-nav navbar-mobile">
                <li>
                    <button type="button" class="sidebar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                </li>
                <li class="logo">
                    <a class="navbar-brand" href="#"><span class="highlight">{{ config('app.name', 'Laravel') }}</span> Admin</a>
                </li>
                <li>
                    <button type="button" class="navbar-toggle">
                        <img class="profile-img" src="{{asset('flat-admin/images/profile.png')}}">
                    </button>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
                <li class="navbar-title">@yield('title')</li>
                <li class="navbar-search hidden-sm">
                  <input id="search" type="text" placeholder="Search..">
                  <button class="btn-search"><i class="fa fa-search"></i></button>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown notification">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></div>
                        <div class="title">New Orders</div>
                        <div class="count">0</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="dropdown-header">Ordering</li>
                            <li class="dropdown-empty">No New Ordered</li>
                            <li class="dropdown-footer">
                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown notification warning">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon"><i class="fa fa-comments" aria-hidden="true"></i></div>
                        <div class="title">Unread Messages</div>
                        <div class="count">99</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="dropdown-header">Message</li>
                            <li>
                                <a href="#">
                                    <span class="badge badge-warning pull-right">10</span>
                                    <div class="message">
                                        <img class="profile" src="https://placehold.it/100x100">
                                        <div class="content">
                                            <div class="title">"Payment Confirmation.."</div>
                                            <div class="description">Alan Anderson</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown notification danger">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="icon"><i class="fa fa-bell" aria-hidden="true"></i></div>
                        <div class="title">System Notifications</div>
                        <div class="count">10</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li class="dropdown-header">Notification</li>
                            <li>
                                <a href="#">
                                    <span class="badge badge-danger pull-right">8</span>
                                    <div class="message">
                                        <div class="content">
                                            <div class="title">New Order</div>
                                            <div class="description">$400 total</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <a href="#">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </li>

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else

                    <li class="dropdown profile">
                        <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                            <img class="profile-img" src="{{asset('flat-admin/images/profile.png')}}">
                            <div class="title">Profile</div>
                        </a>
                        <div class="dropdown-menu">
                            <div class="profile-info">
                              <h4 class="username">{{ Auth::user()->name }}</h4>
                            </div>
                            <ul class="action">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>