<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.header')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('admin.partials.navbar')
            @include('admin.partials.sidebar')
			
			@yield('content')
			
			@include('admin.partials.footer')
        </div>
    </div>

    @include('admin.partials.scripts')
</body>

</html>
