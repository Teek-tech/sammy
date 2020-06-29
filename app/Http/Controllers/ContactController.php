<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Contact as NotifyContact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact as ContactAdmin;
use App\Mail\LifeCoaching as LifeCoachingAdmin;
use App\Mail\CorporateCoaching as CorporateCoachingAdmin;
use App\Mail\BookSammy as BookAdmin;
use App\Contact;
class ContactController extends Controller
{
    //
    public function index(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:25',
            'email' => 'required',
            'subject' => 'required|max:30',
            'message' => 'required|max:500'
        ]);
        if($validator->fails()){
             return back()->with('success', 'Please fill in fields appropriately');
           // return 'sorry!!!';
        }
        
            $contact = new Contact;
            $contact->email= $request->input('email');
            $contact->full_name = $request->input('full_name');
            $contact->subject = $request->input('subject');
            $contact->message = $request->input('message');
            $admin_email = 'tochukwuodoeme@yahoo.com';
            Mail::to($admin_email)->send(new ContactAdmin($contact));
            $contact->notify(new NotifyContact($contact));

       
            return back()->with('success', 'Please fill in fields appropriately');
    }


    public function LifeCoaching(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:25',
            'email' => 'required',
            'phone' => 'required|max:30',
            'occupation' => 'required|max:30',
            'comment' => 'required|max:500'
        ]);
        if($validator->fails()){
             return back()->with('success', 'Please fill in fields appropriately');
           // return 'sorry!!!';
        }
        
            $contact = new Contact;
            $contact->email= $request->input('email');
            $contact->full_name = $request->input('full_name');
            $contact->phone = $request->input('phone');
            $contact->occupation = $request->input('occupation');
            $contact->comment = $request->input('comment');
            $admin_email = 'tochukwuodoeme@yahoo.com';
            Mail::to($admin_email)->send(new LifeCoachingAdmin($contact));

       
            return back()->with('success', 'Please fill in fields appropriately');
    }

  public function CorporateCoaching(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required|max:15',
            'address' => 'required|max:30',
            'sector' => 'required|max:50',
            'occupation' => 'required|max:50',
            'revenue' => 'required',
            'employees' => 'required',
            'comment' => 'required|max:500'
        ]);
        
        if($validator->fails()){
             return back()->with('success', 'Please fill in fields appropriately');
            //return 'sorry!!!';
        }
        
            $contact = new Contact;
            $contact->full_name = $request->input('full_name');
            $contact->email= $request->input('email');
            $contact->phone = $request->input('phone');
            $contact->address = $request->input('address');
            $contact->sector = $request->input('sector');
            $contact->occupation = $request->input('occupation');
            $contact->revenue = $request->input('revenue');
            $contact->employees = $request->input('employees');
            $contact->comment = $request->input('comment');
            $admin_email = 'tochukwuodoeme@yahoo.com';
          //  dd($contact);
            Mail::to($admin_email)->send(new CorporateCoachingAdmin($contact));

       
            return back()->with('success', 'Please fill in fields appropriately');
    }

    public function booking(Request $request){
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required',
            'phone' => 'required|max:15',
            'address' => 'required|max:30',
            'sector' => 'required|max:50',
            'occupation' => 'required|max:50',
            'revenue' => 'required',
            'employees' => 'required',
            'comment' => 'required|max:500'
        ]);
        
        if($validator->fails()){
             return back()->with('success', 'Please fill in fields appropriately');
            //return 'sorry!!!';
        }
        
            $contact = new Contact;
            $contact->full_name = $request->input('full_name');
            $contact->email= $request->input('email');
            $contact->phone = $request->input('phone');
            $contact->address = $request->input('address');
            $contact->sector = $request->input('sector');
            $contact->occupation = $request->input('occupation');
            $contact->revenue = $request->input('revenue');
            $contact->employees = $request->input('employees');
            $contact->comment = $request->input('comment');
            $admin_email = 'tochukwuodoeme@yahoo.com';
            Mail::to($admin_email)->send(new BookAdmin($contact));

       
            return back()->with('success', 'Please fill in fields appropriately');
    }
}
