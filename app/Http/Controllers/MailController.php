<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function create()
    {
        return view('/');
    }

    public function store($request)
    {
        Newsletter::create($request->except('_token'));
        return redirect()->route('accueil');
    }
}
