<?php

namespace app\http\middleware;

class CheckLogin
{
    public function handle($request, \Closure $next,$arg)
    {
        if(!session('?username')){
            $id = 1;
            return view('index@login/index',compact('id'));
        }
        return $next($request);
    }
}
