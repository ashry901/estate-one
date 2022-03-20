
{{--
    @if (auth('admin')->check())
        @include('dashboard.includes.sidebar.sidebar-admin')
    @endif

    @if (auth('supervisor')->check())
        @include('dashboard.includes.sidebar.sidebare-supervisor')
    @endif

    @if (auth('shiftleader')->check())
        @include('dashboard.includes.sidebar.sidebar-shiftleader')
    @endif

    @if (auth('director')->check())
        @include('dashboard.includes.sidebar.sidebar-director')
    @endif
--}}
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item">
            <a href="{{route('admin.dashboard')}}">
                <i class="la la-home"></i>
                <span class="menu-title" data-i18n="eCommerce">
                {{__('cpanel/sidebar.Dashboard')}}
            </span>
            </a>
        </li>

    {{--
    <li class=" navigation-header">
        <span>Students</span>
        <i class="la la-ellipsis-h"
           data-toggle="tooltip"
           data-placement="right"
           data-original-title="Students"></i>
    </li>
    --}}
</ul>
