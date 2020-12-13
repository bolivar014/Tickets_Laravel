<?php 
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\Route;
    /*
        Verifica si la ruta activa esta siendo en uso
        @param string $route
        @param string #class
        @return string 
    */

    function isRouteActive($route, $class = 'active') {
        // Helper para verificar posición de la ruta actual
        if( Str::contains(Route::currentRouteName(), $route) ) {
            return $class;
        }

        // De lo contrario, retornamos null
        return null;
    }