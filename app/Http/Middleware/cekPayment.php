<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekPayment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::payment()){
            return $next($request);
        }
        return redirect('/log-in')->with('notAllowed', 'Silahkan login terlebih dahulu!');
        
    }
}
