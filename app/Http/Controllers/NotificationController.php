<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Session;
use Notification;
use App\Notifications\SessionReminderNotification;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function sendReminder ()
    {
        $sessions = Session::where('date', '>=', Carbon::today())->get();

        foreach ($sessions as $session) {
            if ( $session->date == Carbon::today()->toDateString() ) {
                $users = [
                    $session->student->profile->user,
                    $session->student->supervisor->profile->user,
                    $session->examiner1->profile->user,
                    $session->examiner2->profile->user,
                ];

                $sessionData = [
                    'body'  => 'Your session is scheduled today.',
                    'url'   => url('session/view', $session->id)
                ];
                foreach ($users as $user) {
                   Notification::send($user, new SessionReminderNotification($sessionData));
                }
            }
            elseif ( $session->date == Carbon::today()->addDay()->toDateString() ) {
                $users = [
                    $session->student->profile->user,
                    $session->student->supervisor->profile->user,
                    $session->examiner1->profile->user,
                    $session->examiner2->profile->user,
                ];

                $sessionData = [
                    'body'  => 'Your session is scheduled tommorrow.',
                    'url'   => url('session/view', $session->id)
                ];
                foreach ($users as $user) {
                   Notification::send($user, new SessionReminderNotification($sessionData));
                }
            }
            elseif ( $session->date == Carbon::today()->addWeek()->toDateString()) {
                $users = [
                    $session->student->profile->user,
                    $session->student->supervisor->profile->user,
                    $session->examiner1->profile->user,
                    $session->examiner2->profile->user,
                ];

                $sessionData = [
                    'body'  => 'Your session is scheduled next week.',
                    'url'   => url('session/view', $session->id)
                ];
                foreach ($users as $user) {
                   Notification::send($user, new SessionReminderNotification($sessionData));
                }
            }
        }
    }
}
