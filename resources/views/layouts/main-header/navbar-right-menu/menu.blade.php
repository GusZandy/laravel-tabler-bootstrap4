<div class="d-flex order-lg-2 ml-auto">
    <div class="nav-item d-none d-md-flex">
        <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
    </div>
    <div class="dropdown d-none d-md-flex">
        <a class="nav-link icon" data-toggle="dropdown">
            <i class="fe fe-bell"></i>
            <span class="nav-unread"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a href="#" class="dropdown-item d-flex">
                <span class="avatar mr-3 align-self-center" style=""></span>
                <div>
                    <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                    <div class="small text-muted">10 minutes ago</div>
                </div>
            </a>
            <a href="#" class="dropdown-item d-flex">
                <span class="avatar mr-3 align-self-center" style=""></span>
                <div>
                    <strong>Alice</strong> started new task: Tabler UI design.
                    <div class="small text-muted">1 hour ago</div>
                </div>
            </a>
            <a href="#" class="dropdown-item d-flex">
                <span class="avatar mr-3 align-self-center" style=""></span>
                <div>
                    <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                    <div class="small text-muted">2 hours ago</div>
                </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item text-center">Mark all as read</a>
        </div>
    </div>
    <div class="dropdown">
        <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
            <span class="avatar" style=""></span>
            <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon fe fe-user"></i> Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon fe fe-settings"></i> Settings
            </a>
            <a class="dropdown-item" href="#">
                <span class="float-right"><span class="badge badge-primary">6</span></span>
                <i class="dropdown-icon fe fe-mail"></i> Inbox
            </a>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon fe fe-send"></i> Message
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon fe fe-help-circle"></i> Need help?
            </a>
            <div class="dropdown-divider"></div>
{{--            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                <i class="dropdown-icon fe fe-log-out"></i> {{ __('Logout') }}--}}
{{--            </a>--}}
{{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                @csrf--}}
{{--            </form>--}}
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </div>
    </div>
</div>
<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
    <span class="header-toggler-icon"></span>
</a>
