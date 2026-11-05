<?php



namespace App\Http\Middleware;



use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware

{

    /**

     * Get the path the user should be redirected to when they are not authenticated.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return string

     */

    protected function redirectTo($request)
    {

        if (!$request->expectsJson()) {
            $prifixName =   Request()->route()->getPrefix();


            if ($prifixName=='/isgi-admin') {
               return route('admin::get_login');
            } else {
               return route('main');
            }
         }


    }

}

