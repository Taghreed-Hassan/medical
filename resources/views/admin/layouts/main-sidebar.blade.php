<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Admin/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Admin/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Admin/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('Admin/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('Admin/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0">{{Auth::user()->name}}</h4>
                    <span class="mb-0 text-muted">{{Auth::user()->email}}</span>
                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">{{trans('admin/sidbar.Services')}}</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('Services.index') }}"> <i class="fa fa-server text-primary ml-1"></i> <span class="side-menu__label">{{trans('admin/sidbar.Services')}}</span></a>
            </li>
            <li class="side-item side-item-category"> الاقسام</li>
            <li class="slide">
                <a class="side-menu__item" href=""> <i class="fa fa-adjust text-info ml-1"></i> <span class="side-menu__label"> الاقسام </span></a>
            </li>
            <li class="side-item side-item-category">الاطباء</li>
            <li class="slide">
                <a class="side-menu__item" href=""> <i class="fa fa-desktop text-success ml-1"></i> <span class="side-menu__label">الاطباء</span></a>
            </li>
            <li class="side-item side-item-category">المواعيد</li>
            <li class="slide">
                <a class="side-menu__item" href=""> <i class="fa fa-times-circle text-secondary ml-1"></i> <span class="side-menu__label">المواعيد</span></a>
            </li>
            <li class="side-item side-item-category">{{trans('admin/sidbar.Patiens_add')}}</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('Patients.index') }}"> <i class="fa fa-server ml-1"></i> 
                    <span class="side-menu__label"> {{trans('admin/sidbar.Patiens_add')}}</span></a>
            </li>
        </ul>
    </div>
</aside>
<!-- main-sidebar -->
