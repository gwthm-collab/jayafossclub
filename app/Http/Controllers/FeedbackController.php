<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class FeedbackController extends Controller
{
    public function submit(Request $req){
        $this->validate($req, [
            'name' => 'required',
            'email' => 'required',
            'feedback' => 'required'
        ]);
        
        //Create new Feedback
        $message = new Feedback;
        $message->name = $req->input('name');
        $message->email = $req->input('email');
        $message->feedback = $req->input('feedback');

        //Save the feedback
        $message->save();

        //Redirect 
        return redirect('/')->with('success', 'Feedback Submitted');
    }
}
