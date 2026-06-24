<?php

namespace App\Console\Commands;

use App\Mail\ReminderMail;
use App\Models\Reminder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ReminderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-reminder-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Reminder Mail';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $reminders = Reminder::where('reminder_at', '<=', now())->get();

        foreach ($reminders as $reminder) {
            Mail::to('santhanakumar@gmail.com')->send(new ReminderMail($reminder));
        }

        return "Reminder send successfully!";
    }
}
