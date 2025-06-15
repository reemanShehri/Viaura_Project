<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ViauraEducationController extends Controller
{
    //


    public function vaiura(){
        return view('site1.Viaura'); // اسم الفيو اللي هتعرضه
    }

       public function index()
    {
        return view('site1.education'); // اسم الفيو اللي هتعرضه
    }


    public function storeContact(Request $request)
{
    // Validation
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' =>  'required|max:15',

        'message' => 'required|string',
    ]);

      $data = $request->except('_token');

      Mail::to('Admin@gmail.com')->queue(new contactMail($data));

    //    dd($data);

    return back()->with('success', 'Message sent successfully!');
}

public function footer()
{
    return view('site1.footer');
}





}
