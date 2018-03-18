<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactMessage;

class MessagesController extends Controller
{
    
	public function submit(Request $request){
		
		$this->validate($request,[
			'name' => 'required',
			'email' => 'required'
		]);

		$message = new ContactMessage;
		$message->name = $request->input('name');
		$message->email = $request->input('email');
		$message->message = $request->input('msg');

		$message->save();


		return redirect('/')->with('success','Data sent');

	}


}
