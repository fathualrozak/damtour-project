<?php namespace App\Http\Middleware;

use Closure;

class Admin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        $req = 0;
        if ($req == 1) {
            return redirect('auth/login');
        }

		return $next($request);
	}

}
