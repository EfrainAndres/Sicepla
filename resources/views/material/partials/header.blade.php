<div class="page-header navbar navbar-fixed-top">
    {{-- BEGIN HEADER INNER --}}
    <div class="page-header-inner container">
        {{-- BEGIN LOGO --}}
        <div class="page-logo">
            <a href="javascript:;">
                <img src="{{ asset('assets/layouts/layout2/img/logo-default.png') }}" alt="Logo" class="logo-default" />
            </a>
            <div class="menu-toggler sidebar-toggler">
                {{-- DOC: Remove the above "hide" to enable the sidebar toggler button on header --}}
            </div>
        </div>
        {{-- END LOGO --}}
        {{-- BEGIN RESPONSIVE MENU TOGGLER --}}
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        {{-- END RESPONSIVE MENU TOGGLER --}}
        {{-- BEGIN PAGE ACTIONS --}}
        {{-- DOC: Remove "hide" class to enable the page header actions --}}
        {{--
            <div class="page-actions">
            <div class="btn-group">
                <button type="button" class="btn btn-circle btn-outline red dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-plus"></i>&nbsp;
                    <span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;
                    <i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="javascript:;"><i class="icon-docs"></i> New Post </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="icon-tag"></i> New Comment </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="icon-share"></i> Share </a>
                    </li>
                    <li class="divider"> </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-flag"></i> Comments
                            <span class="badge badge-success">4</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-users"></i> Feedbacks
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
         --}}
        {{-- END PAGE ACTIONS --}}
        {{-- BEGIN PAGE TOP --}}
        <div class="page-top">
            {{-- BEGIN HEADER SEARCH BOX --}}
            {{-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box --}}
            {{--
                <form class="search-form search-form-expanded" action="javascript:;" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." name="query">
                        <span class="input-group-btn">
                            <a href="javascript:;" class="btn submit">
                                <i class="icon-magnifier"></i>
                            </a>
                        </span>
                    </div>
                </form>
             --}}
            {{-- END HEADER SEARCH BOX --}}
            {{-- BEGIN TOP NAVIGATION MENU --}}
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    {{-- BEGIN NOTIFICATION DROPDOWN --}}
                    {{-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte --}}
                    {{-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode --}}
                    {{-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class --}}
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-bell"></i>
                            <span class="badge badge-default"> 7 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">12 pending</span> notifications</h3>
                                <a href="javascript:;">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-success">
                                                <i class="fa fa-plus"></i>
                                            </span> New user registered. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                            </span> Server #12 overloaded. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 mins</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-warning">
                                                <i class="fa fa-bell-o"></i>
                                            </span> Server #2 not responding. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">14 hrs</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-info">
                                                <i class="fa fa-bullhorn"></i>
                                            </span> Application error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">2 days</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                            </span> Database overloaded 68%. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 days</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                            </span> A user IP blocked. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">4 days</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-warning">
                                                <i class="fa fa-bell-o"></i>
                                            </span> Storage Server #4 not responding dfdfdfd. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">5 days</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-info">
                                                <i class="fa fa-bullhorn"></i>
                                            </span> System Error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">9 days</span>
                                            <span class="details">
                                            <span class="label label-sm label-icon label-danger">
                                                <i class="fa fa-bolt"></i>
                                            </span> Storage server failed. </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    {{-- END NOTIFICATION DROPDOWN --}}
                    {{-- BEGIN INBOX DROPDOWN --}}
                    {{-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte --}
                    {{-- END INBOX DROPDOWN --}}
                    {{-- BEGIN TODO DROPDOWN --}}
                    {{-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte --}}
                    {{-- END TODO DROPDOWN --}}
                    {{-- BEGIN USER LOGIN DROPDOWN --}}
                    {{-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte --}}
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="{{ asset('assets/layouts/layout2/img/avatar3_small.jpg')}}" />
                            <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="javascript:;"><i class="icon-user"></i> Perfil </a>
                            </li>

                            <li class="divider"> </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i> Salir </a>
                                </a>
                                {!! Form::open(['id' => 'logout-form', 'method' => 'POST', 'url' => route('logout')]) !!}
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </li>
                    {{-- END USER LOGIN DROPDOWN --}}
                    {{-- BEGIN QUICK SIDEBAR TOGGLER --}}
                    {{-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte --}}

                    {{-- END QUICK SIDEBAR TOGGLER --}}
                </ul>
            </div>
            {{-- END TOP NAVIGATION MENU --}}
        </div>
        {{-- END PAGE TOP --}}
    </div>
    {{-- END HEADER INNER --}}
</div>
