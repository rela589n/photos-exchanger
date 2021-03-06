<?php

namespace App\Providers;

use App\Events\Files\FileDeleted;
use App\Events\Users\Auth\LoggedOut\ClientLoggedOut;
use App\Events\Users\Auth\Registered\ClientRegistered;
use App\Listeners\DeleteFileSubordinateRelationships;
use App\Listeners\InvalidateSession;
use App\Listeners\LogUserIn;
use App\Listeners\RegenerateCsrfToken;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ClientRegistered::class => [
            LogUserIn::class,
        ],
        ClientLoggedOut::class  => [
            InvalidateSession::class,
            RegenerateCsrfToken::class,
        ],
        FileDeleted::class      => [
            DeleteFileSubordinateRelationships::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
        //
    }
}
