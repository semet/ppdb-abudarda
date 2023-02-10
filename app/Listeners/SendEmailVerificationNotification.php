<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\EmailVerificationMail;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailVerificationNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        // Mail::to($event->user->email)->send(new EmailVerificationMail($event->user));
        $verification = $event->user
            ->emailVerification()
            ->create([
                'expires_at' => Carbon::now()->addMinutes(5)
            ]);
        Log::info('sending mail to ' . $event->user->email);
        Log::info('Please visit ' . route('register.verify.email', $verification->id));
    }
}
