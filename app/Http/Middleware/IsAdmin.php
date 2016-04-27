<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Session;

class IsAdmin
{
    private $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if($this->auth->user()->type <> 'admin') {
            // si no es admin lo desconecto
            $this->auth->logout();

            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                Session::flash('message',"Spiacenti! L'accesso è consentito ai soli Utenti esplicitamente autorizzati");
                Session::flash('flash_type','alert-danger');
                return redirect()->guest('login');
            }
        }
        return $next($request);
    }
}
