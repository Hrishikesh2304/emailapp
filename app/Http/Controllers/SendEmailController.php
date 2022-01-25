<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NotifyMail;

class SendEmailController extends Controller
{
    /* public function index()
    {
 
      Mail::to('patilhrishikesh97hp@gmail.com')->send(new NotifyMail());
    }  */

    public function sendBulkMail(Request $request)
    {
    	$details = [
    		'subject' => 'daily newsletter'
    	];

    	// send all mail in the queue.
        $job = (new \App\Jobs\SendBulkQueueEmail($details))
            ->delay(
            	now()
            	->addSeconds(2)
            ); 

        dispatch($job);

        echo "Bulk mail send successfully in the background...";
    }
}
