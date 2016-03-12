<!DOCTYPE html>
<html lang="es">
<head>
       @include('layouts.head')
</head>
<body id="app-layout">
    
    @include('layouts.header')  
        
        @yield('content')
        

        <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{url('js/ct-navbar.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @stack('scripts')

</body>
</html>