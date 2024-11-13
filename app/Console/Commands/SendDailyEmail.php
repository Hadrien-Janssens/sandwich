<?php

namespace App\Console\Commands;

use App\Mail\DailyEmail;
use App\Notifications\DailyEmailNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class SendDailyEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-daily-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a daily email to a specific user at 8 AM';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $recipient = 'hadrien.janssens7@gmail.com'; // L'email du destinataire
        $user = \App\Models\User::where('email', $recipient)->first(); // Récupère l'utilisateur par email

        // Envoie la notification
        Notification::send($user, new DailyEmailNotification());

        $this->info('Daily email sent successfully.');
    }
}
