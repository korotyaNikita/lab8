<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordResetWithQueueNotification extends ResetPassword implements ShouldQueue
{
    use Queueable;
}
