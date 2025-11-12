<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;


class HomeController extends Controller
{
    public function index()
    {
        
        
        return view('home.index');
    }


  public function submit(Request $request)  
{
    $validated = $request->validate([                                                                                                             //  here means that built-in validation method that checks whether the data sent from a form (via $request) meets certain rules.
        'full_name' => 'required|string|max:255', 
        'mobile'    => 'required|string|max:20',  
        'email'     => 'required|email',
        'company'   => 'required|string|max:255',
        'message'   => 'required|string|max:1000', 
    
    ]);

    // Save to database
    ContactMessage::create([                                                                                                                         //It inserts a new row in the database table immediately.The array inside create() tells Laravel which columns to fill.
        'full_name' => $validated['full_name'],                                                                                                       //This sets the full_name column of the new record to the value stored in $validated['full_name'].
        'mobile'    => $validated['mobile'],
        'email'     => $validated['email'],
        'company'   => $validated['company'],
        'message'   => $validated['message'],
    ]);

    return redirect()
        ->route('contact')
        ->with('success', 'Message sent successfully!');                       // create a blog management using laravel which can add(save and publish), Edit,list, delete with the help of markdown editor.
}
        



}