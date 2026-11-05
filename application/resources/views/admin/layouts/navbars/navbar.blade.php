@if(auth()->check() && !in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
    @include('admin.layouts.navbars.navs.auth')
@endif
    
@if(!auth()->check() || in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
    @include('admin.layouts.navbars.navs.guest')
@endif