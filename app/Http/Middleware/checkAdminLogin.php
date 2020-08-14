<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkAdminLogin
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
        if (Auth::check())
        {
            $user = Auth::User();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
            if ($user->role_user == 0 && $user->status == 1 )
            {
                return $next($request);
            }
            elseif($user->role_user == 2 && $user->status == 1 )
            {
                return $next($request);
            }
            else
            {
                Auth::logout();
                return redirect()->route('get_login')->with('thongbao',"Đăng nhập thất bại");
            }
        } else
            return redirect('admin/login');

    }
    
}
