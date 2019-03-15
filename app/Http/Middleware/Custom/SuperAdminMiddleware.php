<?php
namespace App\Http\Middleware\Custom;

use Closure;

class SuperAdminMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // check if user is not Admin then redirect to homepage
        if (! auth()->check() || ! $request->user()->isSuperAdmin()) {
            return redirect('/login');
        }

        return $next($request);
    }
}
