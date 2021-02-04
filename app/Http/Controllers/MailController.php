<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
        Newsletter::create($request);
        return redirect()->route('accueil');
    }
}
