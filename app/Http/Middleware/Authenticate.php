<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */

    protected $user_route  = 'user.login';
    protected $shop_route = 'shop.login';

    protected function redirectTo($request)
    {
        // if (in_array('admin', $exception->guards(), true)) {
        //     return redirect()->guest(route('admin.login'));
        // }
        if (!$request->expectsJson()) {
            if (Route::is('user.*')) {
                return route($this->user_route);
            } elseif (Route::is('admin.*')) {
                return route($this->admin_route);
            }
        }
    }
}
