<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
	{
		$data = array('custom1' => $_POST['custom1'] , 'custom2' => $_POST['custom2']);

		Mail::send('emails.test', [], function($message) use ($data)
		{
    		$headers = $message->getHeaders();
   	 		$headers->addTextHeader('X-MC-MergeVars', json_encode($data));
    		$headers->addTextHeader('X-MC-Template', 'test-template');
			$message->to($_POST['email'], 'Noobs')->subject('Testing Mails is no fun!');
		});

		return "Your email has been sent successfully";
	}

}
