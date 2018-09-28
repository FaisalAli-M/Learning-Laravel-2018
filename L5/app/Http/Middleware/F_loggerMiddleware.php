<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class F_loggerMiddleware
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
        Log::info("log Entry From F_LoggerMiddleware"); // then goto karnel.php and registered this middleware for use
        return $next($request);
        /* 
        An array of contextual data may also be passed to the log methods. This contextual data will be formatted and displayed with the log message:
        Log::info('User failed to login.', ['id' => $user->id]);
        
        we can use Log::emergency($message);
            Log::alert($message);
            Log::critical($message);
            Log::error($message);
            Log::warning($message);
            Log::notice($message);
            Log::info($message);
            Log::debug($message);
            */
    }
}
