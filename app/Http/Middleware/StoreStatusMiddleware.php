<?php
/*

 # APPLICATION NAME: Smart-POS System
 # AUTHOR:           Mathew Harb
 # SITE:             https://github.com/mathewharb
 # EMAIL:            harbmathew@yahoo.com
 # CONTACT:          +2207425159

*/
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CommonSetting;
class StoreStatusMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && CommonSetting::storestatus()=='yes') {
            return redirect('/storeclose');
        }

        return $next($request);
    }
}
