<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class checkUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::user()->user_type =='user'){
            return redirect()->route('user.dashboard');
        }

        if(Auth::user()->user_type =='admin'){
            return redirect()->route('admin.dashboard');
        }

        if(Auth::user()->user_type =='employee'){
            return redirect()->route('employee.dashboard');
        }


        return $next($request);
    }
}
