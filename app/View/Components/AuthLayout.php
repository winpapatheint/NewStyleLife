<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AuthLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
    
        $notifications = Notification::select('message', 'time')->get();
        $notiCount=0;
        foreach($notifications as $notify)
        {
            if(!empty($notify->time))
            {
            $notiCount++;
            }
        }

        return view('layouts.auth',compact('notiCount','notifications'));
    }
}
