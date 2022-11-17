<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateInPanel extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string[] ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        //dd($_COOKIE);
        $this->authenticate($request, $guards);

        if (!$this->auth->user()->canAuthInPanel()) {

            $this->auth->guard()->logout();
            $request->session()->invalidate();

            return redirect(route('login'))
                ->with('message', 'Seu login não permite acessar essa área!')
                ->with('messageType', 'w');

        }

        //dd($this->auth->user()->is_user_from_hospital);

        return $next($request);
    }
}
