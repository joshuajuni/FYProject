<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Session;
use Notification;
use App\Notifications\SessionNotification;
use Carbon\Carbon;

class SessionReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $sessions = Session::where('date', '>=', Carbon::today())->get();

        foreach ($sessions as $session) {
            if ($session->date == Carbon::today()->toDateString() || $session->date == Carbon::today()->addDay()->toDateString() || $session->date == Carbon::today()->addWeek()->toDateString() ) {
                $users = [
                    $session->student->profile->user,
                    $session->student->supervisor->profile->user,
                    $session->examiner1->profile->user,
                    $session->examiner2->profile->user,
                ];

                $sessionData = [
                    'url'   => url('session/view', $session->id)
                ];
                foreach ($users as $user) {
                   Notification::send($user, new SessionNotification($sessionData));
                }
            }
        }
    }
}
