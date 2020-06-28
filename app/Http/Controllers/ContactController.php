<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Contact as NotifyContact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Notifications\Notifiable;
use App\Contact;
class ContactController extends Controller
{
    //
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:5',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if($validator->fails()){
             return back()->with('error', 'please fill in fields appropriately');
           // return 'sorry!!!';
        }
        else{
            $contact = new Contact;
            $contact->email= $request->input('email');
            $contact->notify(new NotifyContact( $contact->email));
        }
        return view('contact');
    }

}
