<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Session;
use Notification;
use App\Notifications\SessionNotification;
use Carbon\Carbon;

class NotificationController extends Controller
{
    public function sendReminder (Session $session)
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
