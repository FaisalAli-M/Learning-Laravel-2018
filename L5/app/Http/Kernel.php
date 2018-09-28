<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class ,
        \App\Http\Middleware\LanguageSwitcher::class,
       // Middleware\F_loggerMiddleware::class, // this is a method of Regidter global middleware it when when type all url hit and :: is s resolution opeator if 
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\LanguageSwitcher::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
      //  WOh middleware jin ko he sth he chalana h jo alag alag nhe chal skty unhy hum Group Middleware mai Register krty hen like login section
       // or is mai key value dyty hen register k liye or key mai group name or value mai array bana k middleware register krty hen
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'F_logger' => \App\Http\Middleware\F_loggerMiddleware::class, // it runs those route which we want to use this by calling ->middlwware('KeyName')
        'C_R' => \App\Http\Middleware\CheckRole::class, // it runs those route which we want to use this by calling ->middlwware('KeyName')
        'language_s' => \App\Http\Middleware\LanguageSwitcher::class,
    ];
}
