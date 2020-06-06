@include('admin.layouts.header')
@include('admin.layouts.navbar')

<div class="content">
    @include('admin.layouts.settings')
    @include('admin.layouts.message')
    @yield('content')
                     
</div>
@include('admin.layouts.footer')