<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Contact::where('status', 1)->paginate(9);
        return view('contact')->with('messages', $messages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($data)
    {
        Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'title' => $data['subject'],
            'message' => $data['message'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //validate
        $validatedData = $request->validate([
            'name' => ['required',],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
        
        // dd($validatedData);
        //store
        $this->create($validatedData);

        //redirect
        return redirect()->back()->with('message', 'success');
    }

}
