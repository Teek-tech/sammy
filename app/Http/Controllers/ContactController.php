<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Contact as notifyContact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Notifications\Notifiable;

class ContactController extends Controller
{
    //
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if($validator->fails()){
            // return back()->with('error', 'please fill in fields appropriately');
            return 'sorry!!!';
        }
        else{
            $email = Input::get('email');
            $email->notify(new notifyContact ($email));
        }
        return view('contact');
    }

}
