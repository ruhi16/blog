<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // echo Auth::user()->id;
        // $u = Auth::user();
        if( Auth::user()->id == $request->route('id') ){
            // echo "User: ". Auth::user()->name;
        }else{
            echo "User not found";
            return redirect()->to('/');
        }
        
        return $next($request);
    }
}
