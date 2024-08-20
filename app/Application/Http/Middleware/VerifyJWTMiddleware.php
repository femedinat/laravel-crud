<?php
 
namespace App\Application\Http\Middleware;
 
use Closure;
 
class VerifyJWTMiddleware
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
        if ($request->input('token') !== 'my-secret-token') {
            return view('welcome');
        }
 
        return $next($request);
    }
}