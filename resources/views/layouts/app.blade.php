<!DOCTYPE html>
<html lang="es">
<head>
       @include('layouts.head')
</head>
<body id="app-layout">
    
    @include('layouts.header')  
        
        @yield('content')
        
    @stack('scripts')

</body>
</html>