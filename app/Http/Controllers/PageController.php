<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function services() {
        return view('services');
    }

    public function contact() {
        return view('contact');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create($request->all());

        return redirect('/contact')->with('success', 'Message sent!');
    }
}
